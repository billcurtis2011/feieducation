<?php

class AdvisementController extends BaseController {

	protected $layout = 'advisement.index';

	function __construct () {

		//Ge the language file to get the meta data from
		$this->metaData = Lang::get('metadata');

	}
	public function showAdvisement()
	{
		//Create the view
		$this->layout->content =  View::make('advisement.content');

		$headerData = array(
			'title' => (isset($this->metaData['advisement_title']))?$this->metaData['advisement_title']:null,
			'description' => (isset($this->metaData['advisement_desc']))?$this->metaData['advisement_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

}
