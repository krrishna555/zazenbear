(function($){

	$(document).ready(function () {

			if( $( window ).width() < 1200 ){

				//add class name 
				$( "form.uc-cart-checkout-form > div > fieldset" ).addClass("fieldsetPositionWrapper");

				// $( "form.uc-cart-checkout-form > div > fieldset" ).css( "position", "inherit" );
				// $( "form.uc-cart-checkout-form > div > fieldset" ).css( "width", "100%" );
				// $( "form.uc-cart-checkout-form > div > fieldset" ).css( "margin", "0 0 20px" );
				// $( "form.uc-cart-checkout-form > div > fieldset" ).css( "padding", "0" );
				
				$( "form.uc-cart-checkout-form > div" ).addClass( "divPositionWrapper" );
				// $( "form.uc-cart-checkout-form > div" ).css( "background", "none" );
					//$( "form.uc-cart-checkout-form > //div" ).css( "float", "left" );
				// $( "form.uc-cart-checkout-form > div" ).css( "position", "inherit" );
				$( "form.uc-cart-checkout-form legend" ).addClass( "legendPositionWrapper" );
				// $( "form.uc-cart-checkout-form legend" ).css( "position", "inherit" );
				// $( "form.uc-cart-checkout-form legend" ).css( "left", "0" );
				// $( "form.uc-cart-checkout-form legend" ).css( "top", "0" );
				// $( "form.uc-cart-checkout-form fieldset" ).css( "float", "left" );
				$( "form.uc-cart-checkout-form #edit-actions.form-actions.form-wrapper" ).addClass( "form-wrapperPositionWrapper" );
				// $( "form.uc-cart-checkout-form #edit-actions.form-actions.form-wrapper" ).css( "clear", "both" );
				// $( "form.uc-cart-checkout-form #edit-actions.form-actions.form-wrapper" ).css( "float", "left" );
				// $( "form.uc-cart-checkout-form #edit-actions.form-actions.form-wrapper" ).css( "left", "0" );
				// $( "form.uc-cart-checkout-form #edit-actions.form-actions.form-wrapper" ).css( "position", "inherit" );
				// $( "form.uc-cart-checkout-form #edit-actions.form-actions.form-wrapper" ).css( "top", "0" );
				// $( "form.uc-cart-checkout-form #edit-actions.form-actions.form-wrapper" ).css( "width", "100%" );
				$( "form.uc-cart-checkout-form" ).addClass( "uc-cart-checkout-formPositionWrapper" );
				// $( "form.uc-cart-checkout-form" ).css( "width", "auto" );
				$( "form.uc-cart-checkout-form > div" ).addClass( "container" );
				$( "form.uc-cart-checkout-form > div.container" ).addClass( "divContainerPositionWrapper" );
				// $( "form.uc-cart-checkout-form > div.container" ).css( "padding", "0" );
				$( "form.uc-cart-checkout-form fieldset" ).addClass( "row" );
				$( "form.uc-cart-checkout-form fieldset .fieldset-wrapper" ).addClass( "col-md-12" );
				$( "form.uc-cart-checkout-form #cart_buttons" ).addClass( "cart_buttonsPositionWrapper");
				// $( "form.uc-cart-checkout-form #cart_buttons" ).css( "display", "none");
				$( "form.uc-cart-checkout-form .fieldset-wrapper.col-md-12" ).addClass( "fieldset-wrapperCol-md-12PositionWrapper");
				// $( "form.uc-cart-checkout-form .fieldset-wrapper.col-md-12" ).css( "height", "auto");

			} else if( $( window ).width() >= 1200) {

				jQuery("form.uc-cart-checkout-form > div > div").before('<div id="cart_buttons"><div id="prev">Previous</div><div id="next">Continue</div></div>');
				jQuery("#edit-copy-address").before('<input type="checkbox" id="edit-copy-address2" />');
				jQuery("#edit-copy-address2").click(function() {
					if ( jQuery('#edit-copy-address2').is(':checked')) {
						var firstname = jQuery('#edit-delivery-first-name').val();
						var lastname = jQuery('#edit-delivery-last-name').val();
						var street1 = jQuery('#edit-delivery-street1').val();
						var street2 = jQuery('#edit-delivery-street2').val();
						var city = jQuery('#edit-delivery-city').val();
						var country = jQuery('#edit-delivery-zone').val();
						var postalcode = jQuery('#edit-delivery-postal-code').val();
						var phone = jQuery('#edit-delivery-phone').val();

						jQuery('#edit-billing-first-name').val(firstname);
						jQuery('#edit-billing-last-name').val(lastname);
						jQuery('#edit-billing-street1').val(street1);
						jQuery('#edit-billing-street2').val(street2);
						jQuery('#edit-billing-city').val(city);
						jQuery('#edit-billing-zone').val(country);
						jQuery('#edit-billing-postal-code').val(postalcode);
						jQuery('#edit-billing-phone').val(phone);
						
					}
				
				});

				jQuery("#edit-copy-address").css("display", "none");
				jQuery("#prev").css("display", "none");

				jQuery(".uc-cart-checkout-form").on("click", "#prev", function() {
					if( jQuery("#customer-pane").css("z-index") == 1 ) {
						jQuery("#customer-pane").css("z-index", 0);
						jQuery("#gift_order-pane").css("z-index", 1);
						jQuery("#prev").css("display", "none");
						
						jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#gift_order-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#gift_order-pane legend span").addClass("fieldset-legend-acv");
						
					}
					else if( jQuery("#delivery-pane").css("z-index") == 1 ) {
						jQuery("#delivery-pane").css("z-index", 0);
						jQuery("#customer-pane").css("z-index", 1);
						jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#customer-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#customer-pane legend span").addClass("fieldset-legend-acv");
					}
					else if( jQuery("#billing-pane").css("z-index") == 1 ) {
						jQuery("#billing-pane").css("z-index", 0);
						jQuery("#delivery-pane").css("z-index", 1);
						jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#delivery-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#delivery-pane legend span").addClass("fieldset-legend-acv");
						
					}
					else if( jQuery("#quotes-pane").css("z-index") == 1 ) {
						jQuery("#quotes-pane").css("z-index", 0);
						jQuery("#billing-pane").css("z-index", 1);
						jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#billing-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#billing-pane legend span").addClass("fieldset-legend-acv");
					}
					else if( jQuery("#coupon-pane").css("z-index") == 1 ) {
						jQuery("#coupon-pane").css("z-index", 0);
						jQuery("#quotes-pane").css("z-index", 1);
						jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#quotes-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#quotes-pane legend span").addClass("fieldset-legend-acv");
					}
					else if( jQuery("#payment-pane").css("z-index") == 1 ) {
						jQuery("#payment-pane").css("z-index", 0);
						jQuery("#coupon-pane").css("z-index", 1);
						jQuery("#next").css("display", "block");
						jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#coupon-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#coupon-pane legend span").addClass("fieldset-legend-acv");
					}

					return false;
				});
//Durga
				jQuery(".uc-cart-checkout-form").on("click", "#next", function() {
					if( jQuery("#gift_order-pane").css("z-index") == 1 ) {
						jQuery("#gift_order-pane").css("z-index", 0);
						jQuery("#customer-pane").css("z-index", 1);
						
						jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#customer-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#customer-pane legend span").addClass("fieldset-legend-acv");
						
						jQuery("#prev").css("display", "block");
					}
					else if( jQuery("#customer-pane").css("z-index") == 1 ) {
						
						
						
						var email= jQuery('#edit-panes-customer-primary-email').val(); 
						 if(email ==''){
						   jQuery('#edit-panes-customer-primary-email').addClass('form-text required error');
						   jQuery("#customer-pane").css("z-index", 1);
						   jQuery("#delivery-pane").css("z-index", 0);
						   } else{
                        jQuery('#edit-panes-customer-primary-email').removeClass('form-text required error');
						jQuery("#customer-pane").css("z-index", 0);
						jQuery("#delivery-pane").css("z-index", 1);
						jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#delivery-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#delivery-pane legend span").addClass("fieldset-legend-acv");
						
						}
					}
					else if( jQuery("#delivery-pane").css("z-index") == 1 ) {
						
						
						var dfname= jQuery('#edit-panes-delivery-delivery-first-name').val(); 
						var dlname= jQuery('#edit-panes-delivery-delivery-last-name').val(); 
						var dstreet1= jQuery('#edit-panes-delivery-delivery-street1').val(); 
						var dcity= jQuery('#edit-panes-delivery-delivery-city').val(); 
						
						var dzone= jQuery('select[id=edit-panes-delivery-delivery-zone]').val(); 
						var dcode= jQuery('#edit-panes-delivery-delivery-postal-code').val(); 
						
						 if (dfname == '' || dlname == '' || dstreet1 == '' || dcity == ''|| dzone == '0' || dcode == ''){
							  
						   if(dfname ==''){ jQuery('#edit-panes-delivery-delivery-first-name').addClass('form-text required error'); } 
						   if(dlname ==''){  jQuery('#edit-panes-delivery-delivery-last-name').addClass('form-text required error'); } 
						   if(dstreet1 ==''){  jQuery('#edit-panes-delivery-delivery-street1').addClass('form-text required error'); } 
						   if(dcity ==''){  jQuery('#edit-panes-delivery-delivery-city').addClass('form-text required error'); } 
						   
						   if(dzone =='0'){  jQuery('#edit-panes-delivery-delivery-zone').addClass('form-text required error'); } 
						   if(dcode ==''){  jQuery('#edit-panes-delivery-delivery-postal-code').addClass('form-text required error'); } 
						   
						   
						   jQuery("#delivery-pane").css("z-index", 1);
						   jQuery("#billing-pane").css("z-index", 0);
						   } else{
						   jQuery('#edit-panes-delivery-delivery-first-name').removeClass('form-text required error');
						   jQuery('#edit-panes-delivery-delivery-last-name').removeClass('form-text required error');
						   jQuery('#edit-panes-delivery-delivery-street1').removeClass('form-text required error');
						   jQuery('#edit-panes-delivery-delivery-city').removeClass('form-text required error');
						    jQuery('#edit-panes-delivery-delivery-zone').removeClass('form-text required error');
						   jQuery('#edit-panes-delivery-delivery-postal-code').removeClass('form-text required error');
						   
						   
						jQuery("#delivery-pane").css("z-index", 0);
						jQuery("#billing-pane").css("z-index", 1);
						jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#billing-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#billing-pane legend span").addClass("fieldset-legend-acv");
						
						}
					}
					else if( jQuery("#billing-pane").css("z-index") == 1 ) {
						
						
						var fname= jQuery('#edit-panes-billing-billing-first-name').val(); 
						var lname= jQuery('#edit-panes-billing-billing-last-name').val(); 
						var street1= jQuery('#edit-panes-billing-billing-street1').val(); 
						var city= jQuery('#edit-panes-billing-billing-city').val(); 
						var zone=jQuery('select[id=edit-panes-billing-billing-zone]').val(); 
						var code= jQuery('#edit-panes-billing-billing-postal-code').val(); 
						
						
						  if (fname == '' || lname == '' || street1 == '' || city == '' || zone == '0' || code == ''){
						  if(fname ==''){ jQuery('#edit-panes-billing-billing-first-name').addClass('form-text required error');} 
						  if(lname ==''){  jQuery('#edit-panes-billing-billing-last-name').addClass('form-text required error');} 
						  if(street1 ==''){   jQuery('#edit-panes-billing-billing-street1').addClass('form-text required error');} 
						  if(city ==''){   jQuery('#edit-panes-billing-billing-city').addClass('form-text required error');} 
						  
						   if(zone =='0'){  jQuery('#edit-panes-billing-billing-zone').addClass('form-text required error'); } 
						   if(code ==''){  jQuery('#edit-panes-billing-billing-postal-code').addClass('form-text required error'); } 
						   
						   jQuery("#billing-pane").css("z-index", 1);
						   jQuery("#quotes-pane").css("z-index", 0);
						   } else{
						   jQuery('#edit-panes-billing-billing-first-name').removeClass('form-text required error');
						   jQuery('#edit-panes-billing-billing-last-name').removeClass('form-text required error');
						   jQuery('#edit-panes-billing-billing-street1').removeClass('form-text required error');
						   jQuery('#edit-panes-billing-billing-city').removeClass('form-text required error');
						    jQuery('#edit-panes-billing-billing-zone').removeClass('form-text required error');
						   jQuery('#edit-panes-billing-billing-postal-code').removeClass('form-text required error');
						   
						jQuery("#billing-pane").css("z-index", 0);
						jQuery("#quotes-pane").css("z-index", 1);
						
						jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#quotes-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#quotes-pane legend span").addClass("fieldset-legend-acv");
						
						}
					}
					/*
					else if( jQuery("#billing-pane").css("z-index") == 1 ) {
						jQuery("#billing-pane").css("z-index", 0);
						jQuery("#quotes-pane").css("z-index", 1);
					}
					*/
					
					else if( jQuery("#quotes-pane").css("z-index") == 1 ) {
						jQuery("#quotes-pane").css("z-index", 0);
						jQuery("#coupon-pane").css("z-index", 1);
						jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#coupon-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#coupon-pane legend span").addClass("fieldset-legend-acv");
						
					}
					else if( jQuery("#coupon-pane").css("z-index") == 1 ) {
						jQuery("#coupon-pane").css("z-index", 0);
						jQuery("#payment-pane").css("z-index", 1);
						jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#payment-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#payment-pane legend span").addClass("fieldset-legend-acv");
						jQuery("#next").css("display", "none");
					}
					
					/*
					else if( jQuery("#payment-pane").css("z-index") == 1 ) {
						jQuery("#coupon-pane").css("z-index", 0);
						jQuery("#payment-pane").css("z-index", 1);
						jQuery("#next").css("display", "none");
						var vcc= jQuery('#edit-panes-payment-details-cc-number').val(); 
						var cvv= jQuery('#edit-panes-payment-details-cc-cvv').val(); 
						
						
						  if (vcc == '' || cvv == ''){
						  if(vcc ==''){ jQuery('#edit-panes-payment-details-cc-number').addClass('form-text required error');} 
						    if(cvv ==''){ jQuery('#edit-panes-payment-details-cc-cvv').addClass('form-text required error');} 
						}
                         else{
						   jQuery('#edit-panes-payment-details-cc-cvv').removeClass('form-text required error');
						   jQuery('#edit-panes-payment-details-cc-number').removeClass('form-text required error');
						   
						   }
						   
					}
					*/

					return false;
				});

				jQuery(".uc-cart-checkout-form").on("click", "#gift_order-pane", function() {
					jQuery("#gift_order-pane").css("z-index", 1);
					jQuery("#customer-pane").css("z-index", 0);
					jQuery("#delivery-pane").css("z-index", 0);
					jQuery("#billing-pane").css("z-index", 0);
					jQuery("#quotes-pane").css("z-index", 0);
					jQuery("#coupon-pane").css("z-index", 0);
					jQuery("#payment-pane").css("z-index", 0);
					jQuery("#prev").css("display", "none");
					jQuery("#next").css("display", "block");
					
					    jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#gift_order-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#gift_order-pane legend span").addClass("fieldset-legend-acv");
						
				});

				jQuery(".uc-cart-checkout-form").on("click", "#customer-pane", function() {
					jQuery("#gift_order-pane").css("z-index", 0);
					jQuery("#customer-pane").css("z-index", 1);
					jQuery("#delivery-pane").css("z-index", 0);
					jQuery("#billing-pane").css("z-index", 0);
					jQuery("#quotes-pane").css("z-index", 0);
					jQuery("#coupon-pane").css("z-index", 0);
					jQuery("#payment-pane").css("z-index", 0);
					jQuery("#prev").css("display", "block");
					jQuery("#next").css("display", "block");
					jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#customer-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#customer-pane legend span").addClass("fieldset-legend-acv");
						
						
				});

				jQuery(".uc-cart-checkout-form").on("click", "#delivery-pane", function() {
					jQuery("#gift_order-pane").css("z-index", 0);
					jQuery("#customer-pane").css("z-index", 0);
					jQuery("#delivery-pane").css("z-index", 1);
					jQuery("#billing-pane").css("z-index", 0);
					jQuery("#quotes-pane").css("z-index", 0);
					jQuery("#coupon-pane").css("z-index", 0);
					jQuery("#payment-pane").css("z-index", 0);
					jQuery("#prev").css("display", "block");
					jQuery("#next").css("display", "block");
					    jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#delivery-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#delivery-pane legend span").addClass("fieldset-legend-acv");
						
				});

				jQuery(".uc-cart-checkout-form").on("click", "#billing-pane", function() {
					jQuery("#gift_order-pane").css("z-index", 0);
					jQuery("#customer-pane").css("z-index", 0);
					jQuery("#delivery-pane").css("z-index", 0);
					jQuery("#billing-pane").css("z-index", 1);
					jQuery("#quotes-pane").css("z-index", 0);
					jQuery("#coupon-pane").css("z-index", 0);
					jQuery("#payment-pane").css("z-index", 0);
					jQuery("#prev").css("display", "block");
					jQuery("#next").css("display", "block");
					  jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#billing-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#billing-pane legend span").addClass("fieldset-legend-acv");
				});

				jQuery(".uc-cart-checkout-form").on("click", "#quotes-pane", function() {
					jQuery("#gift_order-pane").css("z-index", 0);
					jQuery("#customer-pane").css("z-index", 0);
					jQuery("#delivery-pane").css("z-index", 0);
					jQuery("#billing-pane").css("z-index", 0);
					jQuery("#quotes-pane").css("z-index", 1);
					jQuery("#coupon-pane").css("z-index", 0);
					jQuery("#payment-pane").css("z-index", 0);
					jQuery("#prev").css("display", "block");
					jQuery("#next").css("display", "block");
					  jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#quotes-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#quotes-pane legend span").addClass("fieldset-legend-acv");
				});

				jQuery(".uc-cart-checkout-form").on("click", "#coupon-pane", function() {
					jQuery("#gift_order-pane").css("z-index", 0);
					jQuery("#customer-pane").css("z-index", 0);
					jQuery("#delivery-pane").css("z-index", 0);
					jQuery("#billing-pane").css("z-index", 0);
					jQuery("#quotes-pane").css("z-index", 0);
					jQuery("#coupon-pane").css("z-index", 1);
					jQuery("#payment-pane").css("z-index", 0);
					jQuery("#prev").css("display", "block");
					jQuery("#next").css("display", "block");
					  jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#coupon-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#coupon-pane legend span").addClass("fieldset-legend-acv");
				});

				jQuery(".uc-cart-checkout-form").on("click", "#payment-pane", function() {
					jQuery("#gift_order-pane").css("z-index", 0);
					jQuery("#customer-pane").css("z-index", 0);
					jQuery("#delivery-pane").css("z-index", 0);
					jQuery("#billing-pane").css("z-index", 0);
					jQuery("#quotes-pane").css("z-index", 0);
					jQuery("#coupon-pane").css("z-index", 0);
					jQuery("#payment-pane").css("z-index", 1);
					jQuery("#prev").css("display", "block");
					jQuery("#next").css("display", "none");
					  jQuery("form.uc-cart-checkout-form fieldset legend span").removeClass("fieldset-legend");
						jQuery("form.uc-cart-checkout-form fieldset legend span").addClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#payment-pane legend span").removeClass("fieldset-legend-noacv");
						jQuery("form.uc-cart-checkout-form fieldset#payment-pane legend span").addClass("fieldset-legend-acv");
				});

			}

		$( window ).resize(function() {
			  
			if( $( window ).width() < 1200 ){
				
				$( "form.uc-cart-checkout-form > div > fieldset" ).addClass("fieldsetPositionWrapper");
				$( "form.uc-cart-checkout-form > div" ).addClass( "divPositionWrapper" );
				$( "form.uc-cart-checkout-form legend" ).addClass( "legendPositionWrapper" );
				$( "form.uc-cart-checkout-form #edit-actions.form-actions.form-wrapper" ).addClass( "form-wrapperPositionWrapper" );
				$( "form.uc-cart-checkout-form" ).addClass( "uc-cart-checkout-formPositionWrapper" );
				$( "form.uc-cart-checkout-form > div" ).addClass( "container" );
				$( "form.uc-cart-checkout-form > div.container" ).addClass( "divContainerPositionWrapper" );
				$( "form.uc-cart-checkout-form fieldset" ).addClass( "row" );
				$( "form.uc-cart-checkout-form fieldset .fieldset-wrapper" ).addClass( "col-md-12" );
				$( "form.uc-cart-checkout-form #cart_buttons" ).addClass( "cart_buttonsPositionWrapper");
				$( "form.uc-cart-checkout-form .fieldset-wrapper.col-md-12" ).addClass( "fieldset-wrapperCol-md-12PositionWrapper");

			} else if( $( window ).width() >= 1200) {
				$( "form.uc-cart-checkout-form > div > fieldset" ).removeClass("fieldsetPositionWrapper");
				$( "form.uc-cart-checkout-form > div" ).removeClass( "divPositionWrapper" );
				$( "form.uc-cart-checkout-form legend" ).removeClass( "legendPositionWrapper" );
				$( "form.uc-cart-checkout-form #edit-actions.form-actions.form-wrapper" ).removeClass( "form-wrapperPositionWrapper" );
				$( "form.uc-cart-checkout-form" ).removeClass( "uc-cart-checkout-formPositionWrapper" );
				$( "form.uc-cart-checkout-form > div" ).removeClass( "container" );
				$( "form.uc-cart-checkout-form > div.container" ).removeClass( "divContainerPositionWrapper" );
				$( "form.uc-cart-checkout-form fieldset" ).removeClass( "row" );
				$( "form.uc-cart-checkout-form fieldset .fieldset-wrapper" ).removeClass( "col-md-12" );
				$( "form.uc-cart-checkout-form #cart_buttons" ).removeClass( "cart_buttonsPositionWrapper");
				$( "form.uc-cart-checkout-form .fieldset-wrapper.col-md-12" ).removeClass( "fieldset-wrapperCol-md-12PositionWrapper");

			}
		});

	});

})(jQuery);

