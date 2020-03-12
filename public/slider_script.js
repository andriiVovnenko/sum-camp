$('.slider').slick({
    // slidesPerRow: 3,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 3000,
    centerMode: true,
    centerPadding: '0px',
    dots: true,
    pauseOnHover: true,
    speed: '800',
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]


});

// var filtered = false;
//
// $('.js-filter').on('click', function(){
//     if (filtered === false) {
//         $('.filtering').slick('slickFilter',':even');
//         $(this).text('Unfilter Slides');
//         filtered = true;
//     } else {
//         $('.filtering').slick('slickUnfilter');
//         $(this).text('Filter Slides');
//         filtered = false;
//     }
// });
