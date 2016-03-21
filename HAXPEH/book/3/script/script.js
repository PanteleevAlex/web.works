$(document).ready(function(){
$(".guess_box").each(function(){
	$(".guess_box").click(function(){
			$(".guess_box p").remove();
			<!--/*$("strong").remove();дописал сам вне урока и методом тыка выбрал именно эту сроку.*/-->
var discount = Math.floor((Math.random()*5) + 5);
var discount_msg = "<p>Your Discount is "+ discount +"%</p>";
$("p").append("<strong>Like me, for instance.</strong>");
$(".guess_box").append(discount_msg);
		alert(discount);
		$(this).append(discount_msg);

		$("div").unbind("click");/*Первая строка третьего задания страница 122.*/
		
			});//end function each
		});//end click function
	});//end doc ready
