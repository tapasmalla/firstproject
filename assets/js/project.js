$(document).ready(function(){

	$(".btn_register").click(function(){
		// alert(1);
		rec = $('#register_form').serialize();
		// console.log(rec);

		$.post("../controllers/register_action.php", rec, function(response){
			console.log(response);
			$(".errordiv").html(response);
		})


	})

	$(".btn_login").click(function(){
		// alert(1);
		rec = $("#login_form").serialize();
		// console.log(rec);

		$.post("..//controllers/login_action.php", rec, function(response){
			console.log(response);
			$(".errordiv").html(response);
		})
	})
})