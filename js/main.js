var App = {};
(function($){
	var DEFAULT_LANGUAGE_COOKIE_NAME = "language";

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
		var musicTrigger = $(".music-trigger");
		var controlpanel = $(".controlpanel");	
		var languageControl = $(".language-control");
		var menu = $(".menu");
		var overlay = $(".overlay-main");

		musicTrigger.on("click", function(e){
			toggleMusic($(this));			
		});
		controlpanel.hover(function(){
			controlpanel.removeClass("show");
		}, function(){
			controlpanel.addClass("show");
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
		$(".lang-option").on("click", function(e){
			e.preventDefault();
			changeLanguage($(this).data("code"));
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

		$("a.nav-link").on("click", function(){
			$("a.nav-link").removeClass("active");
			$(this).addClass("active");
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
        if($(".welcome-page").length > 0){
        	$.backstretch([
			      "img/background/welcome.jpg"
			    , "img/background/home.jpg"
			    , "img/background/about.jpg"
			    , "img/background/designforum.jpg"
			    , "img/background/gallery.jpg"
			    , "img/background/contact.jpg"
			], {duration: 9000, fade: 1000});
        }

		//Slide show
		if($(".slide-show .item-list").length > 0){
			$(".slide-show .item-list").owlCarousel(
				{
		            autoPlay: true,
		            pagination : false,
		            singleItem: true,
		            navigation: true,
		            stopOnHover: true,
		            slideSpeed : 800,
	        		rewindSpeed : 1000,
		            navigationText: ['<span class="pre"></span>', '<span class="next"></span>']
				}
	        );
		}
		
		if($(".image-list .item-list").length > 0){
			$(".image-list .item-list").owlCarousel(
				{
					items: 5,
		            autoPlay: false,
		            singleItem: false,
		            navigation: false,
		            stopOnHover: true,
		            rewindNav : false
				}
	        );
		}		

		if($(".office-info.hidden").length > 0){
			$(".office-info").removeClass("hidden");
		}

		//Album
		var albumDetails = $(".image-list-popup");
		if(albumDetails.length > 0 && albumDetails.find(".item").length > 0){
			$(".popup-image").magnificPopup({
	          type: 'image',
	          tLoading: 'Loading image #%curr%...',
	          mainClass: 'mfp-img-mobile',
	          gallery: {
	            enabled: true,
	            navigateByImgClick: true
	          },
	          image: {
	            tError: 'The image could not be loaded.',
	            titleSrc: function(item) {
	              return item.el.attr('title');
	            }
	          }
	        }); 
		}		   

		if($("body.welcome-page").length > 0 || $("body.gallery").length > 0){
			//toggleMusic(musicTrigger, true);
		}else{
			musicTrigger.addClass("off");
		}		
	}

	function toggleMusic(trigger, forceStart){
		var player = getPlayer();		
		if(!player) {
			trigger.toggleClass('off');	
			return;
		};

		if(forceStart){
			player.play();
			trigger.removeClass("off");
			return;
		}

		if(trigger.hasClass("off")){
			player.play();
		}else{
			player.pause();
		}	
		trigger.toggleClass('off');	
	}

	function changeLanguage(code){
		code = code || 'EN';
		var existing = App.GetCookie(DEFAULT_LANGUAGE_COOKIE_NAME);

		if(existing != code){
			App.SetCookie(DEFAULT_LANGUAGE_COOKIE_NAME, code, 30);
			window.location.reload();
		}
	}

	function getPlayer(){
		return document.getElementById("music-background");
	}

	function isMusicOn(){
		return !$(".music-trigger").hasClass("off");
	}

})(jQuery);