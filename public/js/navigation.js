let navbarDefault =$('.main--nav').offset().top;

$(window).on('scroll', () => {
    const $nav = $('.main--nav');
    const windowTop = $(document).scrollTop();

    if (navbarDefault <= windowTop) $($nav).addClass('nav--fixed');
    else if (navbarDefault >= windowTop) $($nav).removeClass('nav--fixed');
});