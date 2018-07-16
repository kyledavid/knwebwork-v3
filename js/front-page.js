(function($){
    var showTitle = function() {
        $('.c-hero__title').removeClass('l-hero__title--hidden')
        $('.c-hero__subtitle').removeClass('l-hero__subtitle--hidden')
    }

    var showIntro = function() {
        $('.c-hero__intro').removeClass('l-hero__intro--hidden')
    }
    var showCTA = function() {
        $('.c-hero__cta').removeClass('l-hero__cta--hidden')
    }

    $(document).ready(function() {
        setTimeout(showIntro, 400)
        setTimeout(showTitle, 1600)
        setTimeout(showCTA, 2900)
        $(document).click(function() {
            showIntro()
            showTitle()
            showCTA()
        })      
    })

})(jQuery)