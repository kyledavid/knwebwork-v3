(function($){
    var showTitle = function() {
        $('.l-page-header').css({right: 0, opacity: 1, transitionDuration: '400ms', transitionProperty: 'right, opacity',})
    }
    var showForm = function() {
        $('.l-work-form').css({right: 0, opacity: 1, transitionDuration: '800ms',})
    }

    $(document).ready(function() {
        setTimeout(showTitle, 400)
        setTimeout(showForm, 800)
    })
})(jQuery)