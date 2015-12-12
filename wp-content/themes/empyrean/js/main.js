var App = {};
(function($){
	var DEFAULT_LANGUAGE_COOKIE_NAME = "language";
	var BG_INDEX_COOKIE_NAME = "bgi";
	var AUDIO_COOKIE_NAME = "aut";

	App.VideoStarted = function(){
		if(!isMusicOn()) return;

		var player = getPlayer();
		if(player && !player.paused){
			player.pause();
		}
	};

	App.VideoStopped = function(){
		if(!isMusicOn()) return;
		
		var player = getPlayer();
		if(player && player.paused){
			player.play();
		}
	};

	App.SetCookie = function(cname, cvalue, exdays) {
	    var d = new Date();
	    d.setTime(d.getTime() + (exdays*24*60*60*1000));
	    var expires = "expires="+d.toUTCString();
	    document.cookie = cname + "=" + cvalue + "; " + expires;
	};

	App.GetCookie = function(cname) {
	    var name = cname + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0; i<ca.length; i++) {
	        var c = ca[i];
	        while (c.charAt(0) == ' ') c = c.substring(1);
	        if (c.indexOf(name) == 0) 
	        	return c.substring(name.length,c.length);
	    }
	    return "";
	};

	$(document).ready(init);
	function init(){
		if($(".office-info.hidden").length > 0){
			$(".office-info").removeClass("hidden");
		}

		var musicTrigger = $(".music-trigger");
		var controlpanel = $(".controlpanel");	
		var languageControl = $(".language-control");
		var menu = $(".menu");
		var overlay = $(".overlay-main");
		var controlpanelTrigger = controlpanel.find(".trigger");
		var timerControlPanel = 0;

		musicTrigger.on("click", function(e){
			if($("#videoPlayer").length > 0) {
				toggleMusicForVideo(musicTrigger);
			}else{
				toggleMusic(musicTrigger);
			}		
		});

		controlpanelTrigger.click(function(){
			clearTimeout(timerControlPanel);
			if(controlpanel.hasClass("show")){
				controlpanel.removeClass("show");
				timerControlPanel = setTimeout(function(){
					controlpanel.addClass("show");	
				}, 2000);
			}else{
				controlpanel.addClass("show");	
			}
		});

		languageControl.find(".language-trigger").on("click", function(e){
			if(menu.hasClass("show")){
				menu.removeClass("show");
			}
			if(!languageControl.hasClass("show")){
				overlay.removeClass("hidden");
				languageControl.addClass("show");
			}
		});
		languageControl.find(".language-cancel").on("click", function(e){
			e.preventDefault();
			if(languageControl.hasClass("show")){
				overlay.addClass("hidden");
				languageControl.removeClass("show");
			}
		});
		menu.find(".menu-toogle").on("click", function(){
			if(languageControl.hasClass("show")){				
				languageControl.removeClass("show");
			}
			menu.toggleClass("show");
		});
		overlay.on("click", function(){
			overlay.addClass("hidden");
			if(languageControl.hasClass("show")){
				languageControl.removeClass("show");
			}
			if(menu.hasClass("show")){				
				menu.removeClass("show");
			}
		});

		if($("#player-trigger").length > 0){
			$("#player-trigger").magnificPopup({
			  	items: {
				     src: 'https://www.youtube.com/watch?v=k_h4AYBZ_4Q'
			     	},
			  	type: 'iframe',
			  	mainClass: 'mfp-fade',
	          	removalDelay: 160,
	          	preloader: false,
	          	callbacks: {
				    open: function() {
				    	App.VideoStarted();
				    },
				    close: function() {
				    	App.VideoStopped();
				    }
			   	},
			  	iframe: {
			    	markup: '<div class="mfp-iframe-scaler">'+
		            		'<div class="mfp-close"></div>'+
		            		'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
		            		'</div>', 
			        patterns: {
			            youtube: {
				            index: 'youtube.com/', 
				            id: 'v=', 
				            src: '//www.youtube.com/embed/%id%?autoplay=1' 
				        }
				    },
					srcAction: 'iframe_src', 
			    }
			});
		}        

        //Background slides
        doBGImages();

		//Window events
		$(window).on("backstretch.after", function (e, instance, index) {
			var player = getPlayer();
			if(player){
				App.SetCookie(AUDIO_COOKIE_NAME, player.currentTime, 1);
			}
		  	App.SetCookie(BG_INDEX_COOKIE_NAME, index, 1);
		});	

		setTimeout(function(){
			if($("#videoPlayer").length > 0) {
				toggleMusicForVideo(musicTrigger);
			}else{
				toggleMusic(musicTrigger);
				seekAudio();
			}
		}, 500);
	}

	function toggleMusic(trigger){
		var player = getPlayer();		
		if(!player) {
			trigger.toggleClass('off');	
			return;
		};		
		
		if(player.paused){
			player.play();
		}else{
			player.pause();
		}

		if(player.paused) {
			trigger.addClass("off");
		}else{			
			trigger.removeClass("off");
		}
	}

	function toggleMusicForVideo(trigger, forceStart){
		var vplayer = window.videoPlayer;
		if(!vplayer || !vplayer.isMuted) return;

		var state = vplayer.getPlayerState ? vplayer.getPlayerState() : 1;
		if(state != 1){
			vplayer.playVideo();
		}		

		if(vplayer.isMuted()) {
			vplayer.unMute();
		}else{
			vplayer.mute();
		}	
		
		if(vplayer.isMuted()){
			trigger.removeClass("off");
		}else{
			trigger.addClass("off");
		}
	}

	function changeLanguage(code){
		code = code || 'EN';
		var existing = App.GetCookie(DEFAULT_LANGUAGE_COOKIE_NAME);

		if(existing != code){
			App.SetCookie(DEFAULT_LANGUAGE_COOKIE_NAME, code, 30);
			window.location.reload();
		}
	}

	function detectMobile(){
		var userAgent = navigator.userAgent||navigator.vendor||window.opera;
		return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(userAgent)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(userAgent.substr(0,4));
	}

	function getPlayer(){
		return document.getElementById("music-background");
	}

	function isMusicOn(){
		return !$(".music-trigger").hasClass("off");
	}

	function doBGImages(){
		var savedIndex = parseInt(App.GetCookie(BG_INDEX_COOKIE_NAME));
		savedIndex = savedIndex || 0;

		var tempImages = [
		    window.THEME_URL + "img/background/singapore_mbs_01.jpg"
		    , window.THEME_URL + "img/background/singapore_mbs_02.jpg"
		    , window.THEME_URL + "img/background/singapore_mbs_03.jpg"
		    , window.THEME_URL + "img/background/singapore_mbs_04.jpg"
		    , window.THEME_URL + "img/background/singapore_mbs_05.jpg"
		    , window.THEME_URL + "img/background/singapore_mbs_06.jpg"
		    , window.THEME_URL + "img/background/singapore_mbs_07.jpg"
		    , window.THEME_URL + "img/background/singapore_mbs_08.jpg"
		    , window.THEME_URL + "img/background/singapore_mbs_09.jpg"
		    , window.THEME_URL + "img/background/singapore_mbs_10.jpg"
		    , window.THEME_URL + "img/background/vietnam_hcm_bitexco_financial_centre_01.jpg"
		    , window.THEME_URL + "img/background/vietnam_hcm_bitexco_financial_centre_02.jpg"
		    , window.THEME_URL + "img/background/china_shanghai_01.jpg"
		    , window.THEME_URL +  "img/background/china_shanghai_02.jpg"
		    , window.THEME_URL +  "img/background/idonesia_jakarta.jpg"
		    , window.THEME_URL +  "img/background/japan_tokyo_1.jpg"
		    , window.THEME_URL + "img/background/japan_tokyo_2.jpg"
		    , window.THEME_URL + "img/background/korea_seoul1.jpg"
		    , window.THEME_URL + "img/background/korea_seoul2.jpg"		    
		    , window.THEME_URL + "img/background/yangon_03.jpg"
		    , window.THEME_URL + "img/background/yangon_04.jpg"		    
		];
		
		var images = [];
		if(savedIndex <= 0){
			images = tempImages;
		}else{			
			for (var i = savedIndex; i < tempImages.length; i++) {
				images.push(tempImages[i]);
			};
			for (var i = 0; i < savedIndex; i++) {
				images.push(tempImages[i]);
			};
		}		
		$.backstretch(images, {duration: 7000, fade: 1000});	
	}

	function seekAudio(){
		var player = getPlayer();
		if(!player) return;

		var savedTime = parseFloat(App.GetCookie(AUDIO_COOKIE_NAME)) || 0;	
		if(savedTime > 1 && player.seekable.length > 0) {
			player.currentTime = savedTime;
		}
	}

})(jQuery);
