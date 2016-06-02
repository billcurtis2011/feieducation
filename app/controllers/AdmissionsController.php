<?php

class AdmissionsController extends BaseController {

	protected $layout = 'admissions.index';

	function __construct () {

		//Ge the language file to get the meta data from
		$this->metaData = Lang::get('metadata');

	}

	public function showAdmissions()
	{
		//Create the view
		$this->layout->content =  View::make('admissions.content');

		$headerData = array(
			'title' => (isset($this->metaData['admissions_title']))?$this->metaData['admissions_title']:null,
			'description' => (isset($this->metaData['admissions_desc']))?$this->metaData['admissions_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

}
