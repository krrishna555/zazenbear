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
<div id="wrapperMarqueeGift" class="bodyContentMarginTop">
     
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="bigText">  • FEATURED GIFT BUNDLE • </h1>

            <p class="marqueeGift">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore.</p>
            <p class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">VIEW GIFTS</a>
            </p>
        </div>
         

    </div>
</div>

<div id="wrapperBtnGift">
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <span id="activeBtn" class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">All Gift Occasions</a>
            </span>
            <span class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">Traditional Occasions</a>
            </span>
            <span class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">Everyday Moments</a>
            </span>
            <span class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">Friendship</a>
            </span>
            <span class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">A Treat For Myself</a>
            </span>
        </div>
    </div>
</div>

<div id="wrapperGiftList">
    <div class="row">
        <div id="under" class="col-md-2">
            <h1 class="bigText">   under $100</h1>
            <p class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">LEARN MORE</a>
            </p>
        </div>
        <div id="fromMom" class="col-md-4">
            <h1 class="bigText"> from mom  </h1>
            <p class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">LEARN MORE</a>
            </p>
        </div>
        <div id="fromLove" class="col-md-4">
            <h1 class="bigText">  from love </h1>
            <p class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">LEARN MORE</a>
            </p>
        </div>
        <div id="fromFriend" class="col-md-2">
            <h1 class="bigText"> from friend  </h1>
            <p class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">LEARN MORE</a>
            </p>
        </div>
    </div>
    <div class="row">
        <div id="congratulations" class="col-md-4">
            <h1 class="bigText">  congratulations </h1>
            <p class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">LEARN MORE</a>
            </p>
        </div>
        <div id="forPeace" class="col-md-2">
            <h1 class="bigText">  for peace </h1>
            <p class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">LEARN MORE</a>
            </p>
        </div>
        <div id="birthdays" class="col-md-2">
            <h1 class="bigText">  birthdays </h1>
            <p class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">LEARN MORE</a>
            </p>
        </div>
        <div id="housewarning" class="col-md-4">
            <h1 class="bigText">  housewarning </h1>
            <p class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">LEARN MORE</a>
            </p>
        </div>
    </div>
</div>



<div id="everydayMoments" class="container">
    <h1 id="titleEverydayMoments" class="bigText">  • everyday Moments • </h1>
    <div class="row">
        <div class="col-md-4">
            <img src="/sites/all/themes/zazenbear/images/just_because.png">
            <h1>just because</h1>
            <div class="col-md-8 col-md-offset-2">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
            </div>
            <p class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">VIEW GIFT</a>
            </p>
        </div>
        <div id="makeMeHappy" class="col-md-4">
            <img src="/sites/all/themes/zazenbear/images/make_me_happy.png">
            <h1>make me happy</h1>
            <div class="col-md-8 col-md-offset-2">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
            </div>
            <p class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">VIEW GIFT</a>
            </p>
        </div>
        <div class="col-md-4">
            <img src="/sites/all/themes/zazenbear/images/peace_of_mind.jpg">
            <h1>peace of mind</h1>
            <div class="col-md-8 col-md-offset-2">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
            </div>
            <p class="btnDefault">
                <a href="#" class="btn btn-lg btn-default videoPlayer">VIEW GIFT</a>
            </p>
        </div>
    </div>
</div>























<!-- footer -->

<?php
$theme_path = drupal_get_path('theme', variable_get('theme_default', NULL));
 include_once(DRUPAL_ROOT.'/'.$theme_path.'/templates/footer.tpl.php');  
?>
