window.onload = function() {
    //khoitao();

    // gửi yêu cầu đến file PHP bằng AJAX
    var link_image = "";
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // xử lý dữ liệu trả về từ PHP
            var data = this.responseText;
            link_image = data;
            console.log(link_image);
        }
    };
    xhr.open('GET', 'admin/class/getimage.php', true);
    xhr.send();
    
    
    
    
    //console.log(message.length);
    /*for(var i = 0; i < message.length()  ; ++i) {
        var substr = message.slice(i, i + 3);
        if ( substr == "http" ) {
            addImage(link_image, link_image);
            link_image = "";
        }
        link_image += message[i];

        console.log(link_image);
    }*/

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
	var images = document.getElementsByClassName('owl-carousel')[0];
	images.innerHTML += newDiv;
}
