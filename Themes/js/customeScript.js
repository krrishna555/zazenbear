(function ($) {


    $(window).load(function () {


        // function resizedWindow(){
        //     $("#product_img").elevateZoom({
        //       responsive:'true',
        //        zoomType: 'inner',
        //        containLensZoom: true,
        //        gallery: 'wrapperThumbnailImages',
        //        cursor: 'crosshair',
        //        galleryActiveClass: 'active',
        //     });
        // }

        // var reRenderZoom;
        // window.onresize = function(){
        //   clearTimeout(reRenderZoom);
        //   reRenderZoom = setTimeout(resizedWindow, 250);
        // };


        $('.popup-youtube').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
        $('.popup-youtube').on('click', function (e) {
            return false;
        });

        // add placeholder
        $("#edit-mergevars-email").attr("placeholder", "Enter your email to receive your Daily Zen");
        //

        // add attribute
        $(".views-row-odd.views-row-first .panel.panel-default .panel-heading .panel-title > a").attr("aria-expanded", "true");


        //    $("#accordion.panel-group .views-row-odd.views-row-first .panel-collapse.collapse").addClass("in");

        //    $("#accordion .views-row-odd.views-row-first h4.panel-title").addClass("openIcon");


        // $( "#accordion .panel-title > a" ).each(function() {
        // 	$( this ).click(function() {

        // 		$("#accordion h4.panel-title").removeClass("openIcon");
        // 		// close panel
        // 		if( $(this).parent().parent().next().hasClass("in") ){
        // 			$("#accordion.panel-group .panel-collapse.collapse").removeClass("in");

        // 		} else {
        // 			// open panel
        // 			$("#accordion.panel-group .panel-collapse.collapse").removeClass("in");
        // 			$(this).parent().parent().next().addClass("in");

        // 			$(this).parent().addClass("openIcon");

        // 		}

        // 	});
        // });


        //

        $.each($("#imageProduct.col-md-6 .row"), function () {
            var imageBoxHeight = $(this).find(".zoomWrapper").outerHeight();
            var imageBoxWidth = $(this).find(".zoomWrapper").outerWidth();
            $("#imageBox.col-md-6.col-md-offset-3").css({
                "height": imageBoxHeight,
                "width": imageBoxWidth,
                "float": "none",
                "margin-left": "auto",
                "margin-right": "auto",

            });
        });


        $(".campaignImageWrapper > a > span").css({
            "height": ($("#wrapperZenUser").find(".col-md-6 img").outerHeight() / 2),

        });
        $(".campaignImageWrapper > a > span").css({
            "width": $("#wrapperZenUser").find(".col-md-6 img").outerWidth(),

        });

        // making div clickable
        // removed #wrapperMarqueeGift on 9/18/2015
        $(".productcategories, .jewelryWrapperItemInfo, .collectionfeaturedimage, .collectionimage, .giftsubcategories, #leftFooterJewelry, #rightFooterJewelry-1, #rightFooterJewelry-2, #leftPiece, #topPiece, #topPieceRight, #bottomPieceRight").click(function () {
            window.location = $(this).find("a").attr("href");
            return false;
        });


        $(".collectionfeaturedimage").css('background-image', 'url(' + $(".collectionfeaturedimage img").attr("src") + ')');
        $(".jumbotron").css('background-image', 'url(' + $("#ourStoryBgImage img").attr("src") + ')');
        $("#visit.jumbotron").css('background-image', 'url(' + $("#visit.jumbotron img").attr("src") + ')');

        $("#leftFooterJewelry").css('background-image', 'url(' + $("#leftFooterJewelry img").attr("src") + ')');

        $("#leftFooterJewelry").hover(
            function () {
                $(this).css('background', 'linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(' + $("#leftFooterJewelry img").attr("src") + ')');
                $(this).css('background', '-webkit-linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(' + $("#leftFooterJewelry img").attr("src") + ')');
            }, function () {
                $("#leftFooterJewelry").css('background-image', 'url(' + $("#leftFooterJewelry img").attr("src") + ')');
            }
        );

        $("#rightFooterJewelry-1").css('background-image', 'url(' + $("#rightFooterJewelry-1 img").attr("src") + ')');

        $("#rightFooterJewelry-1").hover(
            function () {
                $(this).css('background', 'linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(' + $("#rightFooterJewelry-1 img").attr("src") + ')');
                $(this).css('background', '-webkit-linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(' + $("#rightFooterJewelry-1 img").attr("src") + ')');
            }, function () {
                $("#rightFooterJewelry-1").css('background-image', 'url(' + $("#rightFooterJewelry-1 img").attr("src") + ')');
            }
        );

        $("#rightFooterJewelry-2").css('background-image', 'url(' + $("#rightFooterJewelry-2 img").attr("src") + ')');

        $("#rightFooterJewelry-2").hover(
            function () {
                $(this).css('background', 'linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(' + $("#rightFooterJewelry-2 img").attr("src") + ')');
                $(this).css('background', '-webkit-linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(' + $("#rightFooterJewelry-2 img").attr("src") + ')');
            }, function () {
                $("#rightFooterJewelry-2").css('background-image', 'url(' + $("#rightFooterJewelry-2 img").attr("src") + ')');
            }
        );


        // wind resize
        if ($(window).width() < 785) {
            $('#desktopNavigation').hide();
            $('#mobileNavigation').show();

            $('body.front .bodyContentMarginTop').css({
                'margin-top': '67px'
            });
        } else if ($(window).width() >= 785) {
            $('#desktopNavigation').show();
            $('#mobileNavigation').hide();

            $('body.front .bodyContentMarginTop').css({
                'margin-top': '105px'
            });
        }

        $(window).resize(function () {

            if ($(window).width() < 785) {
                $('#desktopNavigation').hide();
                $('#mobileNavigation').show();

                $('body.front .bodyContentMarginTop').css({
                    'margin-top': '67px'
                });

            } else if ($(window).width() >= 785) {

                $('#desktopNavigation').show();
                $('#mobileNavigation').hide();

                $('body.front .bodyContentMarginTop').css({
                    'margin-top': '105px'
                });

            }

            $(".campaignImageWrapper > a > span").css({
                "height": ($("#wrapperZenUser").find(".col-md-6 img").outerHeight() / 2),
            });
            $(".campaignImageWrapper > a > span").css({
                "width": $("#wrapperZenUser").find(".col-md-6 img").outerWidth(),
            });

            $("#imageBox.col-md-6.col-md-offset-3").css({
                "height": $("#imageProduct.col-md-6 .row").find(".zoomWrapper").outerHeight(),
                "width": $(this).find(".zoomWrapper").outerWidth()
            });


            $(".wrapperBigFooterLeft").css({
                "height": $(".wrapperBigFooter").find(".wrapperBigFooterRight").outerHeight()
            });


            $("#leftFooterJewelry").css({
                "height": $("#wrapperFooterJewelry").find("#rightFooterJewelry").outerHeight(),
            });


            $.each($(".giftsubcategories"), function () {

                var imageHeight = $(this).find(".giftsubcategoriesImage img").outerHeight();


                $(".giftsubcategoriesInfo").css({
                    "height": (imageHeight + 0),
                    "margin-top": -(imageHeight + 0),
                    "position": "relative",
                });
                $(".giftsubcategories").css({
                    "height": (imageHeight + 0),

                });

                $(".giftsubcategoriesImage").css({
                    "height": (imageHeight + 0),

                });
                $(".giftsubcategoriesInfo h1.bigText").css({
                    marginTop: (imageHeight / 2.5),

                });

                if (window.matchMedia('(max-width: 1224px)').matches) {

                    $(".giftsubcategories").css({
                        "width": "100%",
                    });

                } else {
                    $("#wrapperGiftList .row:nth-child(1) .giftsubcategories:nth-child(1), #wrapperGiftList .row:nth-child(1) .giftsubcategories:nth-child(4), #wrapperGiftList .row:nth-child(2) .giftsubcategories:nth-child(2), #wrapperGiftList .row:nth-child(2) .giftsubcategories:nth-child(3), #wrapperGiftList .row:nth-child(3) .giftsubcategories:nth-child(1), #wrapperGiftList .row:nth-child(3) .giftsubcategories:nth-child(4), #wrapperGiftList .row:nth-child(4) .giftsubcategories:nth-child(2), #wrapperGiftList .row:nth-child(4) .giftsubcategories:nth-child(3), #wrapperGiftList .row:nth-child(5) .giftsubcategories:nth-child(1), #wrapperGiftList .row:nth-child(5) .giftsubcategories:nth-child(4), #wrapperGiftList .row:nth-child(6) .giftsubcategories:nth-child(2), #wrapperGiftList .row:nth-child(6) .giftsubcategories:nth-child(3)").css({
                        "width": "16.6%",
                    });

                    $("#wrapperGiftList .row:nth-child(1) .giftsubcategories:nth-child(2), #wrapperGiftList .row:nth-child(1) .giftsubcategories:nth-child(3), #wrapperGiftList .row:nth-child(2) .giftsubcategories:nth-child(1), #wrapperGiftList .row:nth-child(2) .giftsubcategories:nth-child(4), #wrapperGiftList .row:nth-child(3) .giftsubcategories:nth-child(2), #wrapperGiftList .row:nth-child(3) .giftsubcategories:nth-child(3), #wrapperGiftList .row:nth-child(4) .giftsubcategories:nth-child(1), #wrapperGiftList .row:nth-child(4) .giftsubcategories:nth-child(4), #wrapperGiftList .row:nth-child(5) .giftsubcategories:nth-child(2), #wrapperGiftList .row:nth-child(5) .giftsubcategories:nth-child(3), #wrapperGiftList .row:nth-child(6) .giftsubcategories:nth-child(1), #wrapperGiftList .row:nth-child(6) .giftsubcategories:nth-child(4)").css({
                        "width": "33.33%",
                    });
                }

            });

        });
        // end windows resize

        $(window).scroll(function () {
            var top_offset = $(window).scrollTop();
            if (top_offset == 0) {
                $('.scrollToTop').removeClass('show');
            } else {
                $('.scrollToTop').addClass('show');
            }

        });

        // scroll to top action
        $('.scrollToTop button').on('click', function (event) {
            event.preventDefault();
            $('html, body').animate({scrollTop: 0}, 'slow');
        });

        $("header ul.menu, footer ul.menu").addClass("nav navbar-nav");
        $("header ul.menu li, footer ul.menu li").removeClass("menu__item is-leaf last first leaf");
        $("header ul.menu li a, footer ul.menu li a").removeClass("menu__link");
        $("body.page-cart h1#page-title").addClass("bulletPoint bigText");
        $("body.page-sitemap #site-map, #contact-site-form").addClass("container");
        $("#contact-site-form > div").addClass("col-md-6 col-md-offset-3");
        $(".changeImage:first-child a").addClass("active");
        $(".not-logged-in.page-wishlist form#uc-wishlist-view-form").addClass("container");
        $(".subcategoriesProductsWrapper").addClass("col-md-3");
        $(".logged-in.page-wishlist form#uc-wishlist-view-form").addClass("container");

        $('input#edit-keys[type="text"]').each(function () {
            var $this = $(this);
            $this.attr("placeholder", $this.attr("value")).removeAttr("value");
        });


        $('#imageProduct .item ').click(function () {

            // Remove .active from all images then add to the clicked one
            $('#imageProduct .item ').removeClass('active');
            $(this).addClass('active');
        });


        $(".wrapperBigFooterLeft").css({
            "height": $(".wrapperBigFooter").find(".wrapperBigFooterRight").outerHeight()
        });


        $("#leftFooterJewelry").css({
            "height": $("#rightFooterJewelry").outerHeight()
        });


        $.each($(".giftsubcategories"), function () {

            var imageHeight = $(this).find(".giftsubcategoriesImage img").outerHeight();

            $(".giftsubcategoriesInfo").css({
                "height": (imageHeight + 0),
                "margin-top": -(imageHeight + 0),
                // "display": "block",
                "position": "relative",
            });
            $(".giftsubcategories").css({
                "height": (imageHeight + 0),

            });
            $(".giftsubcategoriesImage").css({
                "height": (imageHeight + 0),

            });
            $(".giftsubcategoriesInfo h1.bigText").css({
                marginTop: (imageHeight / 2.5),

            });

            if (window.matchMedia('(max-width: 1224px)').matches) {

                $(".giftsubcategories").css({
                    "width": "100%",
                });

            } else {
                $("#wrapperGiftList .row:nth-child(1) .giftsubcategories:nth-child(1), #wrapperGiftList .row:nth-child(1) .giftsubcategories:nth-child(4), #wrapperGiftList .row:nth-child(2) .giftsubcategories:nth-child(2), #wrapperGiftList .row:nth-child(2) .giftsubcategories:nth-child(3), #wrapperGiftList .row:nth-child(3) .giftsubcategories:nth-child(1), #wrapperGiftList .row:nth-child(3) .giftsubcategories:nth-child(4), #wrapperGiftList .row:nth-child(4) .giftsubcategories:nth-child(2), #wrapperGiftList .row:nth-child(4) .giftsubcategories:nth-child(3), #wrapperGiftList .row:nth-child(5) .giftsubcategories:nth-child(1), #wrapperGiftList .row:nth-child(5) .giftsubcategories:nth-child(4), #wrapperGiftList .row:nth-child(6) .giftsubcategories:nth-child(2), #wrapperGiftList .row:nth-child(6) .giftsubcategories:nth-child(3)").css({
                    "width": "16.6%",
                });

                $("#wrapperGiftList .row:nth-child(1) .giftsubcategories:nth-child(2), #wrapperGiftList .row:nth-child(1) .giftsubcategories:nth-child(3), #wrapperGiftList .row:nth-child(2) .giftsubcategories:nth-child(1), #wrapperGiftList .row:nth-child(2) .giftsubcategories:nth-child(4), #wrapperGiftList .row:nth-child(3) .giftsubcategories:nth-child(2), #wrapperGiftList .row:nth-child(3) .giftsubcategories:nth-child(3), #wrapperGiftList .row:nth-child(4) .giftsubcategories:nth-child(1), #wrapperGiftList .row:nth-child(4) .giftsubcategories:nth-child(4), #wrapperGiftList .row:nth-child(5) .giftsubcategories:nth-child(2), #wrapperGiftList .row:nth-child(5) .giftsubcategories:nth-child(3), #wrapperGiftList .row:nth-child(6) .giftsubcategories:nth-child(1), #wrapperGiftList .row:nth-child(6) .giftsubcategories:nth-child(4)").css({
                    "width": "33.33%",
                });
            }
        });


// slideshow

        function toggleChevron(e) {
            $(e.target)
                .prev('.panel-heading')
                .find("i.indicator")
                .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
        }

        $('#accordion').on('hidden.bs.collapse', toggleChevron);
        $('#accordion').on('shown.bs.collapse', toggleChevron);

        //validation form
        jQuery.validator.setDefaults({
            debug: false,
            success: "valid"
        });
        $("#user-register-form").validate({
            rules: {
                "pass[pass1]": {
                    required: true,
                    minlength: 8
                },

                "pass[pass2]": {
                    equalTo: "#edit-pass-pass1"
                },
            }
        });
    });
})(jQuery);
