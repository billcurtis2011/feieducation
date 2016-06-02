@section('content')


<section id="wizard_bg">
<div class="container">
<!-- Start Survey container -->
<div id="survey_container">


    <div id="top-wizard">
        <strong>Progress </strong>
        <div id="progressbar"></div>
        <div class="shadow"></div>
    </div><!-- end top-wizard -->
    
    <form name="example-1" id="wrapped" action="/" method="POST" autocomplete="off">
        <div id="middle-wizard">
            <div class="step">
                <div class="row">
                    <h3 class="col-md-10">Enter your personal info</h3>
                    <p class="col-md-12">Lorem ipsum dolor sit amet, quidam semper duo ea. Modo menandri molestiae ad pri, ut nec falli consetetur.<br> Call the admission departement for support <strong>+0034 9423444</strong></p>
                    <div class="col-md-6">
                        <ul class="data-list">
                            <li><div class="form-group"><input type="text" name="firstname" class="required form-control" placeholder="First name"><span class="input-icon"><i class="icon-user"></i></span></div></li>
                            <li><div class="form-group"><input type="text" name="lastname" class="required form-control" placeholder="Last name"><span class="input-icon"><i class="icon-user"></i></span></div></li>
                            <li><div class="form-group"><input type="email" name="email" class="required form-control" placeholder="Your Email"><span class="input-icon"><i class="icon-email"></i></span></div></li>
                        </ul>
                    </div><!-- end col-md-6 -->
                    
                    <div class="col-md-6">
                   
                        
                        <ul class="data-list" style="margin:0; padding:0;">
                            <li><div class="form-group"><input type="text" name="phone2" class="required form-control" placeholder="Your phone number"><span class="input-icon"><i class="icon-phone"></i></span></div></li>
                            <li><div class="styled-select">
                                <select class="form-control required" name="country">
                                    <option value="" selected>Select your country</option>
                                    <option value="Europe">Europe</option>
                                    <option value="Asia">Asia</option>
                                    <option value="North America">North America</option>
                                    <option value="South America">South America</option>
                                </select>
                            </div>
                            </li>
                        </ul>
                        <ul class="data-list floated clearfix">
                            <li id="age"><input type="text" name="age" class="required form-control" placeholder="Age"></li>
                            <li><input name="gender" type="radio" class="required check_radio" value="Male"><label class="label_gender"> Male</label></li>
                            <li><input name="gender" type="radio" class="required check_radio" value="Female"><label class="label_gender"> Female</label></li>
                        </ul>
                        
                    </div><!-- end col-md-6 -->
                </div><!-- end row -->
                
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <ul class="data-list" id="terms">
                            <li>
                            <strong>Do you accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?</strong>
                           <label class="switch-light switch-ios ">
                                    <input type="checkbox" name="terms" class="required fix_ie8" value="yes">
                                    <span>
                                        <span class="ie8_hide">No</span>
                                        <span>Yes</span>
                                    </span>
                                    <a></a>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div><!-- end step-->
            
            <div class="step row">
                <div class="col-md-12">
                    <h3>Program of Interest</h3>
                     <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    
                    <ul class="data-list-2 clearfix">
                        <li><input name="course_1[]" type="checkbox" class="required check_radio" value="Medical Assistant"><label>Medical Assistant</label></li>
                        <li><input name="course_1[]" type="checkbox" class="required check_radio" value="Medical Billing and Coding"><label>Medical Billing and Coding</label></li>
                        <li><input name="course_1[]" type="checkbox" class="required check_radio" value="Pharmacy Technician"><label>Pharmacy Technician</label></li>
                        <li><input name="course_1[]" type="checkbox" class="required check_radio" value="Medical Office Administrator"><label>Medical Office Administrator</label></li>
                        <li><input name="course_1[]" type="checkbox" class="required check_radio" value="Medical Office Administrator"><label>Massage Therapy</label></li>
                        <li><input name="course_1[]" type="checkbox" class="required check_radio" value="Business Management"><label>Business Management</label></li>
                    </ul>
                </div>
            </div><!-- end step -->
            
            <div class="step row">
                <div class="col-md-12">
                    <h3>Additional message</h3>
                   <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <div class="form-group">
                            <textarea rows="5" id="message_apply_1" name="message_apply_1" class="form-control" placeholder="Additional message" style="height:150px;"></textarea>
                        </div>
                </div>
            </div><!-- end step -->
                        
            <div class="submit step" id="complete">
                        <i class="icon-check"></i>
                        <h3>Apply complete! Thank you for you time.</h3>
                        <button type="submit" name="process" class="submit">Submit your application</button>
            </div><!-- end submit step -->
            
        </div><!-- end middle-wizard -->
        
        <div id="bottom-wizard">
            <button type="button" name="backward" class="backward">Backward</button>
            <button type="button" name="forward" class="forward">Forward </button>
        </div><!-- end bottom-wizard -->
    </form>
    
</div><!-- end Survey container -->

</div>
</section><!-- end section main container -->


<!-- Wizard-->
<script src="/assets/js/jquery-ui-1.8.12.min.js"></script>
<script src="/assets/js/jquery.wizard.js"></script>
<script src="/assets/js/jquery.validate.js"></script>
<script src="/assets/check_radio/jquery.icheck.js"></script>
<script src="/assets/js/wizard_func.js"></script>
@stop