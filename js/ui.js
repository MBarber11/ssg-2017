$(document).ready(function() {
	
	// ---------- External Links ----------
	$('a[rel=external]').attr('target', '_blank').click(function(){
			$(this).blur();
	});

	// ---------- Toggle ----------

	// ---------- Mobile Navigation ----------
	$(document).ready(function(){
	$('#mobile-nav').slicknav({
		prependTo:'#mobile-header',
		});
	
});

	$(".slicknav_btn").click(function() {
		$(this).toggleClass("active");
		if($(this).hasClass("active")) {
			mobileOpen();
		} else {
			mobileClose();
		}
		return false;
	});
	
	// ---------- Toggle ----------
	
	$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});
	
});