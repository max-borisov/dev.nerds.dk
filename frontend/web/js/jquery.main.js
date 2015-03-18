jQuery(document).ready(function () {
    jQuery('#nav').meanmenu({
        meanScreenWidth: "900"
    });

    //tab active
    $('#reg-tab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })

    $('#nav>ul>li>.item-holder').hover(
        function() {
            $(this).find('ul').stop(true, true);
            $(this).find('ul').slideDown(300);
        },
        function() {
            $(this).find('ul').slideUp( 100 );
        }
    );

    //script for sticky header
    !function(window, $) {
        var $nav = $('#nav'),
            $win = $(window),
            navTop = $nav.offset().top,
            onTop = false,
            checkScheduled = false;
        function checkNav() {
            var top = $win.scrollTop();
            if(navTop < top && !onTop) {
                onTop = true;
                $nav.addClass('navbar-fixed-top');
            } else if(navTop >= top && onTop) {
                $nav.removeClass('navbar-fixed-top');
                onTop = false;
            }
        }
        $win.on('scroll', function() {
            if(!checkScheduled) {
                checkScheduled = true;
                setTimeout(function() {
                    checkNav();
                    checkScheduled = false;
                }, 50);
            }
        });
        $win.on('load', function() {
            if(!checkScheduled) {
                checkScheduled = true;
                setTimeout(function() {
                    checkNav();
                    checkScheduled = false;
                }, 0);
            }
        });
    }(window, jQuery);

    // lightbox init
// delegate calls to data-toggle="lightbox"
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        return $(this).ekkoLightbox({
            always_show_close: true
        });

    });

    /*
     $(window).resize(function() {
     var winHeight = $(window).height();
     alert(winHeight)
     })

     $('*[data-toggle="lightbox"]').live("click", function(){
     var winHeight = $(window).height();
     $('.ekko-lightbox').closest('.modal-backdrop').height(winHeight);
     alert('sds')
     });

     */





});