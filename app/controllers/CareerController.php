<?php

class CareerController extends BaseController {

	protected $layout = 'career.index';

	function __construct () {

		//Ge the language file to get the meta data from
		$this->metaData = Lang::get('metadata');

	}
	public function showCareer()
	{
		//Create the view
		$this->layout->content = View::make('career.content');
		
		$headerData = array(
			'title' => (isset($this->metaData['career_title']))?$this->metaData['career_title']:null,
			'description' => (isset($this->metaData['career_desc']))?$this->metaData['career_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}
}
