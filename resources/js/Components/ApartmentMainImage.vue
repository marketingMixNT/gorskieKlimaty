<script>
import { Swiper, SwiperSlide } from "swiper/vue";

import "swiper/css";

import "swiper/css/effect-fade";
import "swiper/css/navigation";
import "swiper/css/pagination";

import { Autoplay, EffectFade, Navigation, Pagination } from "swiper/modules";

export default {
    props: {
        images: Array,
    },
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
            modules: [Autoplay, EffectFade, Navigation, Pagination],
        };
    },
};
</script>

<template>
    <swiper
        :spaceBetween="30"
        :effect="'fade'"
        :grabCursor="true"
        :loop="true"
        :autoplay="{
            delay: 4000,
            disableOnInteraction: false,
        }"
        :modules="modules"
        class="mySwiper"
    >
        <swiper-slide v-for="(image, index) in images" :key="index">
            <img
                :src="image"
                alt="wnętrze apartamentu w Villi Górskie Klimaty"
                width="1000"
                height="500"
            />
        </swiper-slide>
    </swiper>
</template>

<style scoped>
.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: flex;
    justify-content: center;
    align-items: center;
}

.swiper-slide img {
    display: block;
    max-height: 900px;
    width: 100%;
    padding: 100px;
    object-fit: cover;
}
</style>
