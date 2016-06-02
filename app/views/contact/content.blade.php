@section('content')

<section id="sub-header" class="contact-sub-header">
        <div class="header-overlay-imgthief"></div>
        <div class="container sub-header-content">
        <div class="row">
            <div class="col-md-12 sub-header-text-content">
                <h1 class="main-headeing"><span class="animated fadeInDown">{{Lang::get('contact.heading_title')}}</span></h1>
                <p class="lead boxed-subheading-semiblue animated fadeInDown">
                    {{Lang::get('contact.heading_subtitle')}}
                </p>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    <div class="divider_top"></div>
</section><!-- End sub-header -->


<section id="main_content" >
<div class="container">
<div class="row">
    <div class="col-md-4">
        <h3>{{Lang::get('contact.left_heading_1')}}</h3>
        <ul id="contact-info">
            <li><i class="icon-home"></i> {{Lang::get('contact.address')}}</li>
            <li><i class="icon-phone"></i> {{Lang::get('contact.phone')}}</li>
            <li><i class=" icon-email"></i> <a href="mailto:info@fei.edu">info@fei.edu</a></li>
        </ul>
        <hr>
        <h3>{{Lang::get('contact.left_heading_2')}}</h3>
        <p>
            {{Lang::get('contact.sec2_subtext')}}
        </p>
        <ul id="follow_us_contacts">
            <li><a href="https://www.facebook.com/FEI.Miami" target="_blank" onClick="ga('send', 'event', { eventCategory: 'link', eventAction: 'Contact - FB Link', eventLabel: 'Clicked'});"><i class="icon-facebook"></i> /FEI.Miami</a></li>
            <li><a href="https://twitter.com/FEIMiami" target="_blank" onClick="ga('send', 'event', { eventCategory: 'link', eventAction: 'Contact - TW Link', eventLabel: 'Clicked'});"><i class="icon-twitter"></i> #FEIMiami</a></li>
            <li><a href="https://plus.google.com/+FloridaEducationInstituteMiami" target="_blank" onClick="ga('send', 'event', { eventCategory: 'link', eventAction: 'Contact - GPLUS Link', eventLabel: 'Clicked'});"><i class=" icon-google"></i> +FloridaEducationInstituteMiami</a></li>
        </ul>

    </div>

    <div class="col-md-8">
        <div class="box_style_2 contact_fei_form">
            <!-- <span class="tape"></span> -->
            <div class="row">
                <div class="col-md-12">
                    <h3>{{Lang::get('contact.form_heading')}}</h3>
                </div>
            </div>
            <div id="message-contact"></div>
            <form method="POST" action="/" id="contactform">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control style_2" id="name_contact" name="name_contact" placeholder="{{Lang::get('contact.field_fname')}}">
                            <span class="input-icon"><i class="icon-user"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control style_2" id="lastname_contact" name="lastname_contact" placeholder="{{Lang::get('contact.field_lname')}}">
                            <span class="input-icon"><i class="icon-user"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="email" id="email_contact" name="email_contact" class="form-control style_2" placeholder="{{Lang::get('contact.field_email')}}">
                            <span class="input-icon"><i class="icon-email"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" id="phone_contact" name="phone_contact" class="form-control style_2" placeholder="{{Lang::get('contact.field_phone')}}">
                            <span class="input-icon"><i class="icon-phone"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea rows="5" id="message_contact" name="message_contact" class="form-control" placeholder="{{Lang::get('contact.field_message')}}" style="height:200px;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" id="verify_contact" name="verify_contact" class="form-control" placeholder="{{Lang::get('contact.field_human')}}">
                        <p>{{Lang::get('contact.field_checkbox')}}</p>
                        <p id="agreement-checkbox" class="animated"><input id="contact_checkBox" type="checkbox" name="terms" > {{Lang::get('contact.field_agree')}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                       <a href="javascript:void(0)" class="send-contact-form" id="submit-contact" onClick="ga('send', 'event', { eventCategory: 'CTA', eventAction: 'Contact - Form Submit', eventLabel: 'Clicked'});">{{Lang::get('contact.field_submit')}} <i class="icon-mail"></i></a>
                    </div>
                </div>

                <div class="row" id="contact-success-msg" style="display:none">
                    <div class="white-message">{{Lang::get('contact.success_message')}}</div>
                </div>

            </form>
        </div>
    </div>
</div>
</div>
</section>


@stop