$(document).ready(function(){

	

	$('.header .one .menu').click(function(){
		$('.header .one').fadeOut(0);
		$('.header .two').fadeIn(1000);

	});	
	$('.header .two .menu').click(function(){
		$('.header .two').fadeOut(0);
		$('.header .one').fadeIn(1000);
	});	
	$('.fa-search').click(function(){
		$('#search').toggle(500);
	});
	$('.posts .cmnt').click(function(){
		$(this).next().find('form').toggle(300);
	});
	// $('.posts .cmnt-box .e b').click(function(){
	// 	var s =$(this).attr('title');
	// 	$('.posts .cmnt-box .cmnts').append(s);
	// });
});

