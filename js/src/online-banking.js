

// online banking controls
jQuery(document).ready(function($){

	$('.online-banking-form').submit(function(e){

		// stop the form from submitting
		e.preventDefault();

		// get the user id
		var userid = $(this).find('.userid').val();

		// redirect to the login form
		location.href = "https://gbs.onlinecu.com/tpscu/#/?userid=" + userid;
	});

});

