$(document).ready(function() {
    (function($){
        "use_strict";
        $("#navigation a").on('click', function(event) {
                if(this.hash !== ""){

                    var $anchor = $(this.hash);

                    $('html, body').stop().animate({
                        scrollTop: ($($anchor).offset().top - 50)
                    }, 1250, 'easeInOutExpo');

                    event.preventDefault();
                }
            });

        $("body").scrollspy({target: '#navigation', offset: 52});

        $("#navigation").affix({
            offset: {
                top: 120
            }
        })

    })(jQuery);
});
