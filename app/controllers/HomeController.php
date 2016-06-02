<?php

class HomeController extends BaseController {

	protected $layout = 'home.index';

	function __construct () {

		//Ge the language file to get the meta data from
		$this->metaData = Lang::get('metadata');

	}

	public function showHome()
	{

		$headerData = array(
			'title' => (isset($this->metaData['home_title']))?$this->metaData['home_title']:null,
			'description' => (isset($this->metaData['home_desc']))?$this->metaData['home_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);

		//Create the view
		$this->layout->content =  View::make('home.content');

	}

	public function emailSubscribe () {

		//Subscribe email to mailchmp
	    MailchimpWrapper::lists()->subscribe('e61f8d3007',
	      array(
	        'email'=>Input::get('email')
	        ),null, null, false, true);

	    return 'true';
	}

	public function sideFormSubmission () {

		//Validate the variables
		$validator = Validator::make(
			array(
		        'name' => Input::get('name'),
		    	'email' => Input::get('email'),
		    	'phone' => Input::get('phone'),
		    	//'program' => Input::get('program'),
		    	'classSchedule' => Input::get('classSchedule'),
		    	'howSoon' => Input::get('howSoon'),
		    ),
		    array(
		    	'name' => 'required',
		    	'email' => 'required|email',
		    	'phone' => 'required',
		    	//'program' => 'required',
		    	'classSchedule' => 'required',
		    	'howSoon' => 'required',
		    )
		);

		if ($validator->fails())
		{
		    // The given data did not pass validation
		    $messages = $validator->messages();

		    return json_encode($messages);
		}

		//Get variables
		$data['name'] = Input::get('name');
		$data['email'] = Input::get('email');
		$data['phone'] = Input::get('phone');
		//$data['program'] = Input::get('program');
		$data['classSchedule'] = Input::get('classSchedule');
		$data['howSoon'] = Input::get('howSoon');
		$data['source'] = Input::get('source');
		$data['preferred_language'] = (strpos(Input::get('source'), '/es/') !== false || strpos(Input::get('source'), '/esl') !== false) ? 'Spanish' : 'English';

		//send a thank you email
		Mail::send('emails.form_thankyou', $data, function($message) use($data)
		  {
			$message->to($data['email'], $data['name'])->subject('Thank you for reaching out');
		});

		//Record the lead in the database and in Mailchimp and retrieve the id
		$lead_id = Tools::recordLead($data['name'], $data['email'], $data['phone'], $data['source'], '', $data['preferred_language']);

		//Record the answers to the questions
		DB::table('answers')
			->insert(array(
				'q_id' => 1,
				'answer' => $data['howSoon'],
				'lead_id' => $lead_id,
				'form_id' => 2
				));

		DB::table('answers')
			->insert(array(
				'q_id' => 2,
				'answer' => $data['classSchedule'],
				'lead_id' => $lead_id,
				'form_id' => 2
				));

		/*DB::table('answers')
			->insert(array(
				'q_id' => 3,
				'answer' => $data['program'],
				'lead_id' => $lead_id,
				'form_id' => 2
				));*/

		$data['answers'] = DB::table('answers')
								->leftJoin('questions', 'answers.q_id', '=', 'questions.id')
								->where('lead_id', $lead_id)
								->get();
		//label the form
		$data['form_label'] = 'Side Questionnaire';

		Mail::send('emails.form_admin_data', $data, function($message) use($data)
		  {
			$message->to(ADMIN_EMAIL, 'FEI Site')->subject('FEI Website Lead');
		});

		//Add the leads to Velocify
		if(!Config::get('app.debug')) {
			$source = $data['source'];

			$nameArray = explode(' ', Input::get('name'));
			$data = array();
			$data['first_name'] = $nameArray[0];
			$data['last_name'] = (isset($nameArray[1]))?$nameArray[1]:'';
			$data['phone'] = Input::get('phone');
			$data['email'] = Input::get('email');

			///Get the source url and break it down
			$sourceUrl = explode('?ad=', $source);

			if(isset($sourceUrl[1])) {
				$sourceCampaign = $sourceUrl[1];
				$data['InquiryType'] = $sourceCampaign;
			}else {
				$data['InquiryType'] = $source;
			}

		
			//Figure out the campaign by the source
			if(strpos($source, '/landing') !== false) {
				$posting = Tools::getDataFromUrl('https://secure.velocify.com', '/Import.aspx?Provider=Corpboost&Client=FloridaEducationInstitute1&CampaignId=1032', $data);
			}else {
				$posting = Tools::getDataFromUrl('https://secure.velocify.com', '/Import.aspx?Provider=Corpboost&Client=FloridaEducationInstitute1&CampaignId=1031', $data);
			}

		}

		return 'true';
	}

	public function hpSurveySubmission () {

		//Validate the variables
		$validator = Validator::make(
			array(
		        'name' => Input::get('name'),
		    	'email' => Input::get('email'),
		    	'phone' => Input::get('phone'),
		    	'hpQ1Answer' => Input::get('hpQ1Answer'),
		    	'hpQ2Answers' => Input::get('hpQ2Answers'),
		    	'hpQ3Answers' => Input::get('hpQ3Answers'),
		    	'hpQ4Answers' => Input::get('hpQ4Answers'),
		    ),
		    array(
		    	'name' => 'required',
		    	'email' => 'required|email',
		    	'phone' => 'required',
		    	'hpQ1Answer' => 'required',
		    	'hpQ2Answers' => 'required',
		    	'hpQ3Answers' => 'required',
		    	'hpQ4Answers' => 'required',
		    )
		);

		if ($validator->fails())
		{
		    // The given data did not pass validation
		    $messages = $validator->messages();

		    return json_encode($messages);
		}

		//Get variables
		$data['name'] = Input::get('name');
		$data['email']= Input::get('email');
		$data['phone']= Input::get('phone');
		$data['hpQ1Answer']= Input::get('hpQ1Answer');
    	$data['hpQ2Answers'] = Input::get('hpQ2Answers');
    	$data['hpQ3Answers'] = Input::get('hpQ3Answers');
    	$data['hpQ4Answers'] = Input::get('hpQ4Answers');
    	$data['source'] = Input::get('source');

    	//Figure out preferred language
    	$hpQ3Answers = json_decode($data['hpQ3Answers']);
		$total = count($hpQ3Answers);
		for ($i=0; $i < $total; $i++) {

			if(($i + 6) == 10) {
				if($hpQ3Answers[$i] > 5) {
					$data['preferred_language'] = 'English';
				}else {
					$data['preferred_language'] = 'Spanish';
				}
			}
		}

    	//Record the lead in the database and in Mailchimp and retrieve the id
		$lead_id = Tools::recordLead($data['name'], $data['email'], $data['phone'], $data['source'], '', $data['preferred_language']);

		$data['hash'] = base64_encode($lead_id);

		//Erase all the answers if there is any for this guy
		DB::table('answers')
			 ->where('form_id', 1)
			 ->where('lead_id', $lead_id)
			 ->delete();

		//Save the hash
		DB::table('leads')
			->where('id', $lead_id)
			->update(array(
				'hash' => $data['hash']
				));


		//Record the answers to the questions
		DB::table('answers')
			->insert(array(
				'q_id' => 4,
				'answer' => $data['hpQ1Answer'],
				'lead_id' => $lead_id,
				'form_id' => 1
				));

		DB::table('answers')
			->insert(array(
				'q_id' => 5,
				'answer' => $data['hpQ2Answers'],
				'lead_id' => $lead_id,
				'form_id' => 1
				));

		$hpQ3Answers = json_decode($data['hpQ3Answers']);
		$total = count($hpQ3Answers);
		for ($i=0; $i < $total; $i++) {

			if(($i + 6) == 10) {
				if($hpQ3Answers[$i] > 5) {
					$preferred_language = 'English';
				}else {
					$preferred_language = 'Spanish';
				}
			}

			DB::table('answers')
					->insert(array(
						'q_id' => ($i + 6),
						'answer' => $hpQ3Answers[$i],
						'lead_id' => $lead_id,
						'form_id' => 1
						));
		};

		DB::table('answers')
			->insert(array(
				'q_id' => 11,
				'answer' => $data['hpQ4Answers'],
				'lead_id' => $lead_id,
				'form_id' => 1
				));

		$data['answers'] = DB::table('answers')
								->leftJoin('questions', 'answers.q_id', '=', 'questions.id')
								->where('lead_id', $lead_id)
								->get();
		//label the form
		$data['form_label'] = 'Home Survey';

		Mail::send('emails.form_admin_data', $data, function($message) use($data)
		  {
			$message->to(ADMIN_EMAIL, 'FEI Site')->subject('FEI Website Lead');
		});

		Mail::send('emails.survey-results', $data, function($message) use($data)
		  {
			$message->to($data['email'], 'FEI')->subject('FEI Survey Results');
		});

		//Add the leads to Velocify
		if(!Config::get('app.debug')) {
			$nameArray = explode(' ', Input::get('name'));
			$data = array();
			$data['first_name'] = $nameArray[0];
			$data['last_name'] = (isset($nameArray[1]))?$nameArray[1]:'';
			$data['phone'] = Input::get('phone');
			$data['email'] = Input::get('email');

			///Get the source url and break it down
			$sourceUrl = explode('?ad=', Input::get('source'));

			if(isset($sourceUrl[1])) {
				$sourceCampaign = $sourceUrl[1];
				$data['InquiryType'] = $sourceCampaign;
			}else {
				$data['InquiryType'] = Input::get('source');
			}

			$posting = Tools::getDataFromUrl('https://secure.velocify.com', '/Import.aspx?Provider=Corpboost&Client=FloridaEducationInstitute1&CampaignId=1031', $data);
		}
		//return $posting;

		return 'true';
	}

}
