<?php

class AboutController extends BaseController {

	protected $layout = 'about.index';

	function __construct () {

		//Ge the language file to get the meta data from
		$this->metaData = Lang::get('metadata');
	}

	public function showAbout()
	{
		//Get the articles that we are going to display
        $data['articles'] = Tools::getBlogPosts();

		//Create the view
		$this->layout->content =  View::make('about.content', $data);

		$headerData = array(
			'title' => (isset($this->metaData['about_title']))?$this->metaData['about_title']:null,
			'description' => (isset($this->metaData['about_desc']))?$this->metaData['about_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

}
