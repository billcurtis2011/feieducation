<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Home Route
Route::get('/', 'HomeController@showHome');
Route::post('/hp-survey-submission', 'HomeController@hpSurveySubmission');


//Multiple language
Route::get('language-chooser/{slug}',  'LanguageController@chooser');

//Net price calculator price
Route::get('/npc', 'EducationController@showNPC');

//Blog Route


Route::get('blog', 'BlogController@showBlog');
//Route::get('blog', 'BlogController@showBlog');

Route::get('blog/{blog_slug}', 'BlogController@showBlog_post');

//Admissions Route
Route::get('/admissions', 'AdmissionsController@showAdmissions');

//Route::get('admissions', ['AdmissionsController@showAdmissions']);


//Advisement Route
Route::get('/advisement', 'AdvisementController@showAdvisement');

//Education Route
Route::get('/programs', 'EducationController@showEducation');
Route::get('/programs/academic-disclosure', 'EducationController@showDisclosureStandAlone');

Route::get('/disclosures', 'EducationController@showDisclosureIndex');
Route::get('/programs/{disclosure_slug}/disclosure', 'EducationController@showDisclosure');
Route::get('/programs/{disclosure_slug}/disclosure/details', 'EducationController@showDisclosureDetail');

Route::get('/programs/{program_slug}', 'EducationController@showProgram');
//Route::get('/programs/{program_slug}/books', 'EducationController@showBooks');

//Main Form Route
Route::get('/sign-up', 'AjaxController@showMainForm');
//Spanish
Route::get('/es/sign-up', 'AjaxController@showMainFormES');

//Admissions question modal
Route::get('/admission-question', 'AjaxController@showAdmissionQuestion');

//Contact Route
Route::get('/contact', 'ContactController@showContact');
Route::post('/request-contactInfo', 'ContactController@saveContactForm');

//About
Route::get('/about', 'AboutController@showAbout');

//Privacy
Route::get('/privacy', 'PrivacyController@showPrivacy');

//Success Stories
Route::get('/success-stories', 'StoriesController@showStories');
Route::get('/success-stories/{student_name}', 'StoriesController@showStudentProfile');

//Financial Aid
Route::get('/financial-aid', 'FinancialController@showFinancial');

//Financial Aid
Route::get('/career', 'CareerController@showCareer');

//Apply Route
Route::get('/apply', 'ApplyController@showApply');

//Save info
Route::post('/request-info', 'ApplyController@saveApply');

//Surveys Route
Route::get('/survey-results/{survey_hash}', 'SurveyController@showSurveyResult');

//Error Route
Route::get('/fei-error/{error_code}', 'ErrorController@showError');

//laravel email test
Route::get('/email', function()
	{
		return View::make('emails.form_thankyou');
	});

//Subscribe email address to the list
Route::post('/newsletter_subscribe', 'HomeController@emailSubscribe');

//Side form submission
Route::post('/side-survey-submission','HomeController@sideFormSubmission');

//Landing Pages
Route::get('/landing/en/ma', 'LandingController@showMA_landing'); //English
Route::get('/landing/en/mbc', 'LandingController@showMBC_landing');
Route::get('/landing/en/pht', 'LandingController@showPHT_landing');
Route::get('/landing/en/mt', 'LandingController@showMT_landing');
Route::get('/landing/en/hha', 'LandingController@showHHA_landing');
Route::get('/landing/en/hvac-r', 'LandingController@showHVAC_landing');
Route::get('/landing/en/ca', 'LandingController@showCA_landing');
Route::get('/landing/en/pba', 'LandingController@showPBA_landing');

Route::get('/landing/es/ma', 'LandingController@showMA_landing'); //Spanish
Route::get('/landing/es/mbc', 'LandingController@showMBC_landing');
Route::get('/landing/es/pht', 'LandingController@showPHT_landing');
Route::get('/landing/es/mt', 'LandingController@showMT_landing');
Route::get('/landing/es/hha', 'LandingController@showHHA_landing');
Route::get('/landing/es/hvac-r', 'LandingController@showHVAC_landing');
Route::get('/landing/es/ca', 'LandingController@showCA_landing');
Route::get('/landing/es/pba', 'LandingController@showPBA_landing');

Route::get('/landing/es/esl', 'LandingController@showESL_landing');
Route::get('/esl', 'LandingController@showESL_landing'); //Alternate url
Route::get('/programs/esl', 'LandingController@showESL_landing'); //Alternate url

//Payment method
Route::get('/checkout', 'CheckoutController@showCheckout');

//Language Switch
Route::get('/pick-language', 'AjaxController@showLanguagePick');

//Show Business Academy
Route::get('/business-academy', 'BusinessAcademyController@showBusinessAcademy');
