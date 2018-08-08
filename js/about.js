(function($){
    var expandHalf = function(height) {
        var formattedHeight = height + "px"
        $('.expand').addClass('l-profile--half-expanded')
        $('.expand').css({paddingBottom: height})
    }

    var expandFull = function() {
        shrinkColumn()
        expandColumn()
    }

    var shrinkColumn = function() {
        $('.shrink').addClass('l-profile--shrunk')
    }

    var expandColumn = function() {
        $('.expand').addClass('l-profile--expanded')
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
        $('.expand').click(function() {
            expandFull()
        })
        $('.c-profile__close').click(function() {
            closeExpanded(event)
        })
    })
})(jQuery)