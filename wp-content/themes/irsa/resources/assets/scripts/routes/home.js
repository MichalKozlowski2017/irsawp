export default {
    init() {
        // JavaScript to be fired on the home page
        $('#mobileButton').on('click', function() {
            $(this).toggleClass('is-active');
            $('.nav-primary').toggleClass('active-menu');
        });

        $(document).ready(function() {
            var h = $("header");
            $(window).scroll(function() {
                var windowpos = $(window).scrollTop();
                if (windowpos >= 50) {
                    h.css('background', '#000000');
                } else {
                    h.css('background', 'transparent');
                }
            });
        });
    },

    finalize() {
        // JavaScript to be fired on the home page, after the init JS

    },
};
