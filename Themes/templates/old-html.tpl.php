<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->

<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
<?php print $head; ?>
  <title><?php print $head_title; ?></title>
<link rel="stylesheet" media="screen and (device-width: 400px)" href="/sites/all/themes/zazenbear/css/800.css" />
  <?php if ($default_mobile_metatags): ?>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width">
  <?php endif; ?>
  <meta http-equiv="cleartype" content="on">

  <?php print $styles; ?>
  <?php print $scripts; ?>
  <?php if ($add_html5_shim and !$add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5.js"></script>
    <![endif]-->
  <?php elseif ($add_html5_shim and $add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5-respond.js"></script>
    <![endif]-->
  <?php elseif ($add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/respond.js"></script>
    <![endif]-->
  <?php endif; ?>
	
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- Start Open Web Analytics Tracker -->
  	
	<!-- Latest compiled and minified CSS -->
<!-- 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css"> -->

	<link rel="stylesheet" type="text/css" href="http://fast.fonts.net/cssapi/585273eb-1bf5-42ac-b466-1197cc2bc9d1.css">


	
	<script src="//use.typekit.net/qix5wct.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
 
  <?php print $page; ?>
  <?php print $page_bottom; ?>

<!-- scroll to top  -->
<div class="scrollToTop">
  <button  type="button" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
  </button>
</div>
<!-- end scroll to top  -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
</body>
<style type="text/css">
/*form.uc-cart-checkout-form {
	 display: block;
    position: relative;
	 width: 1140px;
	 height: 500px;
	 padding-top: 50px;
}

form.uc-cart-checkout-form > div {
	position: relative;
	background: #ffffff;
}

form.uc-cart-checkout-form > div > div{
	position: absolute;
	top: 450px;
}

form.uc-cart-checkout-form > div #cart_buttons {
	position: absolute;
	top: 10px;
	z-index: 100;
}

#cart_buttons #next {
	position: absolute;
	width: 150px;
	left: 1140px;
	border: 1px solid black;
	background: #bbb;
}

#cart_buttons #prev {
	position: absolute;
	left: 0px;
	width: 150px;
	border: 1px solid black;
	background: #bbb;
}

form.uc-cart-checkout-form > div > fieldset {
	position: absolute;
	top: 0;
	left: 0;
	height: 450px;
	width: 1140px;
	background: #fff;
}

form.uc-cart-checkout-form > div > fieldset div.fieldset-wrapper{
	height: 400px;
	overflow-y: auto;
}

form.uc-cart-checkout-form > div > fieldset legend {
	top: -30px;
	left: 0;
	width: 200px;
	position: absolute;
}

form.uc-cart-checkout-form > div > fieldset {
	z-index: 0;
}

form.uc-cart-checkout-form > div > fieldset#gift_order-pane {
	z-index: 1;
}

form.uc-cart-checkout-form > div > fieldset#gift_order-pane > legend {
	left: 0px;
}
form.uc-cart-checkout-form > div > fieldset#customer-pane > legend {
	left: 200px;
}
form.uc-cart-checkout-form > div > fieldset#delivery-pane > legend {
	left: 400px;
}
form.uc-cart-checkout-form > div > fieldset#billing-pane > legend {
	left: 600px;
}
form.uc-cart-checkout-form > div > fieldset#quotes-pane legend {
	left: 800px;
}
form.uc-cart-checkout-form > div > fieldset#coupon-pane > legend {
	left: 1000px;
}
form.uc-cart-checkout-form > div > fieldset#payment-pane > legend {
	left: 1200px;
}*/
</style>

<script type="text/javascript">
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
		}
		else if( jQuery("#delivery-pane").css("z-index") == 1 ) {
			jQuery("#delivery-pane").css("z-index", 0);
			jQuery("#customer-pane").css("z-index", 1);
		}
		else if( jQuery("#billing-pane").css("z-index") == 1 ) {
			jQuery("#billing-pane").css("z-index", 0);
			jQuery("#delivery-pane").css("z-index", 1);
		}
		else if( jQuery("#quotes-pane").css("z-index") == 1 ) {
			jQuery("#quotes-pane").css("z-index", 0);
			jQuery("#billing-pane").css("z-index", 1);
		}
		else if( jQuery("#coupon-pane").css("z-index") == 1 ) {
			jQuery("#coupon-pane").css("z-index", 0);
			jQuery("#quotes-pane").css("z-index", 1);
		}
		else if( jQuery("#payment-pane").css("z-index") == 1 ) {
			jQuery("#payment-pane").css("z-index", 0);
			jQuery("#coupon-pane").css("z-index", 1);
			jQuery("#next").css("display", "block");
		}

		return false;
	});

	jQuery(".uc-cart-checkout-form").on("click", "#next", function() {
		if( jQuery("#gift_order-pane").css("z-index") == 1 ) {
			jQuery("#gift_order-pane").css("z-index", 0);
			jQuery("#customer-pane").css("z-index", 1);
			jQuery("#prev").css("display", "block");
		}
		else if( jQuery("#customer-pane").css("z-index") == 1 ) {
			jQuery("#customer-pane").css("z-index", 0);
			jQuery("#delivery-pane").css("z-index", 1);
		}
		else if( jQuery("#delivery-pane").css("z-index") == 1 ) {
			jQuery("#delivery-pane").css("z-index", 0);
			jQuery("#billing-pane").css("z-index", 1);
		}
		else if( jQuery("#billing-pane").css("z-index") == 1 ) {
			jQuery("#billing-pane").css("z-index", 0);
			jQuery("#quotes-pane").css("z-index", 1);
		}
		else if( jQuery("#quotes-pane").css("z-index") == 1 ) {
			jQuery("#quotes-pane").css("z-index", 0);
			jQuery("#coupon-pane").css("z-index", 1);
		}
		else if( jQuery("#coupon-pane").css("z-index") == 1 ) {
			jQuery("#coupon-pane").css("z-index", 0);
			jQuery("#payment-pane").css("z-index", 1);
			jQuery("#next").css("display", "none");
		}

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
	});
</script>

<script>
    
    
  (function ($) {

      $(document).ready(function () {

          if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
              // some code..
              $('.changeImage').click(function(){
                var img_src = $(this).find('img').attr('src');
                $("#imageBox").children('img').attr('src',img_src);


                // Remove .active from all images then add to the clicked one
    			$('.changeImage a').removeClass('active');
    			$(this).find('a').addClass('active');

              });

          } else {
              //initiate the plugin and pass the id of the div containing gallery images 
              $("#product_img").elevateZoom({
                  gallery: 'wrapperThumbnailImages',
                  cursor: 'pointer',
                  galleryActiveClass: 'active',
                  imageCrossfade: true,
                  //loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'
              });

              //pass the images to Fancybox 
              $("#product_img").bind("click", function (e) {
                  var ez = $('#product_img').data('elevateZoom');
                  //$.fancybox(ez.getGalleryList()); 
                  return false;
              });

          }



      });

  })(jQuery);

</script>

</html>
