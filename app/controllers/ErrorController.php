<?php

class ErrorController extends BaseController {

	protected $layout = 'errors.index';

	
	public function showError($error)
	{

		if($error == '404'){
			$title = 'Error 404 - FEI';
		}else{
			$title = 'Oops! Something went wrong - FEI';
		}

		//Create the view
		$this->layout->content =  View::make('errors.error');

		$headerData = array(
			'title' => $title
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

}
