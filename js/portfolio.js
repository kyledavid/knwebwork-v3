(function($){
    var showTitle = function() {
        $('.l-page-header').css({right: 0, opacity: 1, transitionDuration: '400ms', transitionProperty: 'right, opacity',})
    }
    
    $(document).ready(function() {
        setTimeout(showTitle, 400)
    })
})(jQuery)