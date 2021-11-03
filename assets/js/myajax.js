toastr.options = {
	closeButton: false,
	debug: false,
	newestOnTop: false,
	progressBar: true,
	positionClass: "toast-top-center",
	preventDuplicates: true,
	onclick: null,
	showDuration: "300",
	hideDuration: "1000",
	timeOut: "5000",
	extendedTimeOut: "1000",
	showEasing: "swing",
	hideEasing: "linear",
	showMethod: "fadeIn",
	hideMethod: "fadeOut"
};

$(document).ready(function(e) {
	// =============  ajax signup here ==================
	$(".signup-btn").click(function(e) {
		e.preventDefault();
		var user = $(".username").val();
		var email = $(".email").val();
		var pass = $("#password").val();
		var pass2 = $(".password1").val();
		var ans = $(".answer").val();

		if ($.trim(user) == false) {
			toastr.warning("Please fill your username!");
			$("#username").focus();
			$("#username").addClass("is-invalid");
		} else if ($.trim(email) == false) {
			$("#email").focus();
			$("#email").addClass("is-invalid");
			$("#username").removeClass("is-invalid");
			$("#username").addClass("is-valid");
			toastr.warning("Please fill your email correctly!");
		} else if (email.includes("@") == false) {
			$("#email").focus();
			$("#email").addClass("is-invalid");
			$("#username").removeClass("is-invalid");
			$("#username").addClass("is-valid");
			toastr.warning("Please include '@' in your email!");
		} else if ($.trim(pass).length < 8) {
			$("#password").focus();
			$("#password").addClass("is-invalid");
			$("#email").removeClass("is-invalid");
			$("#email").addClass("is-valid");
			toastr.warning("Please enter 8 or more characters!");
		} else if ($.trim(pass2) != $.trim(pass)) {
			$("#password1").focus();
			$("#password1").addClass("is-invalid");
			$("#password").removeClass("is-invalid");
			$("#password").addClass("is-valid");
			toastr.warning("Password did not match!");
		} else if ($.trim(ans) == false) {
			$("#answer").focus();
			$("#answer").addClass("is-invalid");
			$("#password1").removeClass("is-invalid");
			$("#password1").addClass("is-valid");	
			toastr.warning("Please fill your secret answer!");
		} else {
			$.ajax({
				type: "POST",
				url: "signup-submit",
				data: {
					username: user,
					email: email,
					password: pass,
					password1: pass2,
					answer: ans
				},
				dataType: "json",
				cache: false,
				success: function(response) {
					if (response.success == true) {
						window.location = response.message;
					} else {
						if (response.message.includes("Username")) {
							toastr.error(response.message);
							$("#username").addClass("is-invalid");
						} else {
							toastr.error(response.message);
						}
					}
				}
			});
			return false;
		}
	});

	// =============  ajax login here ==================
	$(".login-btn").click(function(e) {
		e.preventDefault();
		var user = $(".username").val();
		var pass = $("#password").val();
		var rem = $(".remember").val();

		if ($.trim(user) == false) {
			toastr.warning("Please enter your username!");
			$("#username").focus();
			$("#username").addClass("is-invalid");
		} else if ($.trim(pass) == false) {
			$("#password").focus();
			$("#username").removeClass("is-invalid");
			$("#username").addClass("is-valid");
			toastr.warning("Please enter you password!");
		} else {
			$.ajax({
				type: "POST",
				url: "login-user",
				data: {
					username: user,
					password: pass,
					remember: rem
				},
				dataType: "json",
				cache: false,
				success: function(response) {
					if (response.success == true) {
						window.location = response.message;
					} else {
						toastr.error(response.message);
						$("#username").removeClass("is-valid");
						$("#username").addClass("is-invalid");
						$("#password").addClass("is-invalid");
					}
				}
			});
			if ($('#remember').is(':checked')) {
				var username = $('#vUsername').val();
				var password = $('#vPassword').val();
				// set cookies to expire in 14 days
				$.cookie('username', username, { expires: 14 });
				$.cookie('password', password, { expires: 14 });
				$.cookie('remember', true, { expires: 14 });                
				}
				else
				{
					// reset cookies
					$.cookie('username', null);
					$.cookie('password', null);
					$.cookie('remember', null);
				}

			return false;
		}
	});

	// ============= ajax reset your password here ==================
	$(".forgot-btn").click(function(e) {
		e.preventDefault();
		var user = $(".username").val();
		var email = $(".email").val();
		var ans = $(".answer").val();
		var pass = $("#password").val();

		if ($.trim(user) == false) {
			toastr.warning("Please enter your username!");
			$("#username").focus();
			$("#username").addClass("is-invalid");
		} else if ($.trim(email) == false) {
			$("#email").focus();
			$("#email").addClass("is-invalid");
			$("#username").removeClass("is-invalid");
			$("#username").addClass("is-valid");
			toastr.warning("Please enter your email!");
		} else if (email.includes("@") == false) {
			$("#email").focus();
			$("#email").addClass("is-invalid");
			$("#username").removeClass("is-invalid");
			$("#username").addClass("is-valid");
			toastr.warning("Please include '@' in your email!");
		} else if ($.trim(ans) == false) {
			$("#answer").focus();
			$("#answer").addClass("is-invalid");
			$("#email").removeClass("is-invalid");
			$("#email").addClass("is-valid");
			toastr.warning("Please enter your answer!");
		} else if ($.trim(pass).length < 8) {
			$("#password").focus();
			$("#password").addClass("is-invalid");
			$("#answer").removeClass("is-invalid");
			$("#answer").addClass("is-valid");
			toastr.warning("Please enter 8 or more characters!");
		} else {
			$.ajax({
				type: "POST",
				url: "forgot-submit",
				data: {
					username: user,
					email: email,
					answer: ans,
					password: pass
				},
				dataType: "json",
				cache: false,
				success: function(response) {
					if (response.success == true) {
						window.location = response.message;
					} else {
						toastr.error(response.message);
						$("#username").removeClass("is-valid");
						$("#username").addClass("is-invalid");
						$("#password").addClass("is-invalid");
						$("#email").addClass("is-invalid");
						$("#answer").addClass("is-invalid");
					}
				
				}
			});
			return false;
		}
		
	});

	//  ============= ajax post here ==================

	$("#gotrip-post").click(function(e) {
		e.preventDefault();
		var formdata = new FormData(document.getElementById("post-form"));
		var post = $(".post").val();
		var img_post = $(".gotrip-img").val();
		if ($.trim(post) == false && $.trim(img_post) == false) {
			toastr.warning("Please write something!");
		} else {
			$.ajax({
				type: "POST",
				url: "post-submit",
				dataType: "json",
				data: formdata,
				processData: false,
				contentType: false,
				cache: false,
				success: function(response) {
					toastr.success(response.messages);
					$("#post-form")[0].reset();
					setTimeout(function() {
						window.location.reload(1);
					}, 2000);
				}
			});
		}
		return false;
	});



	//  ============= ajax change password here ==================

	$("#change_pass").click(function(e) {
		e.preventDefault();

		var pass1 = $("#inputpass").val();
		var pass2 = $("#inputconf").val();

		if ($.trim(pass1) == false && $.trim(pass2) == false) {
			toastr.warning("Please enter something!");
		}else if (pass1 != pass2) {
			toastr.warning("Password did not match!");
		} else {
			$.ajax({
				type: "POST",
				url: "change-password",
				dataType: "json",
				data: {
					password1:pass1,
					password2:pass2
				},
				cache: false,
				success: function(response) {
					if(response.success){
						toastr.success(response.message);
						$('#change-password').modal('hide');

						setTimeout(function() {
							window.location = 'logout';
						}, 4000);
					
					}else{
						toastr.error(response.message);
					}
				}
			});
		}
		return false;
	});

	var x = window.matchMedia("(max-width:1024px)");
	``
	myfunction(x);
	x.addListenerm(yfunction);

	var y= window.matchMedia("(max-width:375px)");

	myfunction1(y);
	y.addListener(myfunction1);

});

