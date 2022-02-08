$(document).ready(function () {
  // JQUERY MASK FOR PHONE

  jQuery(document).ready(function () {
    $(".phonenumber").mask("+998 (11) 111 11 11");
  });

  // MOBILE MENU OPEN

  $(".mobile-btns").click(function () {
    $(".navigation").toggleClass("active");
    $(".hamburger").toggleClass("is-active");
  });

  $(".partner-btn").click(function () {
    $(".modal").addClass("active");
  });
  $(".exit-modal").click(function () {
    $(".modal").removeClass("active");
  });

  let menuLinks = document.querySelectorAll(".links .inner a");

  const runCounter = () => {
    const counters = document.querySelectorAll(".running-number");
    const speed = 10000;

    counters.forEach((counter) => {
      const animate = () => {
        const value = +counter.getAttribute("data-value");
        const data = +counter.innerText;
        const time = value / speed;
        if (data < value) {
          counter.innerText = Math.ceil(data + time);
          setTimeout(animate, 1);
        } else {
          counter.innerText = value;
        }
      };
      animate();
    });
  };

  runCounter();

  menuLinks.forEach((link) => {
    link.addEventListener("click", () => {
      document.querySelector(".navigation").classList.remove("active");
      document.querySelector(".hamburger").classList.remove("is-active");
    });
  });
  // ANIMATE ON SCROLL

  AOS.init();

  $(".theme").click(function () {
    $("body").fadeIn("slow", function () {
      $("body").toggleClass("dark");
    });
  });

  // FULLPAGE ANIMATION

  if ($(window).width() > 1200) {
    new fullpage("#fullpage", {
      //options here
      autoScrolling: true,
      // scrollHorizontally: true,
      // fadingEffect: true,
      // keyboardScrolling: true,
      // parallax: true,
      navigation: true,
      // navigationPosition: left,
      // showActiveTooltip: true,
      navigationTooltips: [
        "Главная",
        "О нас",
        "Услуги",
        "Маркетинг",
        "Команда",
        "Партнёры",
        "Отзывы",
        "Заявка",
        "Контакты",
      ],
      anchors: [
        "section1",
        "section2",
        "section3",
        "section4",
        "section5",
        "section6",
        "section7",
        "section8",
        "section9",
      ],
      scrollingSpeed: 700,
      afterLoad: function () {
        $(".fp-table.active .aos-init").addClass("aos-animate");
      },
    });
  }

  // CAROUSELS

  $(".service-carousel").owlCarousel({
    animateIn: "fadeIn",
    items: 3,
    dots: false,
    nav: false,
    loop: true,
    autoplay: true,
    smartSpeed: 1000,
    mouseDrag: false,
    touchDrag: true,
    autoplayHoverPause: true,
    center: true,
    // responsive: {
    // 	0: {
    // 		items: 1,
    // 	},

    // 	768: {
    // 		items: 2,
    // 	},
    // },
  });
  $(".next").click(() => {
    $(".prev").css("display", "none");
    $(".service-carousel").trigger("next.owl.carousel");
    setTimeout(() => {
      $(".prev").css("display", "unset");
    }, 1300);
  });
  $(".prev").click(() => {
    $(".next").css("display", "none");
    $(".service-carousel").trigger("prev.owl.carousel");
    setTimeout(() => {
      $(".next").css("display", "unset");
    }, 1100);
  });
  $(".service-carousel").on("changed.owl.carousel", function (event) {
    let servicesInfo = document.querySelectorAll(".info-services");
    for (service of servicesInfo) {
      service.classList.remove("active");
    }
    if (event.item.index === 6) {
      servicesInfo[13].classList.add("active");
      document.querySelector(".counter .first").innerHTML =
        event.item.index - 5;
    } else {
      servicesInfo[event.item.index - 7].classList.add("active");
      document.querySelector(".counter .first").innerHTML =
        event.item.index - 6;
    }
  });

  $(".team-carousel").owlCarousel({
    // items: 5,
    dots: false,
    nav: false,
    loop: true,
    autoplay: true,
    mouseDrag: true,
    center: true,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    // rewind: false,
    // touchDrag: true,
    responsive: {
      0: {
        items: 3,
      },
      500: {
        items: 5,
      },
    },
  });
  $(".team-carousel").on("changed.owl.carousel", function (event) {
    let membersInfo = document.querySelectorAll(".member");
    // console.log(event.item.index);
    for (member of membersInfo) {
      member.classList.remove("active");
    }
    if (event.item.index === 5) {
      membersInfo[0].classList.add("active");
      document.querySelector(".team-counter .first").innerHTML =
        event.item.index - 4;
      // console.log(event.item.index);
    } else {
      membersInfo[event.item.index - 5].classList.add("active");
      document.querySelector(".team-counter .first").innerHTML =
        event.item.index - 4;
    }
  });

  $(".second-carousel").owlCarousel({
    items: 3,
    dots: false,
    nav: false,
    loop: true,
    rtl: true,
    autoplay: true,
    autoplaySpeed: 2000,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    slideTransition: "linear",
    smartSpeed: 1000,
    mouseDrag: true,
    touchDrag: true,
    autoplayHoverPause: false,
    margin: 10,
  });
  $(".third-carousel").owlCarousel({
    items: 3,
    dots: false,
    nav: false,
    loop: true,
    autoplay: true,
    autoplaySpeed: 2000,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    slideTransition: "linear",
    smartSpeed: 1000,
    mouseDrag: true,
    touchDrag: true,
    autoplayHoverPause: false,
    margin: 10,
  });

  $(".feedbacks-carousel").owlCarousel({
    dots: false,
    nav: false,
    loop: true,
    autoplay: false,
    smartSpeed: 1000,
    mouseDrag: false,
    touchDrag: true,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        margin: 20,
        center: false,
      },
      900: {
        center: true,
        margin: 50,
        items: 2.5,
      },
    },
  });
  $(".next-feedback").click(() => {
    // $(".prev-feedback").css("display", "none");
    $(".feedbacks-carousel").trigger("next.owl.carousel");
    // setTimeout(() => {
    // 	$(".prev-feedback").css("display", "unset");
    // }, 1100);
  });
  $(".prev-feedback").click(() => {
    $(".next-feedback").css("display", "none");
    $(".feedbacks-carousel").trigger("prev.owl.carousel");
    setTimeout(() => {
      $(".next-feedback").css("display", "unset");
    }, 1100);
  });
});

// IMAGE AUTO ALT
