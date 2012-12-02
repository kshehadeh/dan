$(document).ready(function() {
	
	/* Scroll event handler */
    $(window).bind('scroll',function(e){
        alert('here');
        var scrolled = $(window).scrollTop();
       	$('#parallax-bg1').css('top',(0-(scrolled*1))+'px');
       	$('#parallax-bg2').css('top',(0-(scrolled*1.6))+'px');
       	$('#parallax-charliebrown').css('top',(0-(scrolled*1.43))+'px');
       	$('#parallax-boat').css('top',(0-(scrolled*1.43))+'px');
       	$('#parallax-bg3').css('top',(0-(scrolled*1))+'px');
    });
});
