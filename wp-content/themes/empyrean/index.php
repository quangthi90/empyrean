<?php get_header(); ?>
	<div class="main-container">         
	    <div class="main wrapper clearfix">
		    <div id="videoPlayer">
          <div id="video-close" class="invisible">
            <span class="close-trigger" title="Close video"></span>
          </div>
		    	<div id="ytplayer">		    		
		    	</div>
		    </div>
	    </div> <!-- #main -->
	</div> <!-- #main-container -->
	<script>
		var videoPlayer;
      	function initVideoPlay(){
    			var tag = document.createElement('script');
    	      	tag.src = "https://www.youtube.com/iframe_api";
    	      	var firstScriptTag = document.getElementsByTagName('script')[0];
    	      	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    		}
      	function onYouTubeIframeAPIReady() {
        	videoPlayer = new YT.Player('ytplayer', {
        		height: '390',
          		width: '640',
          		videoId: 'k_h4AYBZ_4Q',
          		events: {
            		'onReady': onPlayerReady
          		},
          		playerVars: {
          			autoplay: 1,
          			enablejsapi: 1,
          			loop: 1,
                //showinfo : 0,
                autohide : 1,
                modestbranding: 0,
          			listType: 'playlist',
          			playlist: 'k_h4AYBZ_4Q'
          		}
        	});
      	}
      	function onPlayerReady(e) {
        	e.target.playVideo();
          jQuery("#video-close").removeClass("invisible");
          jQuery("#video-close .close-trigger").on("click", function(){
            jQuery("#videoPlayer").remove();
          });
      	}

      	initVideoPlay();
    </script>
<?php get_footer(); ?>
