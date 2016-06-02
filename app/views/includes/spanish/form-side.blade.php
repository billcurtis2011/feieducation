<div class="box_style_4 dark_style_sideform">
    <h4>Comience Hoy Mismo</h4>

    <div id="admissions-q1" class="questionAdmissionWrap animated">
        <h5 class="question-admisionsside-heading">¿Que tan pronto te gustaria comenzar la escuela?</h5>

        <ul class="admisions-side-questions">
            <li class="col-md-4 col-xs-4 no-padding">
                <input name="soonschool" type="radio" id="school-soon-1" class="required check_radio" value="Days">
                <label for="school-soon-1"> Días</label>
            </li>
            <li class="col-md-4 col-xs-4 no-padding">
                <input name="soonschool" type="radio" id="school-soon-2"class="required check_radio" value="Weeks">
                <label for="school-soon-2"> Semanas</label>
            </li>
            <li class="col-md-4 col-xs-4 no-padding">
                <input name="soonschool" type="radio" id="school-soon-3"class="required check_radio" value="Months">
                <label for="school-soon-3"> Meses</label>
            </li>
        </ul>
    </div>

    <div id="admissions-q2" class="questionAdmissionWrap animated" style="display: none;">
        <h5 class="question-admisionsside-heading">¿Qué tipo de horario de clases te gustaria?</h5>

        <ul class="admisions-side-questions">
            <li class="col-md-4 col-xs-4 no-padding">
                <input name="school-time" type="radio" id="school-time-1" class="required check_radio" value="Day">
                <label for="school-time-1"> Día</label>
            </li>
            <li class="col-md-4 col-xs-4 no-padding">
                <input name="school-time" type="radio" id="school-time-2"class="required check_radio" value="Evening">
                <label for="school-time-2"> Noche</label>
            </li>
            <li class="col-md-4 col-xs-4 no-padding">
                <input name="school-time" type="radio" id="school-time-3"class="required check_radio" value="Weekend">
                <label for="school-time-3"> Fin de semana</label>
            </li>
        </ul>
    </div>

    <div id="admissions-q3" class="questionAdmissionWrap animated" style="display: none;">
        <h5 class="question-admisionsside-heading">Nuestros Programas</h5>
        <ul class="admisions-side-questions">
            <li class="col-md-12 no-padding">
                <div class="feiSelect">
                    <select id="cd-dropdown" class="cd-select">
                        <option value="-1" selected>¿Qué programa le interesa?</option>
                        <option value="English as a Second Language (ESL)">English as a Second Language (ESL)</option>
                        <option value="Medical Assistant">Medical Assistant</option>
                        <option value="Medical Billing and Coding">Medical Billing and Coding</option>
                        <option value="Patient Care Technician">Patient Care Technician</option>
                        <option value="Pharmacy Technician">Pharmacy Technician</option>
                        <option value="Medical Administrator">Medical Administrator</option>
                        <option value="Massage Therapy">Massage Therapy</option>
                        <option value="Business Management">Business Management</option>
                    </select>
                </div>
            </li>
        </ul>
    </div>

    <div id="admissions-q4" class="questionAdmissionWrap animated" style="display: none;">
        <h5 class="question-admisionsside-heading">Vamos a entrar en contacto</h5>

        <ul class="admisions-side-questions">
            <li class="col-md-12 no-padding">
                <div class="survey-form-wrapper">
                    <form role="form" id="side-questionaire-form">
                        <div class="form-group survey-form-control-wrap">
                            <input type="text" id="side_form_name" name="side_form_name" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group survey-form-control-wrap">
                            <input type="email" id="side_form_email" name="side_form_email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group survey-form-control-wrap">
                            <input type="text" id="side_form_phone" name="side_form_phone" class="form-control" placeholder="Numbero de Telefono">
                        </div>
                        <div class="form-group survey-form-control-wrap side-disclaimer">
                            <p class="form-disclaimer-fineprint">Al marcar esta casilla, doy mi consentimiento FEI para comunicarse conmigo en el número antes mencionado, incluyendo mi número de teléfono móvil si es aplicable. Entiendo que el consentimiento no es una condición de la compra. Llámenos para obtener más información: 305.748.2865</p>
                            <p style="margin-bottom: 0px;" id="agreement-checkbox" class="animated"><input id="checkBox" type="checkbox" name="terms" > Entiendo y estoy de acuerdo</p>
                        </div>
                    </form>
                </div>
                <div class="submit-survey-wrap">
                    <a href="javascript:void(0)" id="side-form-finish" class="submit-survey-btn complete-side-survey">Terminar <i class="icon-check"></i></a>
                </div>
            </li>
        </ul>
    </div>

    <div class="form-thank-you-message animated" id="sideform-thank-you" style="display: none;">
        <span><strong>Felicitaciones!</strong><br/> Uno de nuestros asesores se pondrá en contacto con usted en breve.</span>
    </div>

    <div class="admissions-side-progress"></div>
</div>