<?php

class BusinessAcademyController extends BaseController {

	protected $layout = 'business-academy.index';

	function __construct () {

		//Ge the language file to get the meta data from
		$this->metaData = Lang::get('metadata');
	}

	public function showBusinessAcademy()
	{
		//Create the view
		$this->layout->content =  View::make('business-academy.content');

		$headerData = array(
			'title' => (isset($this->metaData['business-academy_title']))?$this->metaData['business-academy_title']:null,
			'description' => (isset($this->metaData['business-academy_desc']))?$this->metaData['business-academy_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

}
