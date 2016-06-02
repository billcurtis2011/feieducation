<?php

class ApplyController extends BaseController {

	protected $layout = 'apply.index';

	public function showApply()
	{
		//Create the view
		$this->layout->content =  View::make('apply.content');

		$this->layout->header =  View::make('includes.header');
	}

	public function saveApply () {

		//Validate form
		$validator = Validator::make(
			array(
		        'name' => Input::get('name'),
		    	'email' => Input::get('email'),
		    	'phone' => Input::get('phone'),
		    	'checkBox' => Input::get('checkBox')
		    ),
		    array(
		    	'name' => 'required',
		    	'email' => 'required|email',
		    	'phone' => 'required',
		    	'checkBox' => 'required'
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
		$data['source']= Input::get('source');
		$data['preferred_language'] = (strpos(Input::get('source'), '/es/') !== false) ? 'Spanish' : 'English';


		//send a thank you email
		Mail::send('emails.form_thankyou', $data, function($email) use($data)
		  {
			$email->to($data['email'], $data['name'])->subject('Thank you for reaching out');
		});


		//Record the lead in the database and in Mailchimp
		$lead_id = Tools::recordLead($data['name'], $data['email'], $data['phone'], $data['source'], '', $data['preferred_language']);


		$data['answers'] = DB::table('answers')
								->leftJoin('questions', 'answers.q_id', '=', 'questions.id')
								->where('lead_id', $lead_id)
								->get();

		//label the form
		$data['form_label'] = 'Lightbox Lead Form';

		Mail::send('emails.form_admin_data', $data, function($message) use($data)
		  {
			$message->to(ADMIN_EMAIL, 'FEI Site')->subject('FEI Website Lead');
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