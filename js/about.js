(function($){
    var expandHalf = function(height) {
        var formattedHeight = height + "px"
        $('.expand').addClass('l-profile--half-expanded')
        $('.expand').css({paddingBottom: height})
    }
    var expandFull = function() {
        setTimeout(shrinkColumn, 500)
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
        $('.l-profile--shrunk').removeClass('l-profile--shrunk')
        $('.l-profile--expanded').css({paddingBottom: 0})
        $('.l-profile--expanded').removeClass('l-profile--expanded')

    }

    var socialHeight = $('.c-profile__social').height() + 40
    
    $(document).ready(function() {
        $('.expand').click(function() {
            expandHalf(socialHeight)
            setTimeout(expandFull, 600)
        })
        $('.c-profile__close').click(function() {
            closeExpanded(event)
        })
    })
})(jQuery)