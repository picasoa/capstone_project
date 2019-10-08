$(document).ready(function() {
    $('svg').click(function(){
    $('#svg').css({'background':'rgba(0,0,0,0.2)','padding':'8em','transition':'background 2s, padding 1s','z-index':'1'});
        $('head').append("<style type='text/css'>.header::before{content: 'Different by Nature';font-size: 3.5em;position:absolute;z-index: 2;color: rgba(255,255,255,1);top: 80%;left: 27%;    }.header::after{content:'Simply';font-size:5em;position:absolute;z-index:1;color:rgba(255,255,255,1);bottom: 15%;left: 27%;}</style>");
    });
     $('#nav').toggle(()=>{
    });
    $('.arrow').click(()=>{
       $('#nav').toggle(()=>{
    }); 
        $('.arrow').css({'transform':'rotate(180deg)'});
    });
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

	$("#courses").on('mouseover','.containe .column ',function(){
			$(this).addClass('act').siblings().removeClass('act')
		});
        setTimeOut('slider()',2000);
     function slider(){
       alert('s');
     }   

});