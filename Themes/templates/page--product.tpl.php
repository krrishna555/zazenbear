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
                            <?php
                                $items = uc_cart_get_contents();
                                $qty = 0;
                                foreach ($items as $itm) {
                                  $qty += $itm->qty;
                                }
                                if ( $qty == 0 ){
                                        echo "<a class='dropdown-toggle empty-cart' data-toggle='dropdown' aria-expanded='false'><span class='glyphicon glyphicon-shopping-cart'></span></a>
                                                <div class='dropdown-menu emptyCart'>
                                                    <span>Your cart is empty <a href='/shop'><b>please click here to shop</b></a></span>    
                                            </div>";
                                }else{
                                        echo "<a href='/cart'><span class='glyphicon glyphicon-shopping-cart'></span>  " . $qty . "</a>";
                                    }
                            ?>
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
                             <?php
                                $items = uc_cart_get_contents();
                                $qty = 0;
                                foreach ($items as $itm) {
                                  $qty += $itm->qty;
                                }
                                if ( $qty == 0 ){
                                        echo "<a><span class='glyphicon glyphicon-shopping-cart'></span></a>";
                                }else{
                                        echo "<a href='/cart'><span class='glyphicon glyphicon-shopping-cart'></span>  " . $qty . "</a>";
                                    }
                            ?>
            </div>
            <!-- end mobile cart -->
            <div id="mobile-nav">
                <?php print render($page['search']) ;?>
                <?php print render($page['mobilemenu']);?> 
            </div> 
        </div>
        
    </div>
</header>

<!-- end mobile navigation -->
<div class="breadcrumbWrapper">
    <div class="container"><?php 
	    $parentid= $node->field_featuring_on['und']['0']['value'];
		if($parentid=='1'){ $parentsnamepath='home'; $parentsname= 'HOME'; }
		if($parentid=='2'){ $parentsnamepath='fashion'; $parentsname= 'FASHION'; }
		if($parentid=='3'){$parentsnamepath= 'collections';$parentsname= 'COLLECTIONS'; }
		if($parentid=='4'){ $parentsnamepath='gifts';$parentsname= 'GIFTS'; }
		if($parentid=='0'){  $parentsname= 'JEWELERY'; $parentsnamepath='jewelery-list';  }
		if(empty($parentid)){ $parentsname= 'JEWELERY'; $parentsnamepath='jewelery-list'; }
        $tmmm= $node->field_select_product_sub_categor['und']['0']['node']->title;
	    //print $breadcrumb; 
		$bdp = explode(" / ", $breadcrumb);
		$breadcrumb0 = $bdp[0];
		$breadcrumb1 = '<a href="/'.$parentsnamepath.'/'.$tmmm.'">'.$tmmm.'</a>';
		$breadcrumb12 = '<a href="/'.$parentsnamepath.'">'.$parentsname.'</a>';
		$breadcrumb2 = '<a href="/shop"> SHOP </a>'; 
		$breadcrumb3 = $bdp[1];
		print $breadcrumb0. ' / ' . $breadcrumb2. ' / '.$breadcrumb12. ' / '. $breadcrumb1. ' / '. $breadcrumb3;

	?></div>
</div>

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
            <!--googleoff: all-->
            <noindex>
                <div class="wrapperBtn">
                    <span id="relatedProducts" class="btnDefault">
                        <a href="#" class="btn btn-lg btn-default videoPlayer">Related Products</a>
                    </span>
                </div>
            </noindex>
            <!--googleoff: all-->
        </div>
        <!--googleoff: all-->
        <noindex>
            <!-- related products -->
            <div id="wrappedRelatedProducts">
                <?php print render($page['relatedproducts']); ?>
            </div>
        <!--googleoff: all-->
        </noindex>
    </div><!--end of mainContentWrapper-->
</main><!-- end of pageregion -->

<!-- footer feature -->
<div id="wrapperStoreClearYourMind" class="footerHomepage">
    <div class="col-md-6 emptyText"></div>
    <div class="col-md-6 rightStoreBlock">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
<!--                <h1>it's not the path. it's the walking.</h1>-->
                <img src="/sites/all/themes/zazenbear/images/logo-black-on-brown.jpg" alt="Zazen Bear Logo"/>
            </div>
        </div>
    </div>
</div>
<!-- footer feature -->

<!-- footer -->
<?php
    $theme_path = drupal_get_path('theme', variable_get('theme_default', NULL));
    include_once(DRUPAL_ROOT.'/'.$theme_path.'/templates/footer.tpl.php');
?>