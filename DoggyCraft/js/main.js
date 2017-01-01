jQuery(document).ready(function($){
	//this is used for the video effect only
	if( $('.cd-bg-video-wrapper').length > 0 ) {
		var videoWrapper = $('.cd-bg-video-wrapper'),
			mq = window.getComputedStyle(document.querySelector('.cd-bg-video-wrapper'), '::after').getPropertyValue('content').replace(/"/g, "").replace(/'/g, "");
		if( mq == 'desktop' ) {
			// we are not on a mobile device 
			var	videoUrl = videoWrapper.data('video'),
				video = $('<video loop><source src="'+videoUrl+'.mp4" type="video/mp4" /><source src="'+videoUrl+'.webm" type="video/webm" /></video>');
			video.appendTo(videoWrapper);
			video.get(0).play();
		}
	}

	//Code to center the content div
	$box = $('.content');
	$ht = $box.height()+175;
	$win_ht = $(window).height();

	if ($win_ht>$ht) {
		$box.css({
			'left' : '50%',
			'top' : '50%',
			'margin-left' : -$box.width()/2 + 'px',
			'margin-top' : -$ht/2 + 'px'
		});
	}else{
		$box.css({
			'left' : '50%',
			'margin-left' : -$box.width()/2 + 'px',
			'margin-top' : '60px',
			'margin-bottom' : '60px'
		});
	}

 	//code for the cerlces Countdouwn
	$(".counter").TimeCircles({
	    "direction": "Clockwise",
	    "animation": "Tricks",
	    "bg_width": 0,
	    "fg_width": 0.01,
	    "circle_bg_color": "rgba(0, 0, 0, 1)",
	    "circle_bg_fill_color": "rgba(255, 255, 255, 0)",
	    "time": {
	        "Days": {
	            "text": "Days",
	            "color": "#BD0000",
	            "show": true
	        },
	        "Hours": {
	            "text": "Hrs",
	            "color": "#BD0000",
	            "show": true
	        },
	        "Minutes": {
	            "text": "Mins",
	            "color": "#BD0000",
	            "show": true
	        },
	        "Seconds": {
	            "text": "Secs",
	            "color": "#BD0000",
	            "show": true
	        }
	    }
	});
});
