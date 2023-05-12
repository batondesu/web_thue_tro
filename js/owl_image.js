function runOwlCarousel() {
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

function addImage(img, link) {
	var newDiv = `<div class='item'>
						<a target='_blank' href=` + link + `>
							<img src=` + img + `>
						</a>
					</div>`;
	var image = document.getElementsByClassName('owl-carousel')[0];
	//if ( image != null ) console.log("dcm ao that day")
	image.innerHTML += newDiv;
}

function joinImage(count, list) {
    for (var i = 1 ; i <= count ; ++i) {
        addImage(list[i] , list[i]);
		//console.log(list[i], '\n');
    }
}
