window.onload = function() {
    //khoitao();

    // thêm banner
    addBanner("images/banner/banner1.jpg" , "images/banner/banner1.jpg");
    for (var i = 2 ; i <= 5 ; ++i) {
        var link = "images/banner/banner" + i + ".jpg";
        addBanner(link , link);
    }

    // chạy owlcarousel
    var owl = $('.owl-carousel');
	owl.owlCarousel({
		items: 1,
		margin: 0,
		center: true,
		loop: true,
		smartSpeed: 550,
		autoplay: true,
		autoplayTimeout: 5000
	});

}

function addBanner(img, link) {
	var newDiv = `<div class='item'>
						<a target='_blank' href=` + link + `>
							<img src=` + img + `>
						</a>
					</div>`;
	var banner = document.getElementsByClassName('owl-carousel')[0];
	banner.innerHTML += newDiv;
}

