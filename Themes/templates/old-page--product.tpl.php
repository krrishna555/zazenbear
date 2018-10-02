<?php
    global $user;
    $username = $user->name;
?>

<!-- desktop navigation -->
<header id="desktopNavigation" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

        <!-- logo wrapper -->
        <div class="row desktopLogo">
            <a href="/"><img src="/sites/all/themes/zazenbear/images/logo-zazen_bear.jpg"></a>           
        </div>
        <!-- end logo wrapper -->

        <div class="row">
            <!-- search wrapper -->
                <div id="searchDesktop" class="col-md-2 col-sm-2">
                    <ul class="nav pull-left">
                        <li class="dropdown" id="menuLogin"> <i class="glyphicon glyphicon-search whiteBtn"></i>  <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Search</a>

                            <div class="dropdown-menu dropDownSearch" style="padding:17px;">
                               <?php print render($page['search']) ;?>
                            </div>
                        </li>
                    </ul>
                </div>
            <!-- end search wrapper --> 
            
            <!-- menu wrapper -->   
                <div class="col-md-8 col-centered col-sm-7">
                <?php print render($page['menu']);?>   
                </div>
            <!-- end menu wrapper -->  

            <!-- cart and user wrapper --> 
                <div class="col-md-2 col-sm-3">
                    <ul class="nav navbar-nav navbar-right">
                         <?php if ( user_is_logged_in() ) {?>
                              <li><a href="/user"><?php print $username; ?></a></li>
                               <li><a href="/user/logout">Logout</a></li>
                            <?php }else {?>
                                <li><a href="/user">Sign in</a></li>
                                <li><a href="/user">Register</a></li>
                        <?php }?>

                        <li>
                            <a href="/cart"><span class="glyphicon glyphicon-shopping-cart"></span>
                                <?php
                                    $items = uc_cart_get_contents();
                                    $qty = 0;
                                    foreach ($items as $itm) {
                                      $qty += $itm->qty;
                                    }

                                    echo "{$qty}";
                                 ?>
                            </a>
                        </li>
                    </ul>
                </div>
            <!-- end cart and user wrapper --> 
            </div>
    </div>
</header>
<!-- end desktop navigation -->

<!-- mobile navigation -->
<header id="mobileNavigation" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row">
            <!-- mobile menu icon -->
            <div class="col-xs-2 mobileMenu pull-left">
                   
            </div>
            <!-- end mobile icon -->

            <!-- mobile logo -->
            <div class="col-xs-8 mobileLogo">
                <a href="/">
                    <img src="/sites/all/themes/zazenbear/images/logo-zazen_bear.jpg">
                </a>           
            </div>
            <!-- end mobile logo -->

            <!-- mobile cart -->
            <div class="col-xs-2 mobileCart pull-right">
                <a href="/cart">
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                    <?php
                        $items = uc_cart_get_contents();
                        $qty = 0;
                        foreach ($items as $itm) {
                            $qty += $itm->qty;
                        }

                        echo "{$qty}";
                    ?>
                </a>
            </div>
            <!-- end mobile cart -->
            <div id="mobile-nav">
                <?php print render($page['mobilemenu']);?> 
            </div> 
        </div>
        
    </div>
</header>
<!-- end mobile navigation -->


		<main id="pageregion" class="bodyContentMarginTop">
		   	<div id="mainContentWrapper">
		    <?php print $messages; ?>
		    
		    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper"><?php print render($tabs); ?></div><?php endif; ?>
		  
		    <?php //if ($title): ?>
               <!--  <h1 class="title" id="page-title"> -->
                <?php //print $title; ?>
                <!-- </h1> -->
            <?php //endif; ?>
		    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
		    <?php print render($page['content']); ?>
		    
		    <div class="container">
    <div class="wrapperBtn">
        <span id="relatedProducts" class="btnDefault">
            <a href="#" class="btn btn-lg btn-default videoPlayer">Related Products</a>
        </span>
    </div>
    
</div>
<!-- related products -->
<div id="wrappedRelatedProducts">
    <?php print render($page['relatedproducts']); ?> 
</div>
		    
		    </div><!--end of mainContentWrapper-->
		 </main><!-- end of pageregion -->


<!-- footer feature -->
    <div id="wrapperStoreClearYourMind" class="footerHomepage">
        <div class="col-md-6 emptyText"></div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>it's not the path. it's the walking.</h1>                
                </div>
            </div>
        </div>
    </div>
<!-- footer feature -->

<!-- footer -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4"><?php print render($page['footerAddress']);?></div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12"><?php print render($page['footerMenu1']);?></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><?php print render($page['footerMenu2']);?></div>
                    <div class="col-md-4"><?php print render($page['copywrite']);?></div>
                </div>
                <div class="row">
                    <div class="col-md-12"><?php print render($page['socialMedia']);?></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    
    
  (function($){
        
        $(document).ready(function(){
            
            //initiate the plugin and pass the id of the div containing gallery images 
            $("#product_img").elevateZoom({gallery:'wrapperThumbnailImages', 
                                       cursor: 'pointer', 
                                       galleryActiveClass: 'active', 
                                       imageCrossfade: true, 
                                       //loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'
                                    });

            //pass the images to Fancybox 
            $("#product_img").bind("click", function(e) { 
                    var ez = $('#product_img').data('elevateZoom');    
                    //$.fancybox(ez.getGalleryList()); 
                    return false; 
            });


        });    

    })(jQuery);

</script>



