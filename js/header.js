 (function($) {
    var xs = window.matchMedia( "(max-width: 575.98px)" );
    var showNav = function() {
        $('.c-main-nav__menu').removeClass('l-main-nav__menu--hidden')
    }
    
    var toggleNavMobile = function() {
        $('.c-main-nav__menu-container').toggleClass('l-main-nav__menu-container--hidden')
        $('.c-main-nav__menu').toggleClass('l-main-nav__menu--hidden')
        $('.c-main-nav__menu-toggle').toggleClass('c-main-nav__menu-toggle--clicked')
    }

    $(document).ready(function() {
        if(xs.matches) {
            $('.c-main-nav__menu-toggle').click(toggleNavMobile)
        } else {
            $(document).mousemove(function() {showNav()})
        }
    })
})(jQuery)

    