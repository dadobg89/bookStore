$(document).ready(function() {
	if((window.location['search'] == "?mvcc=login&mvcm=login") || (window.location['search'] == "?mvcc=contact&mvcm=contact")){
		$('main').css( "width", "960" );
	};

	function validateEmail(email) {
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		return emailReg.test(email);
	}
	
	$('button:submit').attr("disabled", 'disabled');
	var error = [];

	$("input[type='text']").keyup(function(){

		
		$("#reg input[type='text']").each(function(index){
			if ($(this).val().length > 2) {
				$(this).css("border", "1px solid #2ED72E");
				error.splice($.inArray($(this), error), 1);
			} else {
				$(this).css("border", "none");
				error.push($(this));
			}
		})

		// Validacija email adrese
		if($(this).attr('name') == 'email'){
			var email = $(this).val();
			var res = validateEmail(email);
			console.log(res);
			if(res == false){
				$(this).css("border", "none");
				$('button:submit').attr("disabled", 'disabled');
				error.push($(this));
			} else if(res == true){
				$(this).css("border", "1px solid #2ED72E");
				$('button:submit').removeAttr("disabled")
			}
		};
		if (error.length == 0) {
			$('button:submit').removeAttr("disabled");
		} else {$('button:submit').attr("disabled", 'disabled');}
		console.log(error);
	});

			$('#tags').focus();
	$('#search input[name="search"]').keyup(function(){
		console.log(window.location['search']);
		var url = "http://127.0.0.1/zavrsni_rad/bookStoreOOP/ajax.php?srch_str=" +  $(this).val();
		$.ajax({
			url: url,
			type: "get",
			dataType: 'text'
		}).done(function(response, status, request){
			if($('.container-books').length == 1){
				$('.container-books').html(response);
			}
		});
	});


});



// window.location = '?mvcc=home&mvcm=home&search='+ $(this).val();

// var url = "http://127.0.0.1/zavrsni_rad/bookStoreOOP/ajax.php";

// data: {
// 	search: $(this).val()
// },