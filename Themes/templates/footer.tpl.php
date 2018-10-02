<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4"><?php print render($page['footerAddress']);?></div>
            <div class="col-sm-12 col-md-8">
                <!--
                <div class="row">
                    <div class="col-md-12"><?php print render($page['footerMenu1']);?></div>
                </div>
                -->
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8"><?php print render($page['footerMenu2']);?></div>
                    <div class="col-sm-12 col-md-8 col-lg-4"><?php print render($page['copywrite']);?></div>
                </div>
                <div class="row">
                    <div class="col-md-9"><?php print render($page['signup']);?></div>
                    <div class="col-md-3" style="padding-left: 0px;"><?php print render($page['socialMedia']);?></div>
                </div>
            </div>
        </div>
    </div>
</footer>