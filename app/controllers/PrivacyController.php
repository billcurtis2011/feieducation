<?php

class PrivacyController extends BaseController {

	protected $layout = 'privacy.index';
	function __construct () {

		//Ge the language file to get the meta data from
		$this->metaData = Lang::get('metadata');
	}

	public function showPrivacy()
	{
		//Get the articles that we are going to display
        $data['articles'] = Tools::getBlogPosts();

		//Create the view
		$this->layout->content =  View::make('privacy.content', $data);

		$headerData = array(
			'title' => (isset($this->metaData['privacy_title']))?$this->metaData['privacy_title']:null,
			'description' => (isset($this->metaData['privacy_desc']))?$this->metaData['privacy_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

}
