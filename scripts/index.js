$(document).ready(function(){
    
$(".searchBy").change(function(){
	var val = $(".searchBy").val();
	if(val === "regNo"){
		$("#regNo").attr("type","text");
		$("#name").attr("type","hidden");
		$("#email").attr("type","hidden");	
	}
	else if(val === "name")
	{
		$("#name").attr("type","text");	
		$("#regNo").attr("type","hidden");
		$("#email").attr("type","hidden");
	}
	else if(val === "email"){
		$("#email").attr("type","email");
		$("#regNo").attr("type","hidden");
		$("#name").attr("type","hidden");
	}
	else{
		$("#regNo").attr("type","hidden");
		$("#name").attr("type","hidden");
		$("#email").attr("type","hidden");
	}
});
        
$(".searchBy1").change(function(){
    console.log("hello");
	var val = $(".searchBy1").val();
    console.log(val);
	if(val === "regNo"){
		$("#regNo1").attr("type","text");
		$("#name1").attr("type","hidden");
		$("#email1").attr("type","hidden");	
	}
	else if(val === "name")
	{
		$("#name1").attr("type","text");	
		$("#regNo1").attr("type","hidden");
		$("#email1").attr("type","hidden");
	}
	else if(val === "email"){
		$("#email1").attr("type","email");
		$("#regNo1").attr("type","hidden");
		$("#name1").attr("type","hidden");
	}
	else{
		$("#regNo1").attr("type","hidden");
		$("#name1").attr("type","hidden");
		$("#email1").attr("type","hidden");
	}
});

$(".toggle").click(()=>{
    var val= $("#menu").width();
    if(val<45){
        $("#menu").css({"width":"15%","transition":"0.5s"});
        $(" p .toggle").css({"transform":"rotate(180deg)","margin":"0.5em 0em 0em 1.8em","transition":"0.5s"});
        $("ul li a i").css({"visibility":"visible","transition":"0.5s"});
    $("#admindetail").css({"width:":"100%","display":"flex","transition":"0.5s"});
     $("#propic").css({"height":"100px","width":"100px","margin-left":"8%","transition":"0.5s"});
        $("i + span").css({"display":"inline"});
        $("#menu-list li").css({"text-align":"left"});
        
    }
    else{
        $("#menu").css({"width":"5.5%"});
        $(".toggle").css({"transform":"rotate(0deg)","margin":"7em 0em 0em 0.2em","transition":"0.5s"});
         $("#propic").css({"height":"50px","width":"50px","margin-left":"5%","transition":"0.5s"});$("#admindetail").css({"width:":"0%","display":"none","transition":"0.5s"});
        $("i + span").css({"display":"none"});
        
    }
});
});