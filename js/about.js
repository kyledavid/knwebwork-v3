(function($){
    var expandColumn = function() {
        $('.expand').addClass('l-profile--expanded');
    }
    var shrinkColumn = function() {
        $('.shrink').addClass('l-profile--shrunk');
    }
    
    $(document).ready(function() {
        $('.expand').click(function() {
            expandColumn();
            shrinkColumn();
        })
    })
})(jQuery)