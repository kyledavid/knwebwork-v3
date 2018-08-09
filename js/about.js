(function($){
    var expandHalf = function(height, orientation="left") {
        var formattedHeight = height + "px"
        var cName = '.c-profile--' + orientation
        $(cName).addClass('l-profile--half-expanded')
        $(cName).css({paddingBottom: height})
    }

    var expandFull = function(orientation='left', orientation2='right') {
        var contracting = $('.l-profile--contracting')

        if (!contracting.length) {
            shrinkColumn(orientation2)
            expandColumn(orientation)
        }
    }

    var shrinkColumn = function(orientation='right') {
        var cName = '.c-profile--' + orientation
        $(cName).addClass('l-profile--shrunk')
    }

    var expandColumn = function(orientation='left') {
        var cName = '.c-profile--' + orientation
        $(cName).addClass('l-profile--expanded')
    }

    var stopProp = function(e) {
        e.stopPropagation()
    }

    var closeExpanded = function(e) {
        e.stopPropagation()
        $('.l-profile--shrunk').addClass('l-profile--unshrinking')
        $('.l-profile--expanded').addClass('l-profile--contracting')
        $('.l-profile--expanded').removeClass('l-profile--expanded')
        setTimeout(cleanUpExpansion, 600)
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
        $('.c-profile--right').click(function() {
            expandFull('right', 'left')
        })
        $('.c-profile__close').click(function() {
            closeExpanded(event)
        })
    })
})(jQuery)