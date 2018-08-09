(function($){
    var expandHalf = function(height) {
        var formattedHeight = height + "px"
        $('.c-profile--left').addClass('l-profile--half-expanded')
        $('.c-profile--left').css({paddingBottom: height})
    }

    var expandFull = function() {
        shrinkColumn()
        expandColumn()
    }

    var shrinkColumn = function() {
        $('.c-profile--right').addClass('l-profile--shrunk')
    }

    var expandColumn = function() {
        $('.c-profile--left').addClass('l-profile--expanded')
    }

    var closeExpanded = function(e) {
        e.stopPropagation()
        $('.l-profile--shrunk').addClass('l-profile--unshrinking')
        $('.l-profile--expanded').addClass('l-profile--contracting')
        $('.l-profile--expanded').removeClass('l-profile--expanded')
        setTimeout(cleanUpExpansion, 800)
    }

    var cleanUpExpansion = function() {
        $('.l-profile--shrunk').removeClass('l-profile--shrunk')
        $('.l-profile--unshrinking').removeClass('l-profile--unshrinking')
        $('.l-profile--contracting').removeClass('l-profile--contracting')
    }

    var socialHeight = $('.c-profile__social').height() + 40
    
    $(document).ready(function() {
        $('.c-profile--left').click(function() {
            expandFull()
        })
        $('.c-profile__close').click(function() {
            closeExpanded(event)
        })
    })
})(jQuery)