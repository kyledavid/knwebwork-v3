(function($){
    var showTitle = function() {
        $('.l-page-header').removeClass('l-page-header--hidden');
    }
    var showForm = function() {
        $('.l-work-form').removeClass('l-work-form--hidden')
    }

    $(document).ready(function() {
        setTimeout(showTitle, 400)
        setTimeout(showForm, 800)
    })
})(jQuery)