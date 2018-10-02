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


	<!-- end new header --> 	

		<div id="slideShowHomePage" class="bodyContentMarginTop">
			<!-- <div id="hover-cap-4col" class="thumbnails"> -->
				<?php  print render($page['slideshow']);?>
			<!-- </div> -->
		</div>

<div id="zazenBaerFeaturing">
    <div class="container ">
        <div class="row">
            <div class="col-md-12 ">
                <h1> • featuring • </h1>
            </div>
        </div>
        <div id="wrapperFeaturing" class="row" >
            <?php  print render($page['homefeaturedproducts']);?>
        </div>
    </div>
</div>


<!-- puzzel -->

<div id="wrapperPuzzleHomePage">
    <div id="leftPiece" class="col-md-6 ">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="bigText">express your zen</h1>
            <p>Everyday Zen
Zazen Bear allows you to express your personality and bring a touch of Zen to your everyday moments.</p>
            <span class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">LEARN MORE</a>
            </span> 
        </div>
    </div>
        
            
    </div>
    <div id="rightPiece" class="col-md-6">
        <div class="row">
            <div id="topPiece" class="col-md-4">
                <img width="55" height="72" alt="Zazen Bear Logo" src="/sites/default/files/addressLogo.jpg">
               <h1>the zazen bear story</h1>
                <p>There is a quiet place in each of our lives where you can find peace and tranquility...</p>
                <span class="btnDefault">
                    <a href="/our-story" class="btn btn-lg btn-default videoPlayer">LEARN MORE</a>
                </span> 
            </div>
            <div id="topPieceRight" class="col-md-8">
                <h1>product</h1>
                <!-- <p>There is a quiet place in each of our lives where you can find peace and tranquility...</p> -->
                <span class="btnDefault">
                    <a href="/shop" class="btn btn-lg btn-default videoPlayer">SEE MORE</a>
                </span>
            </div>
                
            
        </div>
        <div class="row">
            <div id="videoPlayerHomePagePuzzel" class="col-md-8"></div>
            <div id="bottomPieceRight" class="col-md-4">
                <?php print render($page['frontPageFeaturedBlog']);?>
            </div>
        </div>
    </div>
</div>

<!-- end puzzel -->


<div id="zazenBaerUser">
    
        <div class="row">
            <div class="col-md-12 ">
                <h1> • where is your zen? • </h1>
                <p>Enter our #ZenisHere content by sharing an Instagram video or photo of where you find your Zen for a chance to win a signature piece of Zazen Bear jewelry.</p>
                <span class="btnDefault">
                    <a target="_blank" href="https://instagram.com/explore/tags/zenishere/" class="btn btn-lg btn-default videoPlayer">SEE MORE</a>
                </span>
            </div>
        </div>
        <div id="wrapperZenUser" class="row" >
            <div class="col-md-4 col-md-offset-1">
                <?php print render($page['frontPageCampaignLeft']);?>
            </div>
            <div class="col-md-2">
                <a target="_blank" href="https://instagram.com/explore/tags/zenishere/"><img alt="" src="/sites/all/themes/zazenbear/images/zen-user_3.jpg"></a>
            </div>
            <div class="col-md-4">
                <?php print render($page['frontPageCampaignRight']);?>
            </div>
            
        </div> 

        <div class="row">
            <div class="col-md-12 ">
                <a target="_blank" href="http://instagram.com/zazenbear/"><img alt="" src="/sites/all/themes/zazenbear/images/zen-user_6.jpg"></a>
            </div>
        </div>
</div>

<div id="wrapperStoreClearYourMind" class="footerHomepage">
    <div class="col-md-6 emptyText"></div>
    <div class="col-md-6 rightStoreBlock">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <img src="/sites/all/themes/zazenbear/images/logo-black-on-brown.jpg" alt="Zazen Bear Logo">
<!--                <h1>clear your mind of can't</h1>-->
            </div>
        </div>
    </div>
</div>

<!-- footer -->

<?php
$theme_path = drupal_get_path('theme', variable_get('theme_default', NULL));
 include_once(DRUPAL_ROOT.'/'.$theme_path.'/templates/footer.tpl.php');  
?>


