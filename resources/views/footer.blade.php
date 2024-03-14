<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    let indeksSebelum = 0;
    let indeksAslinya = 0;
    const swiper = new Swiper('.swiper1', {
        // Optional parameters
        direction: 'horizontal',
        spaceBetween:1000,
        speed: 1000,
        allowTouchMove: false,
        loop:false,

        pagination: {
            el: '.swiper-pagination',
        },

        navigation: {
            nextEl: '.button-next',
            prevEl: '.button-prev',
        },

        on: {
            slideNextTransitionStart: function() {
                indeksAslinya = this.activeIndex
                if (this.activeIndex == 1) {
                    $(".button-add-to-cart").removeClass('bg-[#FFC008]')
                    $(".button-add-to-cart").addClass('bg-[#E86F26]')
                    $(".plus").css('transform', 'rotate(180deg)')
                } else if (this.activeIndex == 2) {
                    $(".button-add-to-cart").removeClass('bg-[#E86F26]')
                    $(".button-add-to-cart").addClass('bg-[#BCD432]')
                    $(".plus").css('transform', 'rotate(360deg)')
                }
                indeksSesudah = this.realIndex + 1;
                $(".swiper-slide .item-1-" + indeksSesudah).css("left", "60%");
                $(".swiper-slide .item-2-" + indeksSesudah).css("left", "70%");
                $(".swiper-slide .item-3-" + indeksSesudah).css("left", "60%");
                $(".swiper-slide .item-2-" + indeksSesudah).css("opacity", "0");
                $(".swiper-slide .item-3-" + indeksSesudah).css("opacity", "0");
                $(".swiper-slide .item-1-" + indeksSesudah).css("opacity", "0");
                setTimeout(function() {
                    $(".swiper-slide .item-1-" + indeksSesudah).css("left", "50%");
                    $(".swiper-slide .item-2-" + indeksSesudah).css("left", "50%");
                    $(".swiper-slide .item-3-" + indeksSesudah).css("left", "50%");
                    $(".swiper-slide .item-1-" + indeksSesudah).css("opacity", "1");
                    $(".swiper-slide .item-2-" + indeksSesudah).css("opacity", "1");
                    $(".swiper-slide .item-3-" + indeksSesudah).css("opacity", "1");
                }, 400);
            },
            slidePrevTransitionStart: function() {
                indeksAslinya = this.activeIndex
                if (this.activeIndex == 1) {
                    $(".button-add-to-cart").removeClass('bg-[#BCD432]')
                    $(".button-add-to-cart").addClass('bg-[#E86F26]')
                    $(".plus").css('transform', 'rotate(180deg)')
                } else if (this.activeIndex == 0) {
                    $(".button-add-to-cart").removeClass('bg-[#E86F26]')
                    $(".button-add-to-cart").addClass('bg-[#FFC008]')
                    $(".plus").css('transform', 'rotate(0deg)')
                }
                indeksSesudah = this.realIndex + 1;
                $(".swiper-slide .item-1-" + indeksSesudah).css("left", "40%");
                $(".swiper-slide .item-2-" + indeksSesudah).css("left", "30%");
                $(".swiper-slide .item-3-" + indeksSesudah).css("left", "40%");
                $(".swiper-slide .item-2-" + indeksSesudah).css("opacity", "0");
                $(".swiper-slide .item-3-" + indeksSesudah).css("opacity", "0");
                $(".swiper-slide .item-1-" + indeksSesudah).css("opacity", "0");
                setTimeout(function() {
                    $(".swiper-slide .item-1-" + indeksSesudah).css("left", "50%");
                    $(".swiper-slide .item-2-" + indeksSesudah).css("left", "50%");
                    $(".swiper-slide .item-3-" + indeksSesudah).css("left", "50%");
                    $(".swiper-slide .item-1-" + indeksSesudah).css("opacity", "1");
                    $(".swiper-slide .item-2-" + indeksSesudah).css("opacity", "1");
                    $(".swiper-slide .item-3-" + indeksSesudah).css("opacity", "1");
                }, 400);
            },
        }
    });

    const swiper2 = new Swiper('.swiper2', {
        // Optional parameters
        slidesPerView: 3,
        spaceBetween: 0,
        slidesPerGroup: 1,
        direction: 'horizontal',
        loop: true,
        loopFillGroupWithBlank: true,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>

</body>

</html>