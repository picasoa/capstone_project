$(document).ready(function(){
$("#menu").toggle();
$("#hamburger").click(function(){
	$("#menu").toggle(300);
	
});
$("#searchBy").change(function(){
	var val = $("#searchBy").val();
	if(val === "regNo"){
		$("#regNo").attr("type","text");
		$("#name").attr("type","hidden");
		$("#email").attr("type","hidden");
		$("#usertype2").css("display","none");	
	}
	else if(val === "name")
	{
		$("#name").attr("type","text");	
		$("#regNo").attr("type","hidden");
		$("#email").attr("type","hidden");
		$("#usertype2").css("display","none");
	}
	else if(val === "email"){
		$("#email").attr("type","email");
		$("#regNo").attr("type","hidden");
		$("#name").attr("type","hidden");
		$("#usertype2").css("display","none");
	}
	else{
		$("#usertype2").css("display","inline");
		$("#regNo").attr("type","hidden");
		$("#name").attr("type","hidden");
		$("#email").attr("type","hidden");
	}
});



});