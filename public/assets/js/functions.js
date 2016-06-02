

// ======================================= HELPER FUNCTIONS  ====================================== //
	//Function to check if an element is visible in the screen
	$.fn.isOnScreen = function(){

	    var win = $(window);

	    var viewport = {
	        top : win.scrollTop() - 400,
	        left : win.scrollLeft()
	    };
	    viewport.right = viewport.left + win.width();
	    viewport.bottom = viewport.top + win.height();

	    var bounds = this.offset();

	    bounds.right = bounds.left + this.outerWidth();
	    bounds.bottom = bounds.top + this.outerHeight();

	    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

	};

	//Click to go to section
	$(function() {
		console.log( $('body').scrollTop);
	  $('a.goToSection[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top - 40
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
	//Function to validate the email addresses
	function validateEmail(email) {
	    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	    return re.test(email);
	}

	function mobilecheck() {
		var check = false;
		(function(a){if(/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
		return check;
	}
	function msieversion() {

	        var ua = window.navigator.userAgent;
	        var msie = ua.indexOf("MSIE ");

	        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer, return version number
	            return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)));
	        else                 // If another browser, return 0
	           return false;
	}
	IEversion = msieversion();
// ======================================== DESIGN CODE ===================================================

	//about slider
	$(function() {
		if($('#AboutCarousel').length) {
			$('#AboutCarousel').carousel({
			    interval: 10000
			})
		}

	});

	//The carousel should have more of an interval
	if($('.carousel').length) {
		$('.carousel').carousel({
		  interval: 5000
		});
	}

	//Links for the home page
	$(function () {

		//Quick Courses
		$('#home-quick-courses').click(function () {
			window.location = "/admissions";
		});

		//Quick Courses
		$('#home-financial-aid').click(function () {
			window.location = "/financial-aid";
		});

		//Quick Courses
		$('#home-job-placement').click(function () {
			window.location = "/career";
		});

		//Quick Courses
		$('#home-bilingual-education').click(function () {
			window.location = "/admissions";
		});

	});


	//Make Image parallax
	function parallax(){
		if(!mobilecheck()) //Do parallax only if is not mobile
		{
			if(typeof imgTop == 'undefined') return true;

		    $('#sub-header .backstretch img').css('top', (imgTop + ($(window).scrollTop() * 0.7)) + 'px');
		    $('#sub-header .sub-header-text-content').css('top', ($(window).scrollTop() * 0.2) + 'px');

		    var curOpacity =  $('#sub-header .sub-header-text-content').css('opacity');

		    if($(window).scrollTop() > 0) {
		    	var newOpacity = curOpacity - (1/($(window).scrollTop() * 3));
		    }else {
		    	var newOpacity = 1;
		    }

		    $('#sub-header .sub-header-text-content').css('opacity', newOpacity);
		    //console.log($(window).scrollTop());
		    //console.log(newOpacity);

		    //$('.middle-admissions-section .backstretch img').css('top', (admissionMiddleSecImg + ($(window).scrollTop() - 911)) + 'px');

		}
	}


	//Shrink header style
	var header = $('#main-fei-header');

	if(!mobilecheck()) //Do parallax only if is not mobile
		{
		$(window).scroll(function() {

		    var scroll = $(window).scrollTop();

		    if (scroll >= 180) {
		    	header.addClass('fadeInDown');
		        header.addClass('shriked-header');
		        $('body').addClass('spaced-body');
		        $('#fei-home-menu a').addClass('home-item-changed');
		        $('#fei-home-menu a').html('<img src="/assets/img/fei-logo-tiny.png" width="30" class="menu-feimini-logo">');
		    	$('.menu-penguins').show();
		    } else if (scroll <= 117){
		        header.removeClass('shriked-header');
		        header.removeClass('fadeInDown');
		        $('body').removeClass('spaced-body');
		        $('#fei-home-menu a').removeClass('home-item-changed');
		        $('#fei-home-menu a').html('FEI');
		        $('.menu-penguins').hide();
		    }

		    parallax();

		});
	}



// ======================================= MENU  ================================================================
	if(jQuery('ul.sf-menu').length) {
		jQuery('ul.sf-menu').superfish();

		// MENU MOBILE ==========//
		// Collpsable menu mobile and tablets
		$('#mobnav-btn').click(
		function () {
		    $('.sf-menu').slideToggle(400)("xactive");
		});

		$('.mobnav-subarrow').click(
		function () {
		    $(this).parent().toggleClass("xpopdrop");
		});

	}






// ======================================= SCROLL TO TOP =====================================================
	$(function() {
		$(window).scroll(function() {
			if($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		});

		$('#toTop').click(function() {
			$('body,html').animate({scrollTop:0},500);
		});

	});

	if( window.innerWidth < 770 ) {
		$("button.forward, button.backword").click(function() {
		  $("html, body").animate({ scrollTop: 115 }, "slow");
		  return false;
		});
	}

	if( window.innerWidth < 500 ) {
		$("button.forward, button.backword").click(function() {
		  $("html, body").animate({ scrollTop: 245 }, "slow");
		  return false;
		});
	}
	if( window.innerWidth < 340 ) {
		$("button.forward, button.backword").click(function() {
		  $("html, body").animate({ scrollTop: 280 }, "slow");
		  return false;
		});
	}

// ====================================== TOGGLE =================================================

//Toggle -->
$('.togglehandle').click(function()
{
	$(this).toggleClass('active')
	$(this).next('.toggledata').slideToggle()
});

// alert close
$('.clostalert').click(function()
{
	$(this).parent('.alert').fadeOut ()
});

// Tooltip -->
if($('.tooltip-1').length) {
	$('.tooltip-1').tooltip({html:true});
}


// Accrodian -->
var $acdata = $('.accrodian-data'),
	$acclick = $('.accrodian-trigger');

$acdata.hide();
$acclick.first().addClass('active').next().show();

$acclick.on('click', function(e) {
	if( $(this).next().is(':hidden') ) {
		$acclick.removeClass('active').next().slideUp(300);
		$(this).toggleClass('active').next().slideDown(300);
	}
	e.preventDefault();
});

if($('.po-markup > .po-link').length) {
	$('.po-markup > .po-link').popover({
		trigger: 'hover',
		html: true,  // must have if HTML is contained in popover

		// get the title and conent
		title: function() {
		  return $(this).parent().find('.po-title').html();
		},
		content: function() {
		  return $(this).parent().find('.po-body').html();
		},

		container: 'body',
		placement: 'top'

	});
}


//accordion
function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('icon-plus icon-minus');
}

$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);
$('#accordion').on('hidden.bs.collapse', function () {})
// testimonial carousel -->
$(document).ready(function() {
  //Set the carousel options
  if($('#quote-carousel').length) {
  	$('#quote-carousel').carousel({
	    pause: true,
	    interval: 6000,
	  });
  }
});

//Pace holder
if($('input, textarea').length) {
	$('input, textarea').placeholder();
}


$(function() {
	if(typeof changeVideoTestimonial != 'undefined') {
		$(".testimonial-faces-wrap li").mouseover(changeVideoTestimonial);
	}
});


// ================================================== VIMEO API ==================================================//



$(function() {
	//Dont show video if mobile
	//console.log(IEversion);
	if(mobilecheck() || (IEversion && IEversion <= 9)){
		$('.vimFEIplayerwrap').hide();
		$('.image-wrap-video-replacement').show();
		$(".image-wrap-video-replacement").backstretch("/assets/img/life-fei-static.jpg");
		return;
	}

    var iframe = $('#FEIVideo_player')[0];

    if(typeof $f == 'undefined') return false;

    player = $f(iframe);
    //var status = $('.status');

    // When the player is ready, add listeners for pause, finish, and playProgress
    player.addEvent('ready', function() {
        //status.text('ready');

        player.api('setVolume', 0);
        player.api('seekTo', 10);
        player.api('setLoop', true);

        //$('#FEIVideo_player').on('mouseover', function() { return false; });

        player.addEvent('pause', onPause);
        player.addEvent('finish', onFinish);
        player.addEvent('playProgress', onPlayProgress);
    });

    // Call the API when a button is pressed
    /*$('button').bind('click', function() {
        player.api($(this).text().toLowerCase());
    });*/

    function onPause(id) {
        //status.text('paused');
    }
    function onFinish(id) {
        //status.text('finished');
    }
    function onPlayProgress(data, id) {
        //status.text(data.seconds + 's played');
    }

    $(window).scroll(function() {
		if($('.life-fei-video-wrap').length) {
			 if ($('.life-fei-video-wrap').isOnScreen()) {
		    	player.api('play');
		    }else{
		    	player.api('pause');
		    }
		}
	});
});
//---------EOF: VIMEO API---------//



//================================================ HOME PAGE QUESTIONAIRE =======================================
$(function () {

	//---------------------- Step 1 -----------------------//
	//Question 1
	$('input[name="hp-questions-q1"]').on('ifChecked', function(event){

	  	//mark question as completed(line through)
	  	$('#q1-heading').addClass('completed-step');
	  	setTimeout(function () {
			//Hide answesr on Q1
	  		$('#q1-answers').hide();
		}, 300);

	  	//Resize backstretch
		setInterval(function(){
			$("#career-path").backstretch("resize");
		}, 10);

		//show next question
		$('#step1_q2').addClass('fadeInUp');
		setTimeout(function () {
			$('#step1_q2').show();
		}, 300);

		//Get the answer from this question
		hpQ1Answer = $('input[name="hp-questions-q1"]').val();

		//console.log(ga('send', 'event', { eventCategory: 'hp-questions-q1', eventAction: 'hp-questions-q1', eventLabel: 'Clicked'}));

		ga('send', 'event', { eventCategory: 'hp-questions-q1', eventAction: 'hp-questions-q1', eventLabel: 'Clicked'});

	});

	//Question 2
	$( "#go-to-survey2" ).click(function() {
		//move steps to number 2
		$("ul#progressbar li:nth-child(2)").addClass('active');

		//Hide current step
		$("#step-1").addClass('fadeOut');
		setTimeout(function(){
			$("#step-1").hide();
		}, 300);


		//show next step
		$("#step-2").addClass('fadeIn');
		setTimeout(function(){
			$("#step-2").show();
		}, 300);

		//Loop through all the possible answers and check which is answered
		hpQ2Answers = Array();
		$('input[name="hp-questions-q2"]').each(function () {
			if($(this).is(':checked')) {
				hpQ2Answers.push($(this).val());
			}
		});

		ga('send', 'event', { eventCategory: 'hp-questions-q2', eventAction: 'hp-questions-q2', eventLabel: 'Clicked'});
	});

	//Question 4
	$( "#go-to-survey3" ).click(function() {
		//move steps to number 3
		$("ul#progressbar li:nth-child(3)").addClass('active');

		//Hide current step
		$("#step-2").addClass('fadeOut');
		setTimeout(function(){
			$("#step-2").hide();
		}, 300);


		//show next step
		$("#step-3").addClass('fadeIn');
		setTimeout(function(){
			$("#step-3").show();
		}, 300);

		//This is going to be a lot lot bigger
		//Not really, just loop through the inputs and record the values
		hpQ3Answers = Array();
		$('input.boost_slider').each(function () {
			hpQ3Answers.push($(this).slider('getValue'));
		});

		ga('send', 'event', { eventCategory: 'hp-questions-q4', eventAction: 'hp-questions-q4', eventLabel: 'Clicked'});
	});

	//Question 5
	$( "#go-to-survey4" ).click(function() {
		//move steps to number 4
		$("ul#progressbar li:nth-child(4)").addClass('active');

		//Hide current step
		$("#step-3").addClass('fadeOut');
		setTimeout(function(){
			$("#step-3").hide();
		}, 300);


		//show next step
		$("#step-4").addClass('fadeIn');
		setTimeout(function(){
			$("#step-4").show();
		}, 300);

		//Get the answers for this
		hpQ4Answers = Array();
		$('input[name="hp-questions-q4"]').each(function () {
			if($(this).is(':checked')) {
				hpQ4Answers.push($(this).val());
			}
		});

		ga('send', 'event', { eventCategory: 'hp-questions-q5', eventAction: 'hp-questions-q5', eventLabel: 'Clicked'});
	});

	//Let's get started on the form validation

	$('#hp-survery-form').validate({
	      rules: {
	              email: {
	                  required: true,
	                  email: true
	              },
	              phone: {
	                  required: true,
	                  phoneUS: true
	              },
	              name: {
	                  required: true
	              }
	          }
	   });

	//Question 6
	$( ".complete-survey" ).click(function() {

		//console.log($('#contact_checkBox').parent());

		//Validate the terms and conditions
		if(!$('#contact_checkBox').parent().hasClass('checked')) {
	        $('#agreement-checkbox').attr('class', 'animated shake terms-error');
	        return;
	  	}else {
	    	$('#agreement-checkbox').attr('class', 'animated');
	  	}

		if (!$("#hp-survery-form").valid()) {
			return;
		}

		//disable button and show spinner
		$('.complete-survey').addClass('disabled');
		$('.complete-survey i').attr('class', 'icon-spin5 animate-spin');

		//Send the form information
		$.ajax({
			url: '/hp-survey-submission',
			type: "POST",
            data: {
            	name: $('#survery-name').val(),
            	email: $('#survery-email').val(),
            	phone: $('#survery-phone').val(),
            	hpQ1Answer: hpQ1Answer,
            	hpQ2Answers: JSON.stringify(hpQ2Answers),
            	hpQ3Answers: JSON.stringify(hpQ3Answers),
            	hpQ4Answers: JSON.stringify(hpQ4Answers),
            	source: window.location.pathname+window.location.search
            },
            success: function (r) {
            	//Hide current step
				$("#step-4").addClass('fadeOut');
				setTimeout(function(){
					$("#step-4").hide();
				}, 300);

				//show next step
				$(".survey-result").addClass('fadeIn');
				setTimeout(function(){
					$(".survey-result").show();
				}, 300);
            },
            error: function (r) {
            	//console.log(r);
            	alert("We couldn't save the survey results at this time. Please try again later.");
            }
		});


		ga('send', 'event', { eventCategory: 'hp-questions', eventAction: 'hp-questions-submitted', eventLabel: 'Submitted'});

	});



});



// ==================================== FINANCIAL AID QUESTION ========================================
$(function () {
	//Funtion for when the user selects either of the answers
	$('input[name="prev_fafsa"]').on('ifChecked', function(event){
		//Fade away the current question and show the next one
		$('.previous_fafsa_step').fadeOut("slow", function () {
			$('.help_fafsa_step').fadeIn("slow");
		});
		$('.admissions-side-progress').css('width', '100%');

		ga('send', 'event', { eventCategory: 'FA-question1', eventAction: 'FA-question1', eventLabel: 'Clicked'});
	});



	//Function for when the user selects either of the final answers
	$('input#last_fafsa_1').on('ifChecked', function(event){
		//Open the request info modal
		$('.fancybox-get-info').click();

		ga('send', 'event', { eventCategory: 'FA-question2', eventAction: 'FA-question2', eventLabel: 'Clicked'});
	});

});


// ===================================== ADMINISSION QUESTIONAIRE ==========================================
$(function () {
    setTimeout(function () {
        imgTop = parseFloat($('#sub-header .backstretch img').css('top'));
        //admissionMiddleSecImg = parseFloat($('.middle-admissions-section .backstretch img').css('top'));
        //console.log($(window).scrollTop());
    }, 500);

    //ADMISSIONS SIDE QUESTIONS
    //QUESTION 1
    $('input[name="soonschool"]').on('ifChecked', function(event){

        //Hide current step
        $("#admissions-q1").addClass('fadeOut');
        setTimeout(function(){
            $("#admissions-q1").hide();
        }, 300);


        //show next step
        $("#admissions-q2").addClass('fadeInUp');
        setTimeout(function(){
            $("#admissions-q2").show();
        }, 300);

        //move progress bar
        $('.admissions-side-progress').css('width', '60%');

    	ga('send', 'event', { eventCategory: 'admissions-q1', eventAction: 'admissions-q1', eventLabel: 'Clicked'});
    });

    //QUESTION 2
    $('input[name="school-time"]').on('ifChecked', function(event){
        //Hide current step
        $("#admissions-q2").addClass('fadeOut');
        setTimeout(function(){
            $("#admissions-q2").hide();
        }, 300);


        //show next step
        /*$("#admissions-q3").addClass('fadeInUp');
        setTimeout(function(){
            $("#admissions-q3").show();
        }, 300);*/

        //move progress bar
        $('.admissions-side-progress').css('width', '80%');

        //setTimeout(function () {
            //$('#cd-dropdown').dropdown();

            //open the third step
            //$('.cd-dropdown ul li').click(function() {

                //console.log('here');

                //Hide current step
               /* $("#admissions-q3").addClass('fadeOut');
                setTimeout(function(){
                    $("#admissions-q3").hide();
                }, 300);*/


                //show next step
                $("#admissions-q4").addClass('fadeIn');
                setTimeout(function(){
                    $("#admissions-q4").show();
                }, 300);

                //move progress bar
                $('.admissions-side-progress').css('width', '100%');

                //Prevent the form from submittinmg
                $('#side-questionaire-form').validate({
                      rules: {
                              side_form_email: {
                                  required: true,
                                  email: true
                              },
                              side_form_phone: {
                                  required: true,
                                  phoneUS: true
                              },
                              side_form_name: {
                                  required: true
                              }
                          }
                   });

                $('#side-form-finish').click(function () {

                    if ($("#side-questionaire-form").valid()) {

                        if(!$('.icheckbox_square-yellow').hasClass('checked')) {
                           $('#agreement-checkbox').attr('class', 'animated shake terms-error');
                            return;
                        }else {
                            $('#agreement-checkbox').attr('class', 'animated');
                        }

                         //Add the loading
                         $("#side-form-finish").addClass('disabled');
                         $("#side-form-finish").html('Loading... <i class="icon-cog animate-spin"></i>');

                         //Get answers from questions
                         var howSoon = $('input[name="soonschool"]').val();
                         var classSchedule = $('input[name="school-time"]').val();
                         //var program = $('.feiSelect .cd-dropdown span span').html();

                         var name = $('#side_form_name').val();
                         var phone = $('#side_form_phone').val();
                         var email = $('#side_form_email').val();

                         $.ajax({
                             url: '/side-survey-submission',
                             type: "POST",
                            data: {
                                howSoon: howSoon,
                                classSchedule: classSchedule,
                                //program: program,
                                name: name,
                                phone: phone,
                                email: email,
                                source: window.location.pathname+window.location.search
                            },
                            success: function (r) {
                                if(r.trim() == 'true') {
                                    $("#side-questionaire-form").hide();
                                    $('.question-admisionsside-heading').hide();
                                    $('.admisions-side-questions').hide();
                                    $('#sideform-thank-you').addClass('bounceIn');
                                    $('#sideform-thank-you').show();

                                    ga('send', 'event', { eventCategory: 'admissions-q2', eventAction: 'admissions-q3-complete', eventLabel: 'Clicked'});
                                }
                            },
                            error: function (r) {
                                //console.log(r);
                            }
                         });
                    }

                });
            //});
        //}, 300);

		ga('send', 'event', { eventCategory: 'admissions-q2', eventAction: 'admissions-q2', eventLabel: 'Clicked'});
    });
});

// ====================================================== MODAL BOX FORM HANDLER ==================================================
$(document).ready(function() {
   $("#wrapped").validate({
      rules: {
              email: {
                  required: true,
                  email: true,
              },
              phone: {
                  required: true,
                  phoneUS: true
              },
              name: {
                  required: true,
              },
          }
   });

    $( "#submit_form" ).click(function() {

		if ($("#wrapped").valid()) {

			//Validate the terms and conditions
			if(!$('.icheckbox_square-yellow').hasClass('checked')) {
		        $('#agreement-checkbox').attr('class', 'animated shake terms-error');
		        return;
		  	}else {
		    	$('#agreement-checkbox').attr('class', 'animated');
		  	}

		  	//Add the loading
			$("#submit_form").addClass('disabled');
			$("#submit_form").html('Loading... <i class="icon-cog animate-spin"></i>');

			var request = $.ajax({
				url: "/request-info",
				type: "POST",
				data: {
					name: $('#name').val(),
					email: $('#email').val(),
					phone: $('#phone').val(),
					checkBox: $('#checkBox').val(),
					source: parent.window.location.pathname
				},
				success: function (r) {
					if(r.trim() == 'true') {

						//TODO: Make a more elaborate tahnk you message
						$('#wrapped').hide();

						$('#modal-thank-you').show();
						$('#modal-thank-you').addClass('bounceIn');

						//Resize fancybox
						parent.$(".fancybox-inner").css({'height': '152px'});

						setTimeout(function () {
							parent.$.fancybox.close();
						}, 3000);
					}
				},
				error: function (r) {
				//console.log(r);
				alert('We could\'nt save your information at this time. Please try again');
				}
			});
	 }else{
      //console.log('Form is invalid');
     }
      ga('send', 'event', { eventCategory: 'lightbox-form', eventAction: 'lightbox-form-submission', eventLabel: 'Submitted'});
  });
});




// ======================================================== CONTACT US FORM HANDLER ==============================================

$(document).ready(function() {

	//Come up with to random numbers for the capcha validation
	number1 = Math.floor((Math.random() * 10) + 1);
	number2 = Math.floor((Math.random() * 10) + 1);

	//Update the place holder with these numbers
	if(typeof field_human != 'undefined') {
		$('#verify_contact').attr('placeholder', field_human+' '+number1+' + '+number2+' = ');
	}

	//Prevent the form from submittinmg
	$( "#contactform" ).submit(function( event ) {
	  //alert( "Handler for .submit() called." );
	  event.preventDefault();
	});

	//Validate
	$("#contactform").validate({
	    rules: {
	      email_contact: {
	          required: true,
	          email: true,
	      },
	      phone_contact: {
	          required: true,
	          phoneUS: true
	      },
	      name_contact: {
	          required: true,
	      },
	  	  lastname_contact: {
	  	  	  required: true,
	  	  },
	  	  message_contact: {
	  	  	  required: true,
	  	  }
	    },
	});

	$( "#submit-contact" ).click(function() {
	 if ($("#contactform").valid()) {


	      //Verify the validation
	      if ($('#verify_contact').val() != (number1 + number2)) {
	          //console.log('informationvalid');
	          $('#verify_contact').removeClass('valid');
	          $('#verify_contact').addClass('invalid-human');
	          return;
	      }else {
	          $('#verify_contact').removeClass('invalid-human');
	          $('#verify_contact').addClass('valid');
	      }

	      //verify that the terms checkbox is checked
          if(!$('.icheckbox_square-yellow').hasClass('checked')) {
            $('#agreement-checkbox').attr('class', 'animated shake terms-error');
            return;
          }else {
            $('#agreement-checkbox').attr('class', 'animated');
          }

	      $('#submit-contact').addClass('disabled');
	      $("#submit-contact").html('Sending... <i class="icon-cog animate-spin"></i>');

	      var request = $.ajax({
	        url: "/request-contactInfo",
	        type: "POST",
	        data: {
	          name_contact: $('#name_contact').val(),
	          lastname_contact: $('#lastname_contact').val(),
	          email_contact: $('#email_contact').val(),
	          phone_contact: $('#phone_contact').val(),
	          message_contact: $('#message_contact').val(),
	          verify_contact: $('#verify_contact').val(),
	          contact_checkBox: $('#contact_checkBox').val(),
	          source: window.location.pathname+window.location.search
	        },
	        success: function (r) {
	          if(r.trim() == 'true') {
	          	  $("#submit-contact").hide();
	              $('#contact-success-msg').show();



	          }
	        },
	        error: function (r) {
	          //console.log(r);
	          alert('We could\'nt save your information at this time. Please try again');
	        }
	      });
	   }
	    ga('send', 'event', { eventCategory: 'contact-form', eventAction: 'contact-form-submission', eventLabel: 'Submitted'});
	});
	});

// ======================================================== NEWSLETTER SUBMITION HANDLER ==============================================

	$(function () {

		$( "#newsletter" ).submit(function( event ) {
		  //alert( "Handler for .submit() called." );
		  event.preventDefault();
		});

		//Prevent the form from submittinmg
		$( "#contactform" ).submit(function( event ) {
		  //alert( "Handler for .submit() called." );
		  event.preventDefault();
		});

		$('#submit-newsletter').click(function () {
			//Validate the email address
			if(!validateEmail($('#email_newsletter').val())){
				$('#email_newsletter').addClass('error');
				return;
			}else {
				$('#email_newsletter').removeClass('error');
			}

			$.ajax({
				url: '/newsletter_subscribe',
				type: "POST",
				data: {
					email: $('#email_newsletter').val()
				},
				success: function (r) {
					if(r.trim() == 'true') {
			            //Show thank you message
			            $('#success_page').show();
			        }else {
			        	//console.log(r);
			        	alert("We coudn't record your email at this time. Please try again later. Thanks");
			        }
				},
				error: function (r) {
					//console.log(r);
			       	alert("We coudn't record your email at this time. Please try again later. Thanks");
				}
			});
		});
	});



// ======================================================== LANDING PAGE JS ==============================================//



	$(function () {
		if(mobilecheck() || (IEversion && IEversion <= 9) || !$('.landing-aside-control').length){
			return;
		}

		var fixRightBar = function () {
				var scrollPos = $(window).scrollTop();

			    var scrollLength = $('footer').offset().top - $('footer').height() - $('.landing-after-heading').outerHeight() - 40;

			    var footerHeight = $('footer').height() + $('.landing-after-heading').outerHeight() + 120;

				var bottom =  $(document).height() - $('#aside-col').outerHeight() - $('#aside-col').offset().top;

			    if(scrollPos > 455) {

			    	if (bottom < footerHeight) {
			    		//Fix it to the document
				    	$('#aside-col').css('top', scrollLength - $('#aside-col').outerHeight() + 'px');
				    }else{
				    	//Make it roll
				    	$('#aside-col').css('top', scrollPos - 455 + 'px');
				    }

				    if(scrollPos < $('#aside-col').offset().top) {
			    		//Make it roll
			    		$('#aside-col').css('top', scrollPos - 455 + 'px');
				    }

			    }else{
			    	$('#aside-col').removeAttr( "style" );
			    }
		}

		//fixRightBar();


		$(window).scroll(function() {
			//fixRightBar();
		});
	});


	//===========================================================Checkout==========================================================//

	/*$(function () {

		    checkoutStep = 1;

			var nextStep = function () {

				//move steps to number 2
				$("ul#progressbar.checkout-progress li:nth-child("+(checkoutStep+1)+")").addClass('active');

				//Hide current step
				$("#checkout-step-"+checkoutStep).addClass('fadeOut');
				setTimeout(function(){
					$("#checkout-step-"+checkoutStep).hide();
					$("#checkout-step-"+checkoutStep).removeClass('fadeOut');
				}, 300);

				//show next step
				$("#checkout-step-"+(checkoutStep+1)).addClass('fadeIn');
				setTimeout(function(){
					$("#checkout-step-"+(checkoutStep+1)).show();
					$("#checkout-step-"+(checkoutStep+1)).removeClass('fadeIn');

					checkoutStep = (checkoutStep+1);
					//Checkout backstretch
    				$("#checkout-section").backstretch("/assets/img/home_survey_bg_mini.jpg");
				}, 300);

			}


			var backStep = function () {
				//move steps to number 2
				$("ul#progressbar.checkout-progress li:nth-child("+(checkoutStep)+")").removeClass('active');

				//Hide current step
				$("#checkout-step-"+checkoutStep).addClass('fadeOut');
				setTimeout(function(){
					$("#checkout-step-"+checkoutStep).hide();
					$("#checkout-step-"+checkoutStep).removeClass('fadeOut');
				}, 300);


				//show next step
				$("#checkout-step-"+(checkoutStep-1)).addClass('fadeIn');
				setTimeout(function(){
					$("#checkout-step-"+(checkoutStep-1)).show();
					$("#checkout-step-"+(checkoutStep-1)).removeClass('fadeIn');

					checkoutStep = (checkoutStep-1);

					//Checkout backstretch
    				$("#checkout-section").backstretch("/assets/img/home_survey_bg_mini.jpg");
				}, 300);

			}

			$('.nextCheckout').click(nextStep);
			$('.backCheckout').click(backStep);
	})*/





	//===========================================================Angular==========================================================//


/*angular.module('myApp', [], function($interpolateProvider) {

    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

})

.controller('CheckOutCtrl', function($scope, $http){

	$scope.Student = {};

	$scope.checkOut = function(){
		//console.log ($scope.Student);
		$http.get("http://www.w3schools.com/website/Customers_JSON.php")
      	.success(function(data) {
      		$scope.obj = data;
        	console.log($scope.obj);
      	})
	}


	/*app.addPerson = function(person) {
        $http.post("http://localhost:3000/users", person)
          .success(function(data) {
            app.people = data;
          })
    }


})


*/


















