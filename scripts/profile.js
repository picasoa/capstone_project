$(document).ready(function(){

$('.bar').click(function(){
  $('.icon')
    .toggleClass('menu')
    .toggleClass('close');
    var c=$('.icon').attr('class');
    if(c=="icon menu"){
    $('.search').css({'color':'black'});
        $('#svg').fadeToggle(200);
        $('.advice').fadeToggle(200);
        $('.cover_pic').css({'filter':'blur(0)'});
    }
    else{
    $('.search').css({'color':'white'});
        $('#svg').fadeToggle(200);
        $('.advice').fadeToggle(200);
        $('.cover_pic').css({'filter':'blur(8px)'});
    }
    $('#main .menu_box').fadeToggle(200);

});	


	$('.next').click(function(){
		$('.back').show(200);

		$('.info').animate({'left':''+-620+'px'},500);
		$('.profile_pic_box').fadeOut(200);
		
		$('.profile_info').delay(150).animate({"width":"100%"});
	});
	$('.back').click(function(){
		$('.back').hide(200);
		$('.profile_pic_box').fadeIn(200);
		$('.profile_info').css({"width":"74%"});
		$('.info').animate({'left':'0px'},500);
	});
	
});