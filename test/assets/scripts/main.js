$(document).ready(function () {

    // JQUERY MASK FOR PHONE

    jQuery(document).ready(function () {
        $(".phonenumber").mask("+998 (11) 111 11 11");
    });

    // MOBILE MENU OPEN

    $(".hamburger").click(function () {
		$(".hamburger").toggleClass("is-active");
		$(".navigation").toggleClass("active");
	});

    $(".nav-links li a").click(function () {
		$(".navigation").removeClass("active");
        $(".hamburger").removeClass("is-active");
	});

  

    

    // LANGUAGE DROPDOWN

    // $(".lang-box").click(function () {
    //     $(".lang-box").toggleClass("active");
    // });

    // CAROUSELS

    $(".methods").owlCarousel({
        items: 1,
        dots: true,
        nav: true,
        loop: true,
        // autoplay: true,
        smartSpeed: 1000,
        mouseDrag: true,
        touchDrag: true,
        margin: 20
    });

    $(".news-carousel").owlCarousel({
        items: 3,
        dots: true,
        nav: true,
        loop: true,
        // autoplay: true,
        smartSpeed: 1000,
        mouseDrag: true,
        touchDrag: true,
        responsive: {

            0: {

                items: 1,
                margin: 20,
                slideBy: 1,

            },

            576: {

                items: 2,
                margin: 20,
                slideBy: 2,

            },
            992: {

                items: 3,
                margin: 30,
                slideBy: 3

            },

        }
    });

    $(".inner-carousel").owlCarousel({
        items: 1,
        dots: true,
        nav: false,
        loop: true,
        autoplay: true,
        smartSpeed: 1000,
        mouseDrag: true,
        touchDrag: true,
        margin: 20
    });
});

// IMAGE AUTO ALT

$(document).ready(function () {
    $("img").each(function () {
        var $img = $(this);
        var filename = $img.attr("src");
        if (typeof attr == typeof undefined || attr == false) {
            $img.attr(
                "alt",
                filename.substring(
                    filename.lastIndexOf("/") + 1,
                    filename.lastIndexOf(".")
                )
            );
        }
    });
});