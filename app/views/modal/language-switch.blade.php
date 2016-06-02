@section('content')
<base target="_parent" />
<section id="wizard_bg" class="modal_wizard_bg">
	<div class="container">
		<div class="career-path-questions admission-question-pop">
		    <ul class="questions-wrapper">
		        <!-- First Question -->
		        <li id="step-1">
		            <div class="question-heading">What language do you prefer?</div>
		            <div class="question-controls-wrapper">
		                <div class="no-padding admission-question-pop-controls">
		                    <a href="/language-chooser/sp" target="_parent" class="questions-buttons button-sp">Español</a>
		                    <a href="/language-chooser/en" target="_parent" class="questions-buttons button-en">English</a>
		                </div>
		            </div>

		        </li>
		    </ul>
		</div>
	</div>
</section>
<script type="text/javascript">
	$.cookie("language_modal", 1, { expires : 365 });
</script>
@stop