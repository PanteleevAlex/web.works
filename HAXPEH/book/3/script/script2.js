$(document).ready(function(){
	$(".guess_box").click(function(){
var discount = Math.floor((Math.random()*5) + 5);
var discount_msg = "<p>Your Discount is "+ discount +"%</p>";
$("this").append(discount);
$(".guess_box").each(function(){

		$(this).unbind("click");
		
			});//end function each
		});//end click function
	});//end doc ready
