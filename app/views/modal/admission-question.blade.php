@section('content')
<section id="wizard_bg" class="modal_wizard_bg">
	<div class="container">
		<div class="career-path-questions admission-question-pop">
		    <ul class="questions-wrapper">
		        <!-- First Question -->
		        <li id="step-1">
		        	<?php if(Session::get('locale') == "en") {?>
		            <div class="question-heading">Do you already know what you want to study?</div>
		            <div class="question-controls-wrapper">
		                <div class="no-padding admission-question-pop-controls">
		                    <a href="javascript:void();" class="questions-buttons button-yes">Yes</a>
		                    <a href="javascript:void();" class="questions-buttons button-no">No</a>
		                </div>
		            </div>
		            <?php }else{?>
		             <div class="question-heading">¿SABE USTED QUÉ DESEA ESTUDIAR?</div>
		            <div class="question-controls-wrapper">
		                <div class="no-padding admission-question-pop-controls">
		                    <a href="javascript:void();" class="questions-buttons button-yes">Sí</a>
		                    <a href="javascript:void();" class="questions-buttons button-no">No</a>
		                </div>
		            </div>
		            <?php }?>
		        </li>
		    </ul>
		</div>
	</div>
</section>

<script type="text/javascript">

	$('.button-yes').click(function(){
		parent.$.fancybox.close();
	});

	$('.button-no').click(function(){
		parent.window.location = '/advisement';
	});

	$('.questions-buttons').click(function(){
		$.cookie("admissions_modal", 1, { expires : 365 });
	});
	
</script>
@stop