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
                    <li class="dropdown" id="menuLogin"><i class="glyphicon glyphicon-search whiteBtn"></i> <a
                            class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Search</a>

                        <div class="dropdown-menu dropDownSearch" style="padding:17px;">
                            <?php print render($page['search']); ?>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end search wrapper -->

            <!-- menu wrapper -->
            <div class="col-md-8 col-centered col-sm-7">
                <?php print render($page['menu']); ?>
            </div>
            <!-- end menu wrapper -->

            <!-- cart and user wrapper -->
            <div class="col-md-2 col-sm-3">
                <ul class="nav navbar-nav navbar-right">
                    <?php if (user_is_logged_in()) { ?>
                        <li><a href="/user"><?php print $username; ?></a></li>
                        <li><a href="/user/logout">Logout</a></li>
                    <?php } else { ?>
                        <li><a href="/user">Sign in</a></li>
                        <li><a href="/user">Register</a></li>
                    <?php } ?>

                    <li>
                        <?php
                        $items = uc_cart_get_contents();
                        $qty = 0;
                        foreach ($items as $itm) {
                            $qty += $itm->qty;
                        }
                        if ($qty == 0) {
                            echo "<a class='dropdown-toggle empty-cart' data-toggle='dropdown' aria-expanded='false'><span class='glyphicon glyphicon-shopping-cart'></span></a>
                                                <div class='dropdown-menu emptyCart'>
                                                    <span>Your cart is empty <a href='/shop'><b>please click here to shop</b></a></span>    
                                            </div>";
                        } else {
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
                if ($qty == 0) {
                    echo "<a><span class='glyphicon glyphicon-shopping-cart'></span></a>";
                } else {
                    echo "<a href='/cart'><span class='glyphicon glyphicon-shopping-cart'></span>  " . $qty . "</a>";
                }
                ?>
            </div>
            <!-- end mobile cart -->
            <div id="mobile-nav">
                <?php print render($page['search']); ?>
                <?php print render($page['mobilemenu']); ?>
            </div>
        </div>

    </div>
</header>
<!-- end mobile navigation -->
<div class="breadcrumbWrapper">
    <div class="container"><?php print $breadcrumb; ?></div>
</div>

<?php print render($page['visitAddressSection']); ?>

<!-- COMMENTED OUT TO REMOVE EVENTS -->

<!--<div id="zazenBearEvents">-->
<!--    <div class="container ">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12 ">-->
<!--                <h1> • zazen bear events • </h1>-->
<!--                <p>You are welcome to join us for our special events.</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--<div id="zazenBearEventsDetail-visit">-->
<!--    <div class="container">-->
<!--        --><?php //print render($page['content']); ?>
<!--        --><?php //print render($page['events']); ?>
<!--    </div>-->
<!--</div>-->

<div id="zazenBaerOurStore">
    <div class="container ">
        <div class="row">
            <div class="col-md-12 ">
                <h1> • our store • </h1>
            </div>
        </div>
    </div>
</div>

<!--<div id="wrapperStoreOverview">-->
<!--    <div class="col-md-6 emptyText"></div>-->
<!--    <div class="col-md-6">-->
<!--        <div class="row">-->
<!--            <div class="col-sm-12 col-md-8 col-md-offset-2">-->
<!--                <h1>Our story is your story</h1>-->
<!--                <p>There is a quiet place in each of our lives where you can find peace and tranquility. Where the-->
<!--                    demands of the day are muffled by the comforting embrace of silence.</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!-- slideshow -->
<div id="wrapperStoreSlideShow">
    <?php print render($page['slideshow']); ?>
</div>
<!-- end slideshow -->

<div id="zazenBearEvents">
    <div class="container ">
        <div class="row">
            <div class="col-md-12 ">
                <h1> • zen painting gallery • </h1>
                <p>Visit our Zen painting Gallery where you will find harmony of peace and relaxation</p>
            </div>
        </div>
    </div>
</div>

<div id="wrapperStoreClearYourMind">
    <div class="col-md-6 leftStoreBlock"></div>
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
    include_once(DRUPAL_ROOT . '/' . $theme_path . '/templates/footer.tpl.php');
?>
