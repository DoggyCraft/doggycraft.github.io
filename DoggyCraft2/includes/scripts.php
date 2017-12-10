<script type="text/javascript">
window.onload=function() {
   doTime();
 }
function doTime() {

   now=new Date ();
   then=new Date ('jul,18,2011,18:00:00');

   difference=(now-then);

   days=Math.floor(difference/(60*60*1000*24)*1);
   years = Math.floor(days / 365);
   if (years > 1){ days = days - (years * 365)}
   hours=Math.floor((difference%(60*60*1000*24))/(60*60*1000)*1);
   mins=Math.floor(((difference%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
   secs=Math.floor((((difference%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);

   document.getElementById('timer').firstChild.nodeValue=

     'Der er nu g\u00E5et '+years+' \u00E5r, '+days+' dage, '+hours+' timer, '+mins+' minutter og '+secs+' sekunder siden serveren startede, for f\u00F8rste gang!';

   setTimeout('doTime()',1000);
 }
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script type="text/javascript">
//<![CDATA[
	$(window).load(function() { // makes sure the whole site is loaded
		$('#status').fadeOut(); // will first fade out the loading animation
		$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
		$('body').delay(350).css({'overflow':'visible'});
	})
//]]>
</script>


<script src="js/modernizr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> 


<script>
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>


<script type="text/javascript">
jQuery(document).ready(function(){ 
    $(function(){
        $('#slideshow h4:gt(0)').hide();
        setInterval(function(){
          $('#slideshow :first-child').fadeOut(2000)
             .next('h4').fadeIn(2000)
             .end().appendTo('#slideshow');}, 
          2000);
    });
});
</script>

<script src="js/TweenMax.min.js"></script>
<script src="js/ScrollToPlugin.min.js"></script>
<script>
$(function(){
	
	if($('body').is('.smooth-wheel-scroll-boolean-on')){
	
	var $window = $(window);		//Window object
	
	var scrollTime = 0.5;			//Scroll time
	var scrollDistance = 300;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll
		
	$window.on("mousewheel DOMMouseScroll", function(event){
		
		event.preventDefault();	
										
		var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
		var scrollTop = $window.scrollTop();
		var finalScroll = scrollTop - parseInt(delta*scrollDistance);
			
		TweenMax.to($window, scrollTime, {
			scrollTo : { y: finalScroll, autoKill:true },
				ease: Power1.easeOut,	//For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
				autoKill: true,
				overwrite: 5							
			});
					
	});
	
	}
	
});
</script>
<script>
var STATIC_BASE = '//cdn1.editmysite.com/';
var ASSETS_BASE = '//cdn2.editmysite.com/';
var STYLE_PREFIX = 'wsite';
</script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>
<script type="text/javascript" src="//cdn2.editmysite.com/js/lang/en/stl.js?buildTime=1507071529&"></script>
<script src="//cdn2.editmysite.com/js/site/main.js?buildTime=1507071529"></script><script type="text/javascript">_W.configDomain = "www.weebly.com";</script><script>_W.relinquish && _W.relinquish()</script>
<script type="text/javascript" src="//cdn2.editmysite.com/js/lang/en/stl.js?buildTime=1507071529&"></script><script> _W.themePlugins = [];</script><script type="text/javascript"> _W.recaptchaUrl = "https://www.google.com/recaptcha/api.js"; </script><script type="text/javascript"><!--
	
	
	function initFlyouts(){
		initPublishedFlyoutMenus(
			[{"id":"188965217289229515","title":"Home","url":"index.html","target":"","nav_menu":false,"nonclickable":false},{"id":"679365790622558698","title":"Donate","url":"donate.html","target":"","nav_menu":false,"nonclickable":true},{"id":"368895418739417933","title":"Vote","url":"vote.html","target":"","nav_menu":false,"nonclickable":false},{"id":"720592452565660735","title":"Community","url":"community.html","target":"","nav_menu":false,"nonclickable":true},{"id":"913963290966559378","title":"Server","url":"server.html","target":"","nav_menu":false,"nonclickable":true},{"id":"573124620381714655","title":"Blog","url":"blog.html","target":"","nav_menu":false,"nonclickable":false},{"id":"123506163707940201","title":"About","url":"about.html","target":"","nav_menu":false,"nonclickable":false}],
			"188965217289229515",
			'',
			'active',
			false,
			{"navigation\/item":"<li {{#id}}id=\"{{id}}\"{{\/id}} class=\"wsite-menu-item-wrap\">\n\t<a\n\t\t{{^nonclickable}}\n\t\t\t{{^nav_menu}}\n\t\t\t\thref=\"{{url}}\"\n\t\t\t{{\/nav_menu}}\n\t\t{{\/nonclickable}}\n\t\t{{#target}}\n\t\t\ttarget=\"{{target}}\"\n\t\t{{\/target}}\n\t\t{{#membership_required}}\n\t\t\tdata-membership-required=\"{{.}}\"\n\t\t{{\/membership_required}}\n\t\tclass=\"wsite-menu-item\"\n\t\t>\n\t\t{{{title_html}}}\n\t<\/a>\n\t{{#has_children}}{{> navigation\/flyout\/list}}{{\/has_children}}\n<\/li>\n","navigation\/flyout\/list":"<div class=\"wsite-menu-wrap\" style=\"display:none\">\n\t<ul class=\"wsite-menu\">\n\t\t{{#children}}{{> navigation\/flyout\/item}}{{\/children}}\n\t<\/ul>\n<\/div>\n","navigation\/flyout\/item":"<li {{#id}}id=\"{{id}}\"{{\/id}}\n\tclass=\"wsite-menu-subitem-wrap {{#is_current}}wsite-nav-current{{\/is_current}}\"\n\t>\n\t<a\n\t\t{{^nonclickable}}\n\t\t\t{{^nav_menu}}\n\t\t\t\thref=\"{{url}}\"\n\t\t\t{{\/nav_menu}}\n\t\t{{\/nonclickable}}\n\t\t{{#target}}\n\t\t\ttarget=\"{{target}}\"\n\t\t{{\/target}}\n\t\tclass=\"wsite-menu-subitem\"\n\t\t>\n\t\t<span class=\"wsite-menu-title\">\n\t\t\t{{{title_html}}}\n\t\t<\/span>{{#has_children}}<span class=\"wsite-menu-arrow\">&gt;<\/span>{{\/has_children}}\n\t<\/a>\n\t{{#has_children}}{{> navigation\/flyout\/list}}{{\/has_children}}\n<\/li>\n"},
			{}
		)
	}
//-->
</script>