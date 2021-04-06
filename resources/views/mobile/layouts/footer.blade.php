<!-- color settings ends -->
<!-- Required jquery and libraries -->
<script src="{{asset('mobile/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('mobile/assets/js/popper.min.js')}}"></script>
<script src="{{asset('mobile/assets/vendor/bootstrap-4.4.1/js/bootstrap.min.js')}}"></script>
<script src="{{asset('mobile/js/infinite-scroll.pkgd.min.js')}}"></script>
<!-- cookie css -->
<script src="{{asset('mobile/assets/vendor/cookie/jquery.cookie.js')}}"></script>
<!-- Swiper slider  -->
<script src="{{asset('mobile/assets/vendor/swiper/js/swiper.min.js')}}"></script>
<!-- Masonry js -->
<script src="{{asset('mobile/assets/vendor/masonry/masonry.pkgd.min.js')}}"></script>
<!-- Customized jquery file  -->
<script src="{{asset('mobile/assets/js/main.js')}}"></script>
<script src="{{asset('mobile/js/color-scheme-demo.js')}}"></script>
<script>
    "use strict"
    $(document).ready(function() {
        /* Swiper slider */
        var swiper = new Swiper('.swiper-categories', {
            slidesPerView: 'auto',
            spaceBetween: 0,
            pagination: false,
        });
        var swiper = new Swiper('.swiper-offers', {
            slidesPerView: 'auto',
            spaceBetween: 20,
            pagination: false,
        });

        /* masonry js */
        /* $('#search-tab[data-toggle="tab"]').on('shown.bs.tab', function(e) {

        })*/

        /* toast message */
        setTimeout(function() {
            $('.toast').toast('show')
        }, 2000);

        /* increasenumber */
        $('.add').on('click', function() {
            var current = parseInt($(this).closest('.increasenumber').find('input').val());
            $(this).closest('.increasenumber').find('input').val(current + 1);
        });
        $('.remove').on('click', function() {
            if ($(this).closest('.increasenumber').find('input').val() > 0) {
                var current = parseInt($(this).closest('.increasenumber').find('input').val());
                $(this).closest('.increasenumber').find('input').val(current - 1);
            }
        });
    });
    $('.article-feed').infiniteScroll({
        // options
        path: '.pagination__next',
        append: '.article',
        history: false,
    });
    $('.article-feed-favo').infiniteScroll({
        // options
        path: '.pagination__next-favo',
        append: '.article-favo',
        history: false,
    });
    $('.article-feed-menu').infiniteScroll({
        // options
        path: '.pagination__next-menu',
        append: '.article-menu',
        history: false,
    });
</script>
</body>
</html>
