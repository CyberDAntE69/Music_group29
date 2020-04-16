$(document).ready(function(){
	$('#verify_ajax').click(function(){

	$.ajax({
		 
		 url:'web_services/register.php'.
		 success:function(){
		 	alert("hey");
		 }
	});

    return false;
});
















});
