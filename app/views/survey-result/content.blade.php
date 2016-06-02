@section('content')


   <section id="main_content">
        <div class="container">

            <div class="row page-inner-section">
                <div class="col-md-8">
                    <h2 class="inner-section-heading">Your Education Readiness Report</h2>
                    <h3>Congratulations {{$lead->name}}!</h3>
                    <p>You've finished a very important first step on your path to finding a new career. Here's your personal education readiness report.</p>
                    <p>Based on your score, we recommend you <strong>schedule a personalized tour of our school.</strong> Click on the "<a href="/sign-up" class="fancybox-get-info fancybox.iframe">Request Info</a>" button below to learn more...</p>
                    <div class="survey-answer-well">
                        <h3 class="advisement-heading"><em>Readiness</em>Career Readiness Profile</h3>
                        <h4>Currently, you are <strong>{{$rediness->answer}}</strong></h4>
                    </div>
                    <div class="survey-answer-well">
                        <h3 class="advisement-heading"><em>Goals</em>You stated that your goals are:</h3>
                        <h4>
                            <ul class="list_ok">
                                @foreach($goals as $goal)
                                    <li>{{$goal}}</li>
                                @endforeach
                            </ul>
                        </h4>
                    </div>
                    <div class="survey-answer-well">
                        <h3 class="advisement-heading"><em>Score</em>Your career readiness score is:</h3>
                        <h4>
                            <div class="score-bar-graphic">
                                <span class="results-based-bar-heading">Based on your survey results you are <strong>{{$rediness_percentage}}%</strong> ready to start school</span><span id="end"><i class="icon-graduation-cap"></i></span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-percentage="{{$rediness_percentage}}"></div>
                                </div>
                            </div>
                        </h4>
                    </div>
                    <div class="survey-answer-well">
                        <h3 class="advisement-heading"><em>Programs</em>It appears that you would be an excellent candidate for the following programs:</h3>
                        <h4>
                            <ul class="list_ok">
                                @foreach($programs as $program)
                                    <li><a target="_blank" href="/admissions/{{$program->link}}">{{$program->program}}</a></li>
                                @endforeach
                            </ul>
                        </h4>
                    </div>

                    <p>Thank you for taking the time to take our Career Advisement Questionnaire. We hope you have found it useful in helping you to choose your best course of action. We hope your next steps lead you toward a great future.</p>
                    <div class="col-md-12 text-center line-trough-button">
                        <a href="/sign-up" class="fancybox-get-info fancybox.iframe button_fullwidth-3 admissions-main-cta">Next Step: Schedule a Visit <i class="icon-check"></i></a>
                        <span class="line"></span>
                    </div>
                </div>

                <aside class="col-md-4">
                    <div class="box_style_1">
                        <h4>{{Lang::get('about.contact_fei')}}</h4>
                        <div class="side-contact-info">
                            <ul id="contact-info" class="admissions-contact-info">
                                <li><div class="aside-callout-number">{{Lang::get('about.contact_phone')}}</div></li>
                                <li><h5><i class="icon-home"></i> {{Lang::get('about.contact_address')}}</h5></li>
                                
                            </ul>
                        </div>
                    </div>
                    @include('blog.side')

                </aside> <!-- End col-md-4 -->
            </div>
        </div><!-- End container -->
    </section><!-- End main_content -->
    <script type="text/javascript">
/* <![CDATA[ */

setTimeout(function(){

    $('.progress .progress-bar').each(function() {
        var me = $(this);
        var perc = me.attr("data-percentage");

        var current_perc = 0;

        var progress = setInterval(function() {
            if (current_perc>=perc) {
                clearInterval(progress);
            } else {
                current_perc +=1;
                me.css('width', (current_perc)+'%');
            }

            me.text((current_perc)+'%');

        }, 50);

    });

}, 500);
  /* ]]> */
</script>
@stop