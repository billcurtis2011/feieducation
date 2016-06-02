<?php

class StoriesController extends BaseController {

	protected $layout = 'stories.index';

	function __construct () {

		//Ge the language file to get the meta data from
		$this->metaData = Lang::get('metadata');

	}
	public function showStories()
	{
		//Create the view
		$this->layout->content =  View::make('stories.content');

		$headerData = array(
			'title' => (isset($this->metaData['stories_title']))?$this->metaData['stories_title']:null,
			'description' => (isset($this->metaData['stories_desc']))?$this->metaData['stories_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

	public function showStudentProfile($s)
	{
		//Create the view
		$this->layout->content =  View::make('stories.student');

		$headerData = array(
			'title' => (isset($this->metaData['stories_title']))?$this->metaData['stories_title']:null,
			'description' => (isset($this->metaData['stories_desc']))?$this->metaData['stories_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}
	

}
