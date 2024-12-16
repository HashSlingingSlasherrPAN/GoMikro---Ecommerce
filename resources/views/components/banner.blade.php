<div class="swiper-container my-10 z-index-[19] relative">
    <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide">
            <img src="{{ asset('images/slide1.png') }}" alt="Promo Harbolnas" class="w-full h-[250px] object-cover">



        </div>
        <!-- Slide 2 -->
        <div class="swiper-slide">
            <img src="{{ asset('images/slide last.png') }}" alt="Promo Harbolnas" class="w-full h-[250px] object-cover">


        </div>
        <!-- Add more slides as needed -->
    </div>
    <!-- Navigation Arrows -->
    <div class="swiper-button-next hover:bg-[#f0f3f7]  bg-white  rounded-full px-[24px] py-[24px]  absolute inset-y-0 my-auto right-0 transform translate-x-1"></div>
    <div class="swiper-button-prev hover:bg-[#f0f3f7] bg-white rounded-full px-[24px] py-[24px] absolute inset-y-0 my-auto left-0 transform -translate-x-1"></div>
    <!-- Pagination -->

    <div class="swiper-pagination absolute bottom-4 left-0 right-0 mx-auto"></div>
</div>
<style>
    /* Override Swiper Navigation Arrows */
    .swiper-button-next::after,
    .swiper-button-prev::after {
        content: '';
        display: block;
        width: 12px; /* Adjust arrow width */
        height: 12px; /* Adjust arrow height */
        border: solid #00ac73; /* Arrow color */
        border-width: 3px 3px 0 0; /* Thickness of the arrow */
        transform: rotate(45deg);
        position: absolute;
    }
    .swiper-button-next::after {
        transform: rotate(45deg) translate(-2px, -2px); /* Adjust position for next arrow */
    }

    .swiper-button-prev::after {
        transform: rotate(-135deg) translate(2px, 2px); /* Adjust position for prev arrow */
    }

    /* Override Swiper Pagination Dots */
    .swiper-pagination-bullet {
        background-color:#006d49 !important;
        opacity: 0.3;
    }

    .swiper-pagination-bullet-active {
        background-color: #00ac73 !important;
        opacity: 1;

    }
    </style>
