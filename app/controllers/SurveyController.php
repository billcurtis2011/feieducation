<?php

class SurveyController extends BaseController {

	protected $layout = 'survey-result.index';

	public function showSurveyResult($survey)
	{
		//Lets get some answers from the survery we are looking for
		$data['answers'] = DB::table('answers')
								->leftJoin('questions', 'answers.q_id', '=', 'questions.id')
								->where('lead_id', base64_decode(Request::segment(2)))
								->where('answers.form_id', 1)
								->get();

		//Lets figure out the results from the answers
		$data['rediness'] = $data['answers'] = DB::table('answers')
								->leftJoin('questions', 'answers.q_id', '=', 'questions.id')
								->where('lead_id', base64_decode(Request::segment(2)))
								->where('answers.form_id', 1)
								->where('answers.q_id', 4)
								->first();

		//Get my goals
		$data['goals'] = $data['answers'] = DB::table('answers')
								->leftJoin('questions', 'answers.q_id', '=', 'questions.id')
								->where('lead_id', base64_decode(Request::segment(2)))
								->where('answers.form_id', 1)
								->where('answers.q_id', 5)
								->first();

		$data['goals'] = json_decode($data['goals']->answer);

		//Figure out the rediness score
		$data['rediness_percentage'] = $data['answers'] = DB::table('answers')
								->leftJoin('questions', 'answers.q_id', '=', 'questions.id')
								->where('lead_id', base64_decode(Request::segment(2)))
								->where('answers.form_id', 1)
								->where('answers.q_id', '>', 6)
								->where('answers.q_id','<' , 12)
								->get();
		//Calculate the readiness
		$myscore = 0;
		$total = count($data['rediness_percentage']);
		for ($i=0; $i < $total; $i++) {
			$cr = $data['rediness_percentage'][$i];

			$myscore += $cr->answer;
		}

		$data['rediness_percentage'] = ($myscore/50) * 100;

		//Figure out the matching programs
		$data['strengths'] = $data['answers'] = DB::table('answers')
								->leftJoin('questions', 'answers.q_id', '=', 'questions.id')
								->where('lead_id', base64_decode(Request::segment(2)))
								->where('answers.form_id', 1)
								->where('answers.q_id', 11)
								->first();
		//Parse out the strenghts
		$data['strengths'] = json_decode($data['strengths']->answer);
		$program_codes = '';
		$total = count($data['strengths']);
		for ($i=0; $i < $total; $i++) {
			$matching_programs = DB::table('matching_programs')
										->where('answer', $data['strengths'][$i])
										->first();
			if($program_codes == '') {
				$program_codes = $matching_programs->program_codes;
			}else {
				$program_codes .= ','.$matching_programs->program_codes;
			}
		}

		$program_codes = explode(',', $program_codes);
		$program_codes = array_unique($program_codes);
		foreach ($program_codes as $key => $value) {
			$program_codes[$key] = trim($program_codes[$key]);
		}


		$data['programs'] = DB::table('programs')
							->whereIn('program_code', $program_codes)
							->get();

		//Get the user information
		$data['lead'] = DB::table('leads')
							->where('id', base64_decode(Request::segment(2)))
							->first();

		//Get the articles that we are going to display
        $data['articles'] = Tools::getBlogPosts();


		//Create the view
		$this->layout->content =  View::make('survey-result.content', $data);

		$this->layout->header =  View::make('includes.header');
	}

}
