        /*
         * ----------------------------------------------------------------------------------------
         *  SCROOL TO UP JS
         * ----------------------------------------------------------------------------------------
         */
        $(window).scroll(function () {
            if ($(this).scrollTop() > 250) {
                $('.dark-scrollup').fadeIn();
            } else {
                $('.dark-scrollup').fadeOut();
            }
        });
        $('.dark-scrollup').on("click", function () {
            $("html, body").animate({
                scrollTop: 0
            }, 800);
            return false;
        });