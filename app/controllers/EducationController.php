<?php

class EducationController extends BaseController {

	protected $layout = 'education.index';

	function __construct () {

		//Ge the language file to get the meta data from
		$this->metaData = Lang::get('metadata');

	}
	public function showEducation()
	{

		//Create the view
		$this->layout->content =  View::make('education.content');

		$headerData = array(
			'title' => (isset($this->metaData['education_title']))?$this->metaData['education_title']:null,
			'description' => (isset($this->metaData['education_desc']))?$this->metaData['education_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}


	public function showProgram($e)
	{
		//Create the view
		$this->layout->content =  View::make('education.program');

		$segment2 = Request::segment(2);

		$page_title = (isset($this->metaData[$segment2.'-title']))?$this->metaData[$segment2.'-title']:null;
		$page_desc = (isset($this->metaData[$segment2.'-desc']))?$this->metaData[$segment2.'-desc']:null;

		$headerData = array(
			'title' => $page_title,
			'description' => $page_desc
			);
		$this->layout->header =  View::make('includes.header', $headerData);

		}

	public function showBooks($e)
	{
		$segment2 = Request::segment(2);


		if($segment2 == 'medical-assistant'){
		    // MA Program
			$this->layout->content =  View::make('education.books.ma_books');
		}elseif($segment2 == 'medical-billing-and-coding'){
    		// MBC Program
			$this->layout->content =  View::make('education.books.mbc_books');
		}elseif($segment2 == 'patient-care-technician'){
    		// PTC Program
			$this->layout->content =  View::make('education.books.pct_books');
		}elseif($segment2 == 'pharmacy-technician'){
    		// PHT Program
			$this->layout->content =  View::make('education.books.pht_books');
		}elseif($segment2 == 'medical-office-administrator'){
    		// MOA Program
			$this->layout->content =  View::make('education.books.moa_books');
		}elseif($segment2 == 'massage-therapy'){
    		// MT Program
			$this->layout->content =  View::make('education.books.mt_books');
		}elseif($segment2 == 'business-management'){
    		// BM Program
			$this->layout->content =  View::make('education.books.bm_books');
		}

		$page_title = (isset($this->metaData[$segment2.'-books-title']))?$this->metaData[$segment2.'-books-title']:null;
		$page_desc = (isset($this->metaData[$segment2.'-books-desc']))?$this->metaData[$segment2.'-books-desc']:null;

		$headerData = array(
			'title' => $page_title,
			'description' => $page_desc
			);
		$this->layout->header =  View::make('includes.header', $headerData);

	}

	public function showNPC()
	{
		//Create the view
		$this->layout->content =  View::make('education.disclosure.npc');

		$headerData = array(
			'title' => (isset($this->metaData['disclosures_title']))?$this->metaData['disclosures_title']:null,
			'description' => (isset($this->metaData['disclosures_desc']))?$this->metaData['disclosures_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

	public function showDisclosureIndex()
	{
		//Create the view
		$this->layout->content =  View::make('education.disclosure.links');

		$headerData = array(
			'title' => (isset($this->metaData['disclosures_title']))?$this->metaData['disclosures_title']:null,
			'description' => (isset($this->metaData['disclosures_desc']))?$this->metaData['disclosures_desc']:null
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

	public function showDisclosure($disclosure_slug)
	{
		$segment2 = Request::segment(2);
		//Create the view
		$this->layout->content =  View::make('education.disclosure.disclosure');

		$page_title = (isset($this->metaData[$segment2.'-disclosures-title']))?$this->metaData[$segment2.'-disclosures-title']:null;
		$page_desc = (isset($this->metaData[$segment2.'-disclosures-desc']))?$this->metaData[$segment2.'-disclosures-desc']:null;

		$headerData = array(
			'title' => $page_title,
			'description' => $page_desc
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}
	public function showDisclosureDetail($disclosure_slug)
	{
		$segment2 = Request::segment(2);

		if($disclosure_slug == 'medical-assistant'){
		    // MA Program
			$this->layout->content =  View::make('education.disclosure.ma_disclosure');
		}elseif($disclosure_slug == 'medical-billing-and-coding'){
    		// MBC Program
			$this->layout->content =  View::make('education.disclosure.mbc_disclosure');
		}elseif($disclosure_slug == 'patient-care-technician'){
    		// PTC Program
			$this->layout->content =  View::make('education.disclosure.pct_disclosure');
		}elseif($disclosure_slug == 'pharmacy-technician'){
    		// PHT Program
			$this->layout->content =  View::make('education.disclosure.pht_disclosure');
		}elseif($disclosure_slug == 'medical-office-administrator'){
    		// MOA Program
			$this->layout->content =  View::make('education.disclosure.moa_disclosure');
		}elseif($disclosure_slug == 'massage-therapy'){
    		// MT Program
			$this->layout->content =  View::make('education.disclosure.mt_disclosure');
		}elseif($disclosure_slug == 'business-management'){
    		// BM Program
			$this->layout->content =  View::make('education.disclosure.bm_disclosure');
		}

		$page_title = (isset($this->metaData[$segment2.'-disclosures-detail-title']))?$this->metaData[$segment2.'-disclosures-detail-title']:null;
		$page_desc = (isset($this->metaData[$segment2.'-disclosures-detail-desc']))?$this->metaData[$segment2.'-disclosures-detail-desc']:null;

		$headerData = array(
			'title' => $page_title,
			'description' => $page_desc
			);
		$this->layout->header =  View::make('includes.header', $headerData);
	}

	public function showDisclosureStandAlone () {
		return View::make('stand-alone.disclosures');
	}
}
