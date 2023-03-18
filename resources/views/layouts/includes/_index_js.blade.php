<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<!-- Flexslider -->
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<!-- Sticky Kit -->
<script src="{{ asset('js/sticky-kit.min.js') }}"></script>
<!-- MAIN JS -->
<script src="{{ asset('js/main.js') }}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156510049-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-156510049-1');
</script>

<script>
    // Navbar scroll to section.
    $(function() {
        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this).attr('href');

            if (location.pathname !== '/' && location.pathname !== 'index/default') {
                location.href = document.location.origin + '/' + $anchor;
            } else {
                console.log($anchor);
                animateScroll($anchor);
            }
            event.preventDefault();
        });
    });

    // Animate Scrolling.
    function animateScroll($anchor) {
        $('html, body').animate({
            scrollTop: $($anchor).offset().top
        }, 1000, 'swing');
    }


    // Highlight nav items on scroll.
    $(function () {
        var $navigationLinks = $('#portfolio-main-menu > ul > li');
        var $sections = $($(".section").get().reverse());

        var sectionIdTonavigationLink = {};
        $sections.each(function() {
            var id = $(this).attr('id');
            sectionIdTonavigationLink[id] = $('#portfolio-main-menu > ul > li > a[href=\\#' + id + ']');
        });

        function throttle(fn, interval) {
            var lastCall, timeoutId;
            return function () {
                var now = new Date().getTime();
                if (lastCall && now < (lastCall + interval) ) {
                    clearTimeout(timeoutId);
                    timeoutId = setTimeout(function () {
                        lastCall = now;
                        fn.call();
                    }, interval - (now - lastCall) );
                } else {
                    lastCall = now;
                    fn.call();
                }
            };
        }

        function highlightNavigation() {
            var scrollPosition = $(window).scrollTop();

            $sections.each(function() {
                var currentSection = $(this);
                var sectionTop = currentSection.offset().top - 50;

                if (scrollPosition >= sectionTop) {
                    var id = currentSection.attr('id');
                    var $navigationLink = sectionIdTonavigationLink[id];

                    if (!$navigationLink.hasClass('portfolio-active')) {
                        $navigationLinks.removeClass('portfolio-active');
                        $navigationLink.parent().addClass('portfolio-active');
                    }
                    return false;
                }
            });
        }

        $(window).scroll( throttle(highlightNavigation,100) );
    });
</script>
