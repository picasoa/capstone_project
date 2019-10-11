

$(document).ready(()=>{
	$('#searchForm button').mouseover(()=>{
		console.log("hello");
		$('#searchForm input').css({"width":"80%"});
	});
	$('#searchForm input').mouseout(()=>{
		setTimeout(()=>{
			$('#searchForm input').css({
				"width":"0%"
			});
		},5000);
	});
});