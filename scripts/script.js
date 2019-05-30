$(document).ready(function() {
	$('.jump_headings ul li a').click(function() {
		var check= $(this).attr('class');
			$('.jump_headings ul li a').removeClass("active");
			$(this).addClass('active');
		 var id = $(this).attr('href');
		 var $id = $(id);
    if ($id.length === 0) {
        return;
    }
		 var pos = $id.offset().top;
    // animated top scrolling
    $('body, html').animate({scrollTop: pos},1500);
	});



	$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 800) {
        	$('.jump_headings').css({'position':'fixed','top':'0px'});
        	
    } else  {
        	$('.jump_headings').css({'position':'relative'});
    }
    var scrolltop= $(window).scrollTop();
        	var docheight= $(document).height();
        	var winheight= $(window).height();
        	var scrollprecent=(scrolltop)/(docheight - winheight);
        	var scrollprecentround=Math.round(scrollprecent*100);
        	var widthper = (scrollprecentround+'%'); 
        	$('.scrollindi').animate({'width': widthper},0);
});

	$('.slider,#insight,#courses,#GT,#FTD,footer').click(function() {
		$('.jump_headings ul li a').removeClass("active");
		
	});

	$("#courses").on('mouseover','.container .column ',function(){
			$(this).addClass('act').siblings().removeClass('act')
		});
        setTimeOut('slider()',2000);
     function slider(){
       alert('s');
     }   

});