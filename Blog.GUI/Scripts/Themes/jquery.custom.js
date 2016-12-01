// Initialise the Superfish Menu (http://users.tpg.com.au/j_birch/plugins/superfish/)
// Secondary Navigation
$(document).ready(function() { 
        $('#secondary-nav ul').superfish({ 
            delay: 100,
            animation: {opacity:'show', height:'show'},
            speed: 'fast',
            autoArrows: false,
            dropShadows: false
        }); 
    });
    
$(document).ready(function() { 
        $('#primary-nav ul').superfish({ 
            delay: 200,
            animation: {opacity:'show', height:'show'},
            speed: 'fast',
            autoArrows: false,
            dropShadows: false
        }); 
    });

// 125 Ads + Flickr Widget + 120x240 (Sidebar)
$(document).ready(function() { 
		$("#sidebar .ads-125 img, #sidebar .flickr_badge_image img, .ads-120x240 img").css({
				backgroundColor: "#f4f4f4"
			});
		$("#sidebar .ads-125 img, #sidebar .flickr_badge_image img, .ads-120x240 img").hover(function() {
			$(this).stop().animate({
				backgroundColor: "#333333"
				}, 300);
			},function() {
			$(this).stop().animate({
				backgroundColor: "#f4f4f4"
				}, 500);
		});
	});

// Flickr Widget + 125 Ads (Footer)
$(document).ready(function() { 
		$("#footer .flickr_badge_image img, #footer .ads-125 img").css({
				backgroundColor: "#202020"
			});
		$("#footer .flickr_badge_image img, #footer .ads-125 img").hover(function() {
			$(this).stop().animate({
				backgroundColor: "#141414"
				}, 300);
			},function() {
			$(this).stop().animate({
				backgroundColor: "#202020"
				}, 500);
		});
	});

// Tabbed Widget + Post Thumbs + Related Posts
$(document).ready(function() { 
		$(".tz_tab_widget .tab-thumb img, .tab-comments .avatar, .post .post-thumb img, #related-posts .post-thumb img").css({
				backgroundColor: "#ffffff"
			});
		$(".tz_tab_widget .tab-thumb img, .tab-comments .avatar, .post .post-thumb img, #related-posts .post-thumb img").hover(function() {
			$(this).stop().animate({
				backgroundColor: "#333333"
				}, 300);
			},function() {
			$(this).stop().animate({
				backgroundColor: "#ffffff"
				}, 500);
		});
	});

// Tabbed Widget Tags
$(document).ready(function() { 
		$(".tz_tab_widget .tab-tags a").css({
				backgroundColor: "#ffffff",
				color: "#999999"
			});
		$(".tz_tab_widget .tab-tags a").hover(function() {
			$(this).stop().animate({
				backgroundColor: "#3399cc",
				color: "#ffffff"
				}, 300);
			},function() {
			$(this).stop().animate({
				backgroundColor: "#ffffff",
				color: "#999999"
				}, 500);
		});
	});
	
	
// Social Sharing
$(document).ready(function() { 
		$("#sharing li").css({
				opacity: 0.5
			});
		$("#sharing li").hover(function() {
			$(this).stop().animate({
				opacity: 1
				}, 100);
			},function() {
			$(this).stop().animate({
				opacity: 0.5
				}, 500);
		});
	});