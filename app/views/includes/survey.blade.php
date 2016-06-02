<h2 class="text-center survey-main-sec-heading">{{Lang::get('home.section2_title_discover')}}  <span>{{Lang::get('home.section2_title_career')}}</span> {{Lang::get('home.section2_title_path')}}</h2>
<div class="career-path-questions">
<!-- progressbar -->
    <ul id="progressbar">
        <li class="active">{{Lang::get('home.home_CAREER_GOALS_title')}}   </li>
        <li>{{Lang::get('home.home_Personal_Strengths_title')}} </li>
        <li>{{Lang::get('home.home_Career_Path_title')}} </li>
        <li>{{Lang::get('home.home_Get_Your_Results_title')}} </li>
    </ul>
    <ul class="questions-wrapper">
        <!-- First Question -->
        <li id="step-1" class="animated">
            <div id="step1_q1">
                <div class="question-heading" id="q1-heading">{{Lang::get('home.home_CAREER_GOALS_title_header')}}</div>
                <div class="current-questions-answers" id="q1-answers">
                    <ul>
                        <li>
                          <input tabindex="1" type="radio" id="input-1" name="hp-questions-q1" value="Not working">
                          <label for="input-1">{{Lang::get('home.home_CAREER_GOALS_title_item1')}}</label>
                        </li>
                        <li>
                          <input tabindex="2" type="radio" id="input-2" name="hp-questions-q1" value="Working, but I don't like what I do">
                          <label for="input-2">{{Lang::get('home.home_CAREER_GOALS_title_item2')}}</label>
                        </li>
                        <li>
                          <input tabindex="3" type="radio" id="input-3" name="hp-questions-q1" value="Working, but I want something more">
                          <label for="input-3">{{Lang::get('home.home_CAREER_GOALS_title_item3')}}</label>
                        </li>
                        <li>
                          <input tabindex="4" type="radio" id="input-4" name="hp-questions-q1" value="Not sure, I'm searching but I don't know where to begin">
                          <label for="input-4">{{Lang::get('home.home_CAREER_GOALS_title_item4')}}</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="step1_q2" class="animated" style="display: none;">
                <div class="question-heading no-mbottom" id="q2-heading">{{Lang::get('home.home_Personal_Strengths_title_header')}}</div>
                <div class="question-subheading-banswers">{{Lang::get('home.home_Personal_Strengths_title_header_description')}}</div>
                <div class="current-questions-answers" id="q2-answers">
                    <ul>
                        <li>
                          <input tabindex="1" type="checkbox" id="input-8" name="hp-questions-q2" value="I’m not sure what I want yet">
                          <label for="input-8">{{Lang::get('home.home_Personal_Strengths_title_item1')}}</label>
                        </li>
                        <li>
                          <input tabindex="2" type="checkbox" id="input-9" name="hp-questions-q2" value="I want a better life and future, I just need help figuring it out">
                          <label for="input-9">{{Lang::get('home.home_Personal_Strengths_title_item2')}}</label>
                        </li>
                        <li>
                          <input tabindex="3" type="checkbox" id="input-10" name="hp-questions-q2" value="I would like to make more money">
                          <label for="input-10">{{Lang::get('home.home_Personal_Strengths_title_item3')}}</label>
                        </li>
                        <li>
                          <input tabindex="3" type="checkbox" id="input-11" name="hp-questions-q2" value="I want a better life for my family">
                          <label for="input-11">{{Lang::get('home.home_Personal_Strengths_title_item4')}}</label>
                        </li>
                        <li>
                          <input tabindex="3" type="checkbox" id="input-12" name="hp-questions-q2" value="I want a career I can be  proud of">
                          <label for="input-12">{{Lang::get('home.home_Personal_Strengths_title_item5')}}</label>
                        </li>
                    </ul>
                </div>
                 <div class="submit-survey-wrap">
                    <a href="javascript:void(0)" class="submit-survey-btn" id="go-to-survey2">{{Lang::get('home.home_Continue')}} <i class="icon-angle-right"></i></a>
                </div>
            </div>
        </li>
        <li id="step-2" class="animated" style="display: none;">
            <div id="step2_q1">
                <div class="slider_question_wrap">
                    <div class="question-heading slider-q">{{Lang::get('home.home_career_path_first')}}</div>
                    <div class="truth-label-wrp">
                        <i class="icon-thumbs-down"></i>
                        <span>{{Lang::get('home.home_No_True')}}</span>
                    </div>
                    <div class="option_slider">
                        <input class="boost_slider" id="ex1Slider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                    </div>
                    <div class="truth-label-wrp">
                        <i class="icon-thumbs-up"></i>
                        <span>{{Lang::get('home.home_True')}}</span>
                    </div>
                </div>
                <div class="slider_question_wrap">
                    <div class="question-heading slider-q">{{Lang::get('home.home_career_path_second')}}</div>
                    <div class="truth-label-wrp">
                        <i class="icon-thumbs-down"></i>
                        <span>{{Lang::get('home.home_No_True')}}</span>
                    </div>
                    <div class="option_slider">
                        <input class="boost_slider" data-slider-id='ex2Slider' type="text" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                    </div>
                    <div class="truth-label-wrp">
                        <i class="icon-thumbs-up"></i>
                        <span>{{Lang::get('home.home_True')}}</span>
                    </div>
                </div>
                <div class="slider_question_wrap">
                    <div class="question-heading slider-q">{{Lang::get('home.home_career_path_third')}}</div>
                    <div class="truth-label-wrp">
                        <i class="icon-thumbs-down"></i>
                        <span>{{Lang::get('home.home_No_True')}}</span>
                    </div>
                    <div class="option_slider">
                        <input class="boost_slider" data-slider-id='ex3Slider' type="text" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                    </div>
                    <div class="truth-label-wrp">
                        <i class="icon-thumbs-up"></i>
                        <span>{{Lang::get('home.home_True')}}</span>
                    </div>
                </div>
                <div class="slider_question_wrap">
                    <div class="question-heading slider-q">{{Lang::get('home.home_career_path_fourth')}}</div>
                    <div class="truth-label-wrp">
                        <i class="icon-thumbs-down"></i>
                        <span>{{Lang::get('home.home_No_True')}}</span>
                    </div>
                    <div class="option_slider">
                        <input class="boost_slider" data-slider-id='ex4Slider' type="text" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                    </div>
                    <div class="truth-label-wrp">
                        <i class="icon-thumbs-up"></i>
                        <span>{{Lang::get('home.home_True')}}</span>
                    </div>
                </div>
                <div class="slider_question_wrap">
                    <div class="question-heading slider-q">{{Lang::get('home.home_career_path_fifth')}}</div>
                    <div class="truth-label-wrp">
                        <i class="icon-thumbs-down"></i>
                        <span>{{Lang::get('home.home_No_True')}}</span>
                    </div>
                    <div class="option_slider">
                        <input class="boost_slider" data-slider-id='ex5Slider' type="text" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                    </div>
                    <div class="truth-label-wrp">
                        <i class="icon-thumbs-up"></i>
                        <span>{{Lang::get('home.home_True')}}</span>
                    </div>
                </div>

                <div class="submit-survey-wrap">
                    <a href="javascript:void(0)" class="submit-survey-btn" id="go-to-survey3">{{Lang::get('home.home_Continue')}} <i class="icon-angle-right"></i></a>
                </div>
            </div>
        </li>
        <li id="step-3" class="animated" style="display: none;">
            <div id="step3_q1">
                <div class="question-heading no-mbottom">{{Lang::get('home.home_career_path1')}}</div>
                <div class="question-subheading-banswers">{{Lang::get('home.home_career_path2')}}</div>
                <div class="current-questions-answers">
                    <ul>
                        <li>
                          <input tabindex="1" type="checkbox" id="input-17" name="hp-questions-q4" value="I like working with patients directly">
                          <label for="input-17">{{Lang::get('home.home_career_path3')}}</label>
                        </li>
                        <li>
                          <input tabindex="2" type="checkbox" id="input-18" name="hp-questions-q4" value="I prefer doing administrative/office work">
                          <label for="input-18">{{Lang::get('home.home_career_path4')}}</label>
                        </li>
                        <li>
                          <input tabindex="3" type="checkbox" id="input-19" name="hp-questions-q4" value="I like to work with my hands">
                          <label for="input-19">{{Lang::get('home.home_career_path5')}}</label>
                        </li>
                        <li>
                          <input tabindex="4" type="checkbox" id="input-20" name="hp-questions-q4" value="I like working with computers">
                          <label for="input-20">{{Lang::get('home.home_career_path6')}}</label>
                        </li>
                        <li>
                          <input tabindex="5" type="checkbox" id="input-21" name="hp-questions-q4" value="I enjoy working with people">
                          <label for="input-21">{{Lang::get('home.home_career_path7')}}</label>
                        </li>
                        <li>
                          <input tabindex="11" type="checkbox" id="input-27" name="hp-questions-q4" value="I would like to have my own business someday">
                          <label for="input-27">{{Lang::get('home.home_career_path8')}}</label>
                        </li>
                    </ul>
                </div>
                <div class="submit-survey-wrap">
                    <a href="javascript:void(0)" class="submit-survey-btn" id="go-to-survey4">{{Lang::get('home.home_Continue')}}  <i class="icon-angle-right"></i></a>
                </div>
            </div>
        </li>
        <li id="step-4" class="animated" style="display:none">
            <div id="step4_q1">
                <div class="question-heading">{{Lang::get('home.home_Get_Your_Results1')}}</div>
                <div class="survey-subheading">{{Lang::get('home.home_Get_Your_Results2')}}</div>
                <div class="survey-form-wrapper">
                    <form id="hp-survery-form" role="form">
                        <div class="form-group survey-form-control-wrap">
                            <input type="text" name="name" id="survery-name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group survey-form-control-wrap">
                            <input type="email" name="email" id="survery-email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group survey-form-control-wrap">
                            <input type="text" name="phone" id="survery-phone" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group survey-form-control-wrap" style="color: white">
                             <p>{{Lang::get('home.home_Get_Your_Results3')}}</p>
                        <p id="agreement-checkbox" class="animated"><input id="contact_checkBox" type="checkbox" name="terms" >{{Lang::get('home.home_Get_Your_Results4')}}</p>
                        </div>
                    </form>
                </div>
                <div class="submit-survey-wrap">
                    <a href="javascript:void(0)" id="hp-survery-submit" class="btn submit-survey-btn complete-survey">{{Lang::get('home.home_Finish')}} <i class="icon-check"></i></a>
                </div>
            </div>
        </li>
    </ul>
    <div class="survey-result animated" style="display:none">
         <div class="question-heading no-mbottom">{{Lang::get('home.home_Get_Your_Results5')}}</div>
        <div class="question-subheading-banswers">{{Lang::get('home.home_Get_Your_Results6')}}</div>
    </div>
</div>