<?php

class AjaxController extends BaseController {

	protected $layout = 'modal.index';

	public function showMainForm()
	{
		//Create the view
		$this->layout->content =  View::make('modal.main-form');
	}

	public function showMainFormES () {
		//Create the view
		$this->layout->content =  View::make('modal.spanish.main-form');
	}

	public function showAdmissionQuestion()
	{
		//Create the view
		$this->layout->content =  View::make('modal.admission-question');
	}
	public function showLanguagePick()
	{
		//Create the view
		$this->layout->content =  View::make('modal.language-switch');
	}
	
}
