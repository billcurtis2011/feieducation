<?php

class ContactController extends BaseController {

	protected $layout = 'contact.index';

	function __construct () {

		//Ge the language file to get the meta data from
		$this->metaData = Lang::get('metadata');

	}
	public function showContact()
	{
		//Create the view
		$this->layout->content =  View::make('contact.content');

		$headerData = array(
			'title' => (isset($this->metaData['contact_title']))?$this->metaData['contact_title']:null,
			'description' => (isset($this->metaData['contact_desc']))?$this->metaData['contact_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}
	public function saveContactForm() {

		$validator = Validator::make(
			array(
		        'name' => Input::get('name_contact'),
		    	'email' => Input::get('email_contact'),
		    	'phone' => Input::get('phone_contact'),
		    	'checkBox' => Input::get('verify_contact')
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
		$data['name_contact'] = Input::get('name_contact');
		$data['name'] = Input::get('name_contact');
		$data['lastname_contact']= Input::get('lastname_contact');
		$data['email_contact']= Input::get('email_contact');
		$data['phone_contact'] = Input::get('phone_contact');
		$data['message_contact']= Input::get('message_contact');
		$data['verify_contact']= Input::get('verify_contact');
		$data['source']= Input::get('source');


		//Retrieve an array of lists for your account
		//$lists = MailchimpWrapper::lists()->getList()['data'];

		//Record the lead in the database and in Mailchimp
		$lead_id = Tools::recordLead($data['name_contact'].' '.$data['lastname_contact'], $data['email_contact'], $data['phone_contact'], $data['source'], $data['message_contact']);

		$data['answers'] = DB::table('answers')
								->leftJoin('questions', 'answers.q_id', '=', 'questions.id')
								->where('lead_id', $lead_id)
								->get();

		//Do some awesome data conversion
		$data['name'] = $data['name_contact'].' '.$data['lastname_contact'];
		$data['email']= $data['email_contact'];
		$data['phone'] = $data['phone_contact'];
		$data['message_contact']= $data['message_contact'];

		//send a thank you email
		Mail::send('emails.form_thankyou', $data, function($message) use($data)
		  {
			$message->to($data['email_contact'], $data['name_contact'])->subject('Thank you for reaching out');
		});

		//label the form
		$data['form_label'] = 'Contact Us';

		Mail::send('emails.form_admin_data', $data, function($message) use($data)
		  {
			$message->to(ADMIN_EMAIL, 'FEI Site')->subject('FEI Website Lead');
		});

		//Add the leads to Velocify
		if(!Config::get('app.debug')) {
			$nameArray = explode(' ', Input::get('name_contact'));
			$data = array();
			$data['first_name'] = $nameArray[0];
			$data['last_name'] = (isset($nameArray[1]))?$nameArray[1]:'';
			$data['phone'] = Input::get('phone_contact');
			$data['email'] = Input::get('email_contact');

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

	}}



