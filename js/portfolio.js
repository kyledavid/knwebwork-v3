(function($){
    var showTitle = function() {
        $('.l-page-header').removeClass('l-page-header--hidden');
    }
    
    $(document).ready(function() {
        setTimeout(showTitle, 900)
    })
})(jQuery)