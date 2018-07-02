$(document).ready(function(){

	$(".btn_register").click(function(){
		// alert(1);
		rec = $('#register_form').serialize();
		// console.log(rec);

		$.post("../controllers/register_action.php", rec, function(response){
			// console.log(response);
			if(response == "ok"){
				$(".errordiv").html("Please Verify in Your Mail");
				$("#register_form")[0].reset();
			}
			else{
			$(".errordiv").html(response);
			}
		})


	});

	$(".btn_login").click(function(){
		// alert(1);
		rec = $("#login_form").serialize();
		// console.log(rec);

		$.post("..//controllers/login_action.php", rec, function(response){
			console.log(response);
			if(response == "ok"){
				window.location.href="index.php";
			}
			else{
			$(".errordiv").html(response);
			}
		})
	});

	$(".btn_changepass").click(function(){
		// alert(1);
		rec = $("#changepass_form").serialize();
		// console.log(rec);

		$.ajax({
			type:'post',
			data:rec,
			url:'..//controllers/changepass_action.php',
			success:function(result){
				// console.log(result);
				$(".errordiv").html(result);

				if(result == "ok"){
					$(".errordiv").html("Your Password successfuly Changed");
					$("#changepass_form")[0].reset();
					$(".form-control").val("");
					
				}
				
			},
			error(err){
				$(".errordiv").html(err);

			}
		})
	});

	$(".btn_addhotel").click(function(){
		// alert(1)

		rec = $("#addhotel_form").serialize();
		// console.log(rec);

		$.ajax({
			type:"post",
			data:rec,
			url:"..//controllers/addhotel_action.php",
			success:function(result){
				// console.log(result);
				$(".errordiv").html(result);
			}
		})
	});

	$(".btn_addbranch").click(function(){
		// alert(1)

		rec = $("#branch_form").serialize();
		// console.log(rec);

		$.ajax({
			type:"post",
			data:rec,
			url:"..//controllers/addbranch_action.php",
			success:function(result){
				console.log(result);
				$(".errordiv").html(result);
			}
		})
	});
})