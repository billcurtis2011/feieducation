@section('content')

<section class="modal_wizard_bg">
<div class="container">
<!-- Start Survey container -->
<div id="survey_container">

    <form name="example-1" id="wrapped" action="/" method="POST" autocomplete="off">
        <div id="middle-wizard">
            <div class="step">
                <div class="row">
                    <h3 class="col-md-10">{{Lang::get('get_info_modal.main_heading')}}</h3>
                    <p class="col-md-12">{{Lang::get('get_info_modal.sub_heading')}} <strong>{{Lang::get('get_info_modal.phone_label')}}</strong></p>
                    <div class="col-md-12">
                        <ul class="data-list">
                            <li><div class="form-group"><input id="name" required type="text" name="name" class="required form-control" placeholder="{{Lang::get('get_info_modal.field_name')}}"><span class="input-icon"><i class="icon-user"></i></span></div></li>
                            <li><div class="form-group"><input id="email"  type="email" name="email" class=" form-control" placeholder="{{Lang::get('get_info_modal.field_email')}}"><span class="input-icon"><i class="icon-email"></i></span></div></li>
                            <li><div class="form-group"><input id="phone"  name="phone" class="form-control" placeholder="{{Lang::get('get_info_modal.field_phone')}}" /><span class="input-icon"><i class="icon-phone"></i></span></div></li>
                        </ul>
                        <p class="form-disclaimer-fineprint">{{Lang::get('get_info_modal.congulate_checkbox')}}</p>
                        <p style="margin-bottom: 0px;" id="agreement-checkbox" class="animated"><input id="checkBox" type="checkbox" name="terms" >{{Lang::get('get_info_modal.congulate_agree')}}</p>
                    </div>
                </div><!-- end row -->

            </div><!-- end step-->

        </div><!-- end middle-wizard -->

        <div id="bottom-wizard">
            <a href="javascript:void(0)" id="submit_form" class="button_medium send-wizard">{{Lang::get('get_info_modal.submit')}}</a>
        </div><!-- end bottom-wizard -->
    </form>

    <div class="form-thank-you-message animated" id="modal-thank-you" style="display: none;">
        {{Lang::get('get_info_modal.congulate')}}
    </div>


</div><!-- end Survey container -->

</div>


</section><!-- end section main container -->
@stop