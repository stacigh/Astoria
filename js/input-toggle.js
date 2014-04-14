// CSS3 & jQuery Expanding & Collapsing Inline Inputs by Stacey Lane
$(document).ready(function() {
	// NEWSLETTER CONTROLS
    $('#wrapper-newsletter input[type=text]').addClass("newsletter-shrunken-state"); 
    $('#wrapper-newsletter input[type=text]').focus(function() {
        $('#wrapper-newsletter input[type=text]').removeClass('newsletter-resting-state');
        $(this).removeClass("newsletter-shrunken-state");
        if (this.value == this.defaultValue) {
            this.value = '';
        }
        if (this.value != this.defaultValue) {
            this.select();
        }
    });
	// NEWSLETTER CONTROLS
    $('#wrapper-newsletter input[type=text]').blur(function() {
        $('#wrapper-newsletter input[type=text]').addClass('newsletter-resting-state');
        $(this).addClass("newsletter-shrunken-state");
        if (this.value == '') {
            this.value = (this.defaultValue ? this.defaultValue : '');
        }
    });
	// PRAYER REQUEST CONTROLS	
    $('#wrapper-prayer-request input[type=text]').addClass("prayer-request-shrunken-state"); 
    $('#wrapper-prayer-request input[type=text]').focus(function() {
        $('#wrapper-prayer-request input[type=text]').removeClass('prayer-request-resting-state');
        $(this).removeClass("prayer-request-shrunken-state");
        if (this.value == this.defaultValue) {
            this.value = '';
        }
        if (this.value != this.defaultValue) {
            this.select();
        }
    });
	// PRAYER REQUEST CONTROLS	
    $('#wrapper-prayer-request input[type=text]').blur(function() {
        $('#wrapper-prayer-request input[type=text]').addClass('prayer-request-resting-state');
        $(this).addClass("prayer-request-shrunken-state");
        if (this.value == '') {
            this.value = (this.defaultValue ? this.defaultValue : '');
        }
    });	
	//SIDEBAR SEARCH CONTROLS 
	$('#search').focus(function(){
        if (this.value == this.defaultValue) {
            this.value = '';
        }
        if (this.value != this.defaultValue) {
            this.select();
        }			
	});
	$('#search').blur(function(){
        if (this.value == '') {
            this.value = (this.defaultValue ? this.defaultValue : '');
        }		
	});
	
	
	//NEWSLETTER BUTTON - VALIDATE AND PROCESS FORM ON CLICK
	$(function() {
		$("input#newsletter-submit").click(function(){
			//Validation & Processing
			var newsletterName = $("input#newsletter-name").val();
				if (newsletterName == "") {
					$("input#newsletter-name").toggleClass("error");
					return false;
				}
			
			var newsletterSurname = $("input#newsletter-surname").val();
				if (newsletterSurname == "") {
					$("input#newsletter-name").toggleClass("error");
					return false;
				}
				
			var newsletterEmail = $("input#newsletter-email").val();
				if (newsletterEmail == "") {
					$("input#newsletter-email").toggleClass("error");
					return false;
				}
				
			var dataString = 'name=' + newsletterName + '&surname=' + newsletterSurname + '&email=' + newsletterEmail;
			//alert (dataString);return false;
			$.ajax =({
				type: "POST",
				url: "bin/process.php",
				data: dataString,
				success: function() {
					$('#wrapper-newsletter').html("<div id='message'></div>");
					$('#message').html("<h2>Submitted!</h2>")
					.append("<p>We will be in contact soon.</p>")
					.hide()
					.fadeIn(1500, function(){
						$('#message').append("<img id='checkmark' src='images/check.png' />");
					});
				}
			});
			return false;
		});
	});
	
	
});