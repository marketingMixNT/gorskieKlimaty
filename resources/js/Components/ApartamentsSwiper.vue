<template>
    <swiper
        :slidesPerView="1"
        :spaceBetween="75"
        :breakpoints="{
            '1024': {
                slidesPerView: 2,
                spaceBetween: 50,
            },
            '1280': {
                slidesPerView: 3,
            },
        }"
        :autoplay="{
            delay: 2500,
            disableOnInteraction: true,
        }"
        :loop="true"
        :modules="modules"
        class="mySwiper"
    >
        <swiper-slide
            v-for="apartment in apartments"
            :key="apartment.id"
            class="border shadow-lg group"
        >
            <div class="overflow-hidden">
                <img
                    :src="apartment.image"
                    :alt="'wnętrze ' + apartment.title"
                    class="group-hover:scale-110 duration-300"
                />
            </div>
            <div
                class="flex flex-col justify-center items-center text-center py-12 gap-6"
            >
                <h3 class="text-3xl font-normal text-center">
                    Apartament <br />{{ apartment.title }}
                </h3>
                <div class="flex justify-center items-center gap-4">
                    <img
                        src="/assets/icons/persons.svg"
                        alt=""
                        class="w-8"
                    /><span>max {{ apartment.persons }} os.</span>
                </div>
                <a
                    :href="apartment.link"
                    class="uppercase font-semibold text-sm link-hover"
                    >zobacz</a
                >
            </div>
        </swiper-slide>
    </swiper>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import "swiper/css/pagination";

// import required modules
import { Autoplay } from "swiper/modules";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    props: {
        apartments: {
            type: Object,
            required: true,
        },
    },
    setup() {
        return {
            modules: [Autoplay],
        };
    },
};
</script>

<style scoped>
.swiper {
    @apply h-full w-full md:w-[70%] lg:w-full;
}

.swiper-slide {
    min-height: 100%;
}
</style>
