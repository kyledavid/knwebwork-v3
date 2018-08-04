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
        setTimeout(cleanUpExpansion, 1050)
    }

    var cleanUpExpansion = function() {
        $('.l-profile--expanded').removeClass('l-profile--expanded')
        $('.l-profile--unshrinking').removeClass('l-profile--unshrinking')
        $('.l-profile--shrunk').removeClass('l-profile--shrunk')
        $('.l-profile--half-expanded').css({paddingBottom: 0})
        setTimeout(function(){
            $('.l-profile--half-expanded').removeClass('l-profile--half-expanded')
        }, 200)
        
    }

    var socialHeight = $('.c-profile__social').height() + 40
    
    $(document).ready(function() {
        $('.expand').click(function() {
            expandHalf(socialHeight)
            setTimeout(expandFull, 100)
        })
        $('.c-profile__close').click(function() {
            closeExpanded(event)
        })
    })
})(jQuery)