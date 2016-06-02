<?php

//Create a Tools class that is going to contain all og my custom helpers
class Tools {


	//Curl Request to scrape a url
	public static function getDataFromUrl ($baseUrl, $url, $post = null, $headers = array()) {

    	$url = $baseUrl.$url;

        //Echo the request url
        // echo $url.'<br>';
        // die;

        $ch = curl_init();
        $timeout = 60;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

        //Follow redirects
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); Erroing out in live SMH

        //Basic auth
        //curl_setopt($ch, CURLOPT_USERPWD, 'fei' . ":" . 'fei_dev');

        if (count($headers) > 0) {
        	//Set correct headers
	        curl_setopt($ch,CURLOPT_HTTPHEADER, $headers);
        }

       	//If post
       	if ($post) {

       		$postString = '';

       		if (is_array($post)) {
       			foreach ($post as $key => $value) {
	       			$postString .= $key.'='.$value.'&';
	       		}

	       		$postString = substr($postString, 0, -1);
       		}else {
       			$postString = $post;
       		}

       		//echo $postString.'<br>';
       		//echo 'Length=6&ALLDIGIT=ALL6&CTRY=0000&SITCCODE=&Month=08&Year=2013&x=16&y=8';

	       	curl_setopt($ch, CURLOPT_POST, 1);
    			curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);//"postvar1=value1&postvar2=value2&postvar3=value3");
    		}

        $data = curl_exec($ch);
        $info = curl_getinfo($ch);

  /*      echo "<pre>";
        print_r($info);
        die();*/

        curl_close($ch);



        return $data;

    }


  //Request to get the blog posts
  public static function getBlogPosts($page = 1, $records_per_page = 10) {

    //$current_domain = $_SERVER['HTTP_HOST'];

    $current_domain = 'www.fei.edu';

    //Get the blog posts that we are going to use
    $xmlFeed = Tools::getDataFromUrl($current_domain, '/wordpress/feed/');
/*
    echo $xmlFeed;
    die();*/

    //$xmlFeed = str_replace(array("&amp;", "&"), array("&", "&amp;"), $xmlFeed);

    //$xmlFeed=preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $xmlFeed);

    //return $xmlFeed;

    $parsedXML = simplexml_load_string($xmlFeed);

    $articles = array();

    $total = count($parsedXML->channel->item);

    for ($i=(($page -1) * $records_per_page); $i < ($page * $records_per_page); $i++) {
        if(isset($parsedXML->channel->item[$i]->title)) {
            //Are we in the right language
            $rightLanguage = false;
            foreach ($parsedXML->channel->item[$i]->category as $category) {
                //echo $item->category."<br>";
                if ($category == strtolower(Session::get('locale'))) {
                    $rightLanguage = true;
                }
            }
            if($rightLanguage) {
                $articles[] = $parsedXML->channel->item[$i];
            }
        }
    }

    return $articles;
  }

  //Insert the user into the leads table and mailchimo
  public static function recordLead ($name, $email, $phone, $source, $message = '', $preferred_language = 'English') {

    //save the user in a mailchimp account
    MailchimpWrapper::lists()->subscribe('9a12984741',
      array(
        'email'=>$email
        ),
      array(
        'FNAME' => $name,
        'PHONE' => $phone,
        'LEADSRC' => $source,
        'MESSAGE' => $message,
        'LANGUAGE' => $preferred_language
      ), null, false, true);

    $check = DB::table('leads')->where('email', $email)->first();

    if(!$check) {
      //Insert the lead in the database for later use
      $id = DB::table('leads')->insertGetID(array(
              'name' => $name,
              'email' => $email,
              'phone' => $phone,
              'source' => $source,
              'message' => $message,
              'timestamp' => DB::raw('NOW()'),
              'preferred_language' => $preferred_language
              ));
      //Send hamlet a message with the lead name and phone number
      //Twilio::message('+13057535046', 'Hi Hamlet. Hurray! a new lead for FEI just came in. Name: '.$name.', Phone: '.$phone.'. Have a good day!');
      //Twilio::message('+13055888111', 'Hi Luis. Hurray! a new lead for FEI just came in. Name: '.$name.', Phone: '.$phone.'. Have a good day!');
      //Twilio::message('+17863776932', 'Hi Francarlos. Hurray! a new lead for FEI just came in. Name: '.$name.', Phone: '.$phone.'. Have a good day!');
    }else {
      //Insert the lead in the database for later use
      DB::table('leads')
          ->where('email', $email)
          ->update(array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'source' => $source,
            'message' => $message,
            'preferred_language' => $preferred_language
          ));

        $id = $check->id;
    }

    return $id;
  }


}