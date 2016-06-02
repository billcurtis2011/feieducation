<?php

class LandingController extends BaseController {

	protected $layout = 'landing.index';

	function __construct () {

		//Ge the language file to get the meta data from
		$this->metaData = Lang::get('metadata');

	}
	

	public function showMA_landing()
	{	
		//Create the view
		$this->layout->content =  View::make('landing.ma');

		$headerData = array(
			'title' => (isset($this->metaData['ma_landing_title']))?$this->metaData['ma_landing_title']:null,
			'description' => (isset($this->metaData['ma_landing_desc']))?$this->metaData['ma_landing_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

	public function showMBC_landing()
	{

		//Create the view
		$this->layout->content =  View::make('landing.mbc');

		$headerData = array(
			'title' => (isset($this->metaData['ma_landing_title']))?$this->metaData['ma_landing_title']:null,
			'description' => (isset($this->metaData['ma_landing_desc']))?$this->metaData['ma_landing_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

	public function showPHT_landing()
	{

		//Create the view
		$this->layout->content =  View::make('landing.pht');

		$headerData = array(
			'title' => (isset($this->metaData['pht_landing_title']))?$this->metaData['pht_landing_title']:null,
			'description' => (isset($this->metaData['pht_landing_desc']))?$this->metaData['pht_landing_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

	public function showMT_landing()
	{

		//Create the view
		$this->layout->content =  View::make('landing.mt');

		$headerData = array(
			'title' => (isset($this->metaData['mt_landing_title']))?$this->metaData['mt_landing_title']:null,
			'description' => (isset($this->metaData['mt_landing_desc']))?$this->metaData['mt_landing_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}


	public function showESL_landing()
	{

		//Create the view
		$this->layout->content =  View::make('landing.esl');

		$headerData = array(
			'title' => (isset($this->metaData['esl_landing_title']))?$this->metaData['esl_landing_title']:null,
			'description' => (isset($this->metaData['esl_landing_desc']))?$this->metaData['esl_landing_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}


	public function showHHA_landing()
	{	
		//Create the view
		$this->layout->content =  View::make('landing.hha');

		$headerData = array(
			'title' => (isset($this->metaData['hha_landing_title']))?$this->metaData['hha_landing_title']:null,
			'description' => (isset($this->metaData['hha_landing_desc']))?$this->metaData['hha_landing_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

	public function showHVAC_landing()
	{	
		//Create the view
		$this->layout->content =  View::make('landing.hvac');

		$headerData = array(
			'title' => (isset($this->metaData['hvac_landing_title']))?$this->metaData['hvac_landing_title']:null,
			'description' => (isset($this->metaData['hvac_landing_desc']))?$this->metaData['hvac_landing_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

	public function showCA_landing() {
		//Create the view
		$this->layout->content =  View::make('landing.ca');

		$headerData = array(
			'title' => (isset($this->metaData['ca_landing_title']))?$this->metaData['ca_landing_title']:null,
			'description' => (isset($this->metaData['ca_landing_desc']))?$this->metaData['ca_landing_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

	public function showPBA_landing () {
		//Create the view
		$this->layout->content =  View::make('landing.pba');

		$headerData = array(
			'title' => (isset($this->metaData['pba_landing_title']))?$this->metaData['pba_landing_title']:null,
			'description' => (isset($this->metaData['pba_landing_desc']))?$this->metaData['pba_landing_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}


	
}
