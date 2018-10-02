<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?>

<!DOCTYPE html>
<!--[if IEMobile 7]>
<html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]>
<html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]>
<html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]>
<html class="lt-ie9" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!-->
<html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->
<!--
<html lang="<?php //print $language->language; ?>" dir="<?php //print $language->dir; ?>">
-->

<head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <!-- <link rel="stylesheet" media="screen and (device-width: 400px)" href="/sites/all/themes/zazenbear/css/800.css" /> -->
    <?php if ($default_mobile_metatags): ?>
        <meta name="MobileOptimized" content="width">
        <meta name="HandheldFriendly" content="true">
        <meta name="viewport" content="width=device-width">
        <link rel="icon" href="favicon.png">
        <!--[if IE]>
        <link rel="shortcut icon" href="favicon.ico"><![endif]-->
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
    <!--
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    -->

    <link rel="stylesheet" type="text/css" href="http://fast.fonts.net/cssapi/585273eb-1bf5-42ac-b466-1197cc2bc9d1.css">

    <script src="//use.typekit.net/qix5wct.js"></script>
    <script>try {
            Typekit.load();
        } catch (e) {
        }</script>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
<!-- scroll to top  -->
<div class="scrollToTop">
    <button type="button" class="btn btn-default btn-lg">
        <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
    </button>
</div>
<!-- end scroll to top  -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script>
    (function ($) {
        $(document).ready(function () {

            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                // some code..
                $('.changeImage').click(function () {
                    var img_src = $(this).find('img').attr('src');
                    $("#imageBox").children('img').attr('src', img_src);

                    // Remove .active from all images then add to the clicked one
                    $('.changeImage a').removeClass('active');
                    $(this).find('a').addClass('active');
                });
            } else {
                //initiate the plugin and pass the id of the div containing gallery images
                $("#product_img").elevateZoom({
                    constrainType: 'height',
                    constrainSize: 274,
                    responsive: 'true',
                    //zoomType: 'inner',
                    containLensZoom: true,
                    gallery: 'wrapperThumbnailImages',
                    cursor: 'crosshair',
                    galleryActiveClass: 'active',
                    imageCrossfade: true,
                    loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'
                });

                //pass the images to Fancybox
                $("#product_img").bind("click", function (e) {
                    var ez = $('#product_img').data('elevateZoom');
                    $.fancybox(ez.getGalleryList());
                    return false;
                });
            }
        });

    })(jQuery);
</script>

</body>
</html>
