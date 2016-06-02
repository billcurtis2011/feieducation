<?php 

class LanguageController extends BaseController {
	
    public function chooser($slug) {
    	
        Session::set('locale', $slug);
       
        return Redirect::back();
    }
}