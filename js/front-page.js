(function($){
    var showTitle = function() {
        $('.c-hero__title').css({right: 0, opacity: 1, transitionDuration: '1200ms', transitionProperty: 'right, opacity',})
        $('.c-hero__subtitle').css({left: 0, opacity: 1, transitionDuration: '1200ms',})
    }
    var showIntro = function() {
        $('.c-hero__intro').css({right: 0, opacity: 1, transitionDuration: '800ms',})
    }
    var showCTA = function() {
        $('.c-hero__cta').css({left: 0, opacity: 1, transitionDuration: '600ms', transitionProperty: 'left, opacity',})
    }
    var showNav = function() {
        $('.c-main-nav__menu').css({left: 0, opacity: 1, transitionDuration: '800ms',})
    }

    $(document).ready(function() {
        setTimeout(showIntro, 400)
        setTimeout(showTitle, 1600)
        setTimeout(showCTA, 2900)
        setTimeout(showNav, 5000)
        $(document).click(function() {
            showIntro()
            showTitle()
            showCTA()
        })
        $(document).mousemove(function() {showNav()})
       
    })

})(jQuery)