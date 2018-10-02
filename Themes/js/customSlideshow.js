(function($){
	$(window).load(function() {

			setTimeout(function (){
				var imgHeight = $("#slideShowHomePage").find(".homeslideImage img").first().height();
				$(".flex-nav-container .flexslider").css({
						"height": imgHeight
					})
			},50);
			setTimeout(function (){
				var imgHeight = $("#slideShowHomePage").find(".homeslideImage img").first().height();
				$(".flex-nav-container .flexslider").css({
						"height": imgHeight
					})
			},100);
				setTimeout(function (){
				var imgHeight = $("#slideShowHomePage").find(".homeslideImage img").first().height();
				$(".flex-nav-container .flexslider").css({
						"height": imgHeight
					})
			},500)
			setTimeout(function (){
				var imgHeight = $("#slideShowHomePage").find(".homeslideImage img").first().height();
				$(".flex-nav-container .flexslider").css({
						"height": imgHeight
					})
			},800);
				setTimeout(function (){
				var imgHeight = $("#slideShowHomePage").find(".homeslideImage img").first().height();
				$(".flex-nav-container .flexslider").css({
						"height": imgHeight
					})
			},1000)

	})
	$( window ).resize(function() {
		 $(".flex-nav-container .flexslider").css({
				"height": $("#slideShowHomePage").find("li").first().find(".homeslideImage img").outerHeight()
		});
	})
})(jQuery)