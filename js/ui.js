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
	
	
	
});