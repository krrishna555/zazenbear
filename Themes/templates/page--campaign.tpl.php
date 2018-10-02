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
                <div class="container"><?php print $breadcrumb; ?></div> 
            </div>
<!-- slideshow campaign -->
     <div id="slideShowCampaignPage" class="bodyContentMarginTop">
             
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 campaignBanner">
                            <img src="/sites/all/themes/zazenbear/images/bear-white.png">
                            <h1 class="bigText"> • zen is here • </h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, officiis unde deserunt sapiente nesciunt, dolore labore tempore quis rem facere!</p>
                        </div>
                    </div>
                    <div class="row campaignSteps">
                        <!-- <div class="container"> -->
                            <div class="row">
                                <div class="col-md-4 stepOne">
                                    <h1>step 1</h1>
                                    <div>SHOOT A VIDEO OR PHOTO</div>
                                    <img src="/sites/all/themes/zazenbear/images/video-icon-campaign.png">
                                    <div>OF WHAT ZEN MEANS TO YOU</div>
                                </div>
                                <div class="col-md-4 stepTwo">
                                    <h1>step 2</h1>
                                    <div>POST ON INSTAGRAM</div>
                                    <img src="/sites/all/themes/zazenbear/images/instagram-icon-campaign.png">               
                                    <div style="font-size: 32px ! important; line-height: 20px;" >#ZENISHERE</div>
                                </div>
                                <div class="col-md-4 stepThree">
                                    <h1>step 3</h1>
                                    <div>FOLLOW US</div>
                                    <div style="font-size: 35px ! important; line-height: 69px;">@zazenbear</div>
                                    <div>ON INSTAGRAM</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="shareCampaign">
                                    SHARE THE CONTEST:
                                    <img src="/sites/all/themes/zazenbear/images/icon-fb-campaign.png">
                                    <img src="/sites/all/themes/zazenbear/images/icon-t-campaign.png">
                                    <img src="/sites/all/themes/zazenbear/images/icon-i-campaign.png">
                                    <img src="/sites/all/themes/zazenbear/images/icon-p-campaign.png">
                                    <img src="/sites/all/themes/zazenbear/images/icon-share-campaign.png">
                                </div>
                            </div>
                        <!-- </div> -->
                        
                    </div>
                </div>
            </div>
        </div>  
         
<!-- end slideshow campaign -->                
           
  <div id="grideCampaign">
      <div class="container">
          <div class="col-md-8 col-md-offset-2">
              <h1 class="bigText"> • inspirations • </h1>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, officiis unde deserunt sapiente nesciunt, dolore labore tempore quis rem facere!</p> 
          </div>
      </div>

      <div class="inspirationsGrid">

        <div class="row">
            <div class="col-md-4">
                <div class="wrapperInspirationImg-1">
                    <a href="#">
                    <div class="wrappperPlayer">
                        <button type="button" class="btn btn-default" aria-label="Play">
                            <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                        </button>
                    </div>

                    <img src="/sites/all/themes/zazenbear/images/inspiration-1.png">
                    </a>
                </div>
                
                <h1> title </h1>
            </div>
            <div class="col-md-4">
                <div class="wrapperInspirationImg-1">
                    <a href="#">
                    <div class="wrappperPlayer">
                        <button type="button" class="btn btn-default" aria-label="Play">
                            <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                        </button>
                    </div>

                    <img src="/sites/all/themes/zazenbear/images/inspiration-2.png">
                    </a>
                </div>
                
                <h1> title </h1>
            </div>
            <div class="col-md-4">
                <div class="wrapperInspirationImg-1">
                    <a href="#">
                    <div class="wrappperPlayer">
                        <button type="button" class="btn btn-default" aria-label="Play">
                            <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                        </button>
                    </div>

                    <img src="/sites/all/themes/zazenbear/images/inspiration-3.png">
                    </a>
                </div>
                
                <h1> title </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="wrapperInspirationImg-1">
                    <a href="#">
                    <div class="wrappperPlayer">
                        <button type="button" class="btn btn-default" aria-label="Play">
                            <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                        </button>
                    </div>

                    <img src="/sites/all/themes/zazenbear/images/inspiration-4.png">
                    </a>
                </div>
                
                <h1> title </h1>
            </div>
            <div class="col-md-4">
                <div class="wrapperInspirationImg-1">
                    <a href="#">
                    <div class="wrappperPlayer">
                        <button type="button" class="btn btn-default" aria-label="Play">
                            <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                        </button>
                    </div>

                    <img src="/sites/all/themes/zazenbear/images/inspiration-5.png">
                    </a>
                </div>
                
                <h1> title </h1>
            </div>
            <div class="col-md-4">
                <div class="wrapperInspirationImg-1">
                    <a href="#">
                    <div class="wrappperPlayer">
                        <button type="button" class="btn btn-default" aria-label="Play">
                            <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                        </button>
                    </div>

                    <img src="/sites/all/themes/zazenbear/images/inspiration-6.png">
                    </a>
                </div>
                
                <h1> title </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="wrapperInspirationImg-1">
                    <a href="#">
                    <div class="wrappperPlayer">
                        <button type="button" class="btn btn-default" aria-label="Play">
                            <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                        </button>
                    </div>

                    <img src="/sites/all/themes/zazenbear/images/inspiration-7.png">
                    </a>
                </div>
                
                <h1> title </h1>
            </div>
            <div class="col-md-4">
                <div class="wrapperInspirationImg-1">
                    <a href="#">
                    <div class="wrappperPlayer">
                        <button type="button" class="btn btn-default" aria-label="Play">
                            <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                        </button>
                    </div>

                    <img src="/sites/all/themes/zazenbear/images/inspiration-8.png">
                    </a>
                </div>
                
                <h1> title </h1>
            </div>
            <div class="col-md-4">
                <div class="wrapperInspirationImg-1">
                    <a href="#">
                    <div class="wrappperPlayer">
                        <button type="button" class="btn btn-default" aria-label="Play">
                            <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                        </button>
                    </div>

                    <img src="/sites/all/themes/zazenbear/images/inspiration-9.jpg">
                    </a>
                </div>
                
                <h1> title </h1>
            </div>
        </div>
    </div>
  </div>

<!-- footer -->

<?php
$theme_path = drupal_get_path('theme', variable_get('theme_default', NULL));
 include_once(DRUPAL_ROOT.'/'.$theme_path.'/templates/footer.tpl.php');  
?>











