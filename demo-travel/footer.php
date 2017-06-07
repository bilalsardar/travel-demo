

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--> 
<script src="js/materialize.js"></script>
<!--<script src="js/init.js"></script>-->

<script>
    (function ($) {
        $(function () {

            $('.button-collapse').sideNav();
            $('.parallax').parallax();




        }); // end of document ready
    })(jQuery); // end of jQuery name space




    // carousel init
    $('.carousel.carousel-slider').carousel({full_width: true});
    autoplay()
    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 4500);
    }

</script>

</body>
</html>
