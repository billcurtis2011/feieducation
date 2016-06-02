<?php

class CheckoutController extends BaseController {

	protected $layout = 'checkout.index';


	function __construct () {

		//Ge the language file to get the meta data from
		$this->metaData = Lang::get('metadata');

	}

	public function showCheckout()
	{
		$headerData = array(
			'title' => (isset($this->metaData['checkout_title']))?$this->metaData['checkout_title']:null,
			'description' => (isset($this->metaData['checkout_desc']))?$this->metaData['checkout_desc']:null
			);

		$this->layout->header =  View::make('includes.header', $headerData);

		//Create the view
		$this->layout->content =  View::make('checkout.content');
	}

}
