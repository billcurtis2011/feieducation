@section('content')

<section class="modal_wizard_bg">
<div class="container">
<!-- Start Survey container -->
<div id="survey_container">

    <form name="example-1" id="wrapped" action="/" method="POST" autocomplete="off">
        <div id="middle-wizard">
            <div class="step">
                <div class="row">
                    <h3 class="col-md-10">Toma el primer paso!</h3>
                    <p class="col-md-12">Deje que uno de nuestros asesores conversen con usted y descubra cómo podemos ayudarle a lograr un futuro mejor. <strong>305.748.2865</strong></p>
                    <div class="col-md-12">
                        <ul class="data-list">
                            <li><div class="form-group"><input id="name" required type="text" name="name" class="required form-control" placeholder="Nombre Completo"><span class="input-icon"><i class="icon-user"></i></span></div></li>
                            <li><div class="form-group"><input id="email"  type="email" name="email" class=" form-control" placeholder="Email"><span class="input-icon"><i class="icon-email"></i></span></div></li>
                            <li><div class="form-group"><input id="phone"  name="phone" class="form-control" placeholder="Número de Teléfono" /><span class="input-icon"><i class="icon-phone"></i></span></div></li>
                        </ul>
                        <p class="form-disclaimer-fineprint">Al marcar esta casilla, doy mi consentimiento FEI para comunicarse conmigo en el número antes mencionado, incluyendo mi número de teléfono móvil si es aplicable. Entiendo que el consentimiento no es una condición de la compra. Llámenos para obtener más información: 305.748.2865</p>
                        <p style="margin-bottom: 0px;" id="agreement-checkbox" class="animated"><input id="checkBox" type="checkbox" name="terms" > Entiendo y estoy de acuerdo.</p>
                    </div>
                </div><!-- end row -->

            </div><!-- end step-->

        </div><!-- end middle-wizard -->

        <div id="bottom-wizard">
            <a href="javascript:void(0)" id="submit_form" class="button_medium send-wizard">Habla con un Asesor</a>
        </div><!-- end bottom-wizard -->
    </form>

    <div class="form-thank-you-message animated" id="modal-thank-you" style="display: none;">
        <span><strong>Felicitaciones!</strong><br/> Uno de nuestros asesores se pondrá en contacto con usted en breve.</span>
    </div>


</div><!-- end Survey container -->

</div>


</section><!-- end section main container -->
@stop