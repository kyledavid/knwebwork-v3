 (function($) {
    var xs = window.matchMedia( "(max-width: 575.98px)" );
    var showNav = function() {
        $('.c-main-nav__menu').removeClass('l-main-nav__menu--hidden')
    }
    
    var showNavMobile = function() {
        $('.c-main-nav__menu-container').removeClass('l-main-nav__menu-container--hidden')
        $('.c-main-nav__menu').removeClass('l-main-nav__menu--hidden')
    }

    $(document).ready(function() {
        if(xs.matches) {
            setTimeout(showNavMobile, 300);
        } else {
            $(document).mousemove(function() {showNav()})
        }
    })
})(jQuery)

    