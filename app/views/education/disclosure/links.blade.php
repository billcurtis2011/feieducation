@section('content')
   <section id="main_content">
        <div class="container">

        <ol class="breadcrumb">
          <li><a href="/">FEI</a></li>
          <li class="active">{{Lang::get('disclosures.disclosure_breadcrumb')}}</li>
        </ol>

            <div class="row page-inner-section">
                <div class="col-md-8">
                    <h2 class="inner-section-heading">{{Lang::get('disclosures.disclosure_heading')}}</h2>

                    <div class="box_style_4">
                        <h4>{{Lang::get('disclosures.consumer_information')}}</h4>
                        <ul class="list_1">
                            <li><a href="/pdf/campus-security-policy-and-campus-crime-statistics-report.pdf" target="_blank"><i class="icon-acrobat" style="color: #f00;"></i>{{Lang::get('disclosures.campus_security')}}</a></li>
                            <li><a href="/pdf/copyright-policy.pdf" target="_blank"><i class="icon-acrobat" style="color: #f00;"></i>{{Lang::get('disclosures.copyright_policy')}}</a></li>
                            <li><a href="/pdf/drug-and-alcohol-policy.pdf" target="_blank"><i class="icon-acrobat" style="color: #f00;"></i>{{Lang::get('disclosures.drug_and_alcohol')}}</a></li>
                            <li><a href="/pdf/emergency-response-and-evactuation-procedures.pdf" target="_blank"><i class="icon-acrobat" style="color: #f00;"></i>{{Lang::get('disclosures.emergency_response')}}</a></li>
                            <li><a href="/pdf/family-educational-rights-and-privacy-act.pdf" target="_blank"><i class="icon-acrobat" style="color: #f00;"></i>{{Lang::get('disclosures.family_educational_rights')}}</a></li>
                            <li><a href="/pdf/student-right-to-know.pdf" target="_blank"><i class="icon-acrobat" style="color: #f00;"></i>{{Lang::get('disclosures.students_right_know')}}</a></li>
                            <li><a href="/pdf/textbooks-listings-and-costs.pdf" target="_blank"><i class="icon-acrobat" style="color: #f00;"></i>{{Lang::get('disclosures.textbooks_listings')}}</a></li>
                            <li><a href="/pdf/voters-registration-information.pdf" target="_blank"><i class="icon-acrobat" style="color: #f00;"></i>{{Lang::get('disclosures.voters_registration')}}</a></li>
                            <br/>
                            <li><a href="/pdf/sexual-predator-offender-notification-to-students-and-employees.pdf" target="_blank"><i class="icon-acrobat" style="color: #f00;"></i>{{Lang::get('disclosures.sexual_offender')}}</a></li>
                         </ul>
                   </div>
                   <br/><br/>
                    <div class="box_style_4">
                        <h4>{{Lang::get('disclosures.gainful_employment')}}</h4>
                        <ul class="list_1">
                            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.medical-assistant')}}/{{Lang::get('header.disclosure_link')}}">{{Lang::get('admissions.medical_assistant_title')}}</a></li>
                            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.medical-billing-and-coding')}}/{{Lang::get('header.disclosure_link')}}">{{Lang::get('admissions.medical_billing_title')}}</a></li>
                            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.patient-care-technician')}}/{{Lang::get('header.disclosure_link')}}">{{Lang::get('admissions.patient_care_title')}}</a></li>
                            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.pharmacy-technician')}}/{{Lang::get('header.disclosure_link')}}">{{Lang::get('admissions.pharmacy_technician_title')}}</a></li>
                            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.medical-office-administrator')}}/{{Lang::get('header.disclosure_link')}}">{{Lang::get('admissions.medical_administrator_title')}}</a></li>
                            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.massage-therapy')}}/{{Lang::get('header.disclosure_link')}}">{{Lang::get('admissions.masage_therapy_title')}}</a></li>
                            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.business-management')}}/{{Lang::get('header.disclosure_link')}}">{{Lang::get('admissions.business_administration_title')}}</a></li>
                         </ul>
                   </div>

                </div>

                <aside class="col-md-4">
                    <div class="box_style_1">
                        <h4>{{Lang::get('admissions.contact_fei')}}</h4>
                        <div class="side-contact-info">
                            <ul id="contact-info" class="admissions-contact-info">
                                <li><div class="aside-callout-number">{{Lang::get('admissions.contact_phone')}}</div></li>
                                <li><h5><i class="icon-home"></i> {{Lang::get('admissions.contact_address')}}</h5></li>
                                
                            </ul>
                            <div id="map-side-contact" style="height:250px"></div>
                        </div>
                    </div>

                </aside> <!-- End col-md-4 -->
            </div>

        </div><!-- End container -->
    </section><!-- End main_content -->

@stop