<section class="slider">
    <div class="container-lg max-w-screen-xl mx-auto slider-wrapper">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('assets/silder/01.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/silder/02.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/silder/03.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/silder/04.png') }}" alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<script type="module">
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

</script>
