window.onload = function() {
    khoitao();

    // thêm banner
    addBanner("images/banner/banner0.png" , "images/banner/banner0.png");
    for (var i = 1 ; i <= 5 ; ++i) {
        var link = "img/banners/banner" + i + ".png";
        addBanner(link , link);
    }

    // chạy owlcarousel
    var owl = $('.owl-carousel');
	owl.owlCarousel({
		items: 1,
		margin: 0,
		center: true,
		loop: true,
		smartSpeed: 450,
		autoplay: true,
		autoplayTimeout: 5000
	});

}