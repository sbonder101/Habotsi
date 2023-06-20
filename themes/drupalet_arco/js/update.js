jQuery(document).ready(function() {
	
	if (jQuery('.remove-row-class').length) {
		jQuery('.remove-row-class').each(function(){
			//jQuery(this).children(".container").removeClass("container");
			jQuery(this).children(".container").children(".row").removeClass("row");
		});
	}
	
	if (jQuery('.remove-container-class').length) {
		jQuery('.remove-container-class').each(function(){
			jQuery(this).children(".container").addClass("container-fluid");
			jQuery(this).children(".container").removeClass("container");
		});
		
	}
	
	if (jQuery('#contact-message-main-contact-form-form').length) {
			jQuery('#contact-message-main-contact-form-form').addClass("form");
	}
	
	//Set subtitle
	if (jQuery('.section').length) {
		jQuery('.section').each(function(){
			
			if(jQuery(this).attr("data-sub-title")){
				var subtitle = jQuery(this).attr("data-sub-title");
			
				if (subtitle !== ''){
					jQuery(this).find(".subtitle-section").html(subtitle);
				}
			}else{
				jQuery(this).find(".subtitle-section").hide();
			}
			
			if(jQuery(this).attr("data-title")){
				var dttitle = jQuery(this).attr("data-title");
			
				if (dttitle !== ''){
					jQuery(this).find(".title-section").html(dttitle);
				}
			}
			
			//desction section 
			if(jQuery(this).attr("data-block-desc")){
				var desc_section = jQuery(this).attr("data-block-desc");
			
				if (desc_section !== ''){
					jQuery(this).find(".desc-section").html(desc_section).show();
					
				}
			}
			
			
		});
		
	}
	
	///scroll
// 	if (jQuery('.navbar-nav').length) {
// 		jQuery('.navbar-nav').find(".menu-item").each(function(){
			
// 			jQuery(this).find(".nav-link").click(function() {
// 					var href = jQuery(this).attr("href");
// 					var href_l = href.length;
// 					var href_val = href.substr(1,href_l-1);
					
					
					
// 					if (jQuery('.section').length) {
// 						jQuery('.section').each(function(){
// 							var id_section = jQuery(this).attr("id");
// //							alert(id_section);
// 							if(id_section === href_val){
// 								var offset = jQuery(this).offset();
// 								var offset_top = offset.top;
// 								jQuery("html, body").animate({ scrollTop: offset_top }, 600);
								
// 							}
// 						});
// 					}
							
					
// 					return false;
// 			});
			
// 		});
// 	}
	
	
});
