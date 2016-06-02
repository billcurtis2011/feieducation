<?php

class FinancialController extends BaseController {

	protected $layout = 'financial-aid.index';

	function __construct () {

		//Ge the language file to get the meta data from
		$this->metaData = Lang::get('metadata');

	}
	public function showFinancial()
	{
		//Create the view
		$this->layout->content =  View::make('financial-aid.content');

		$headerData = array(
			'title' => (isset($this->metaData['financial_title']))?$this->metaData['financial_title']:null,
			'description' => (isset($this->metaData['financial_desc']))?$this->metaData['financial_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

}
