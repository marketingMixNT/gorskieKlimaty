<template>
  <swiper
    :slidesPerView="1"
    :spaceBetween="50"
    :loop="true"
    :autoplay="{
    delay: 2500,
    disableOnInteraction: false,
  }"
   :grabCursor="true"
    :modules="modules"
    :breakpoints="{
      '769': {
        slidesPerView: 2,
        spaceBetween: 50,
      },
      '1280': {
        slidesPerView: 3,
        spaceBetween: 50,
      },
      '1920': {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    }"
    class="mySwiper"
  >
    <swiper-slide v-for="image,index in shuffledImages" :key="index"><img :src="image" alt=""></swiper-slide>
    
  </swiper>
</template>

<script>
  // Import Swiper Vue.js components
  import { Swiper, SwiperSlide } from 'swiper/vue';

  // Import Swiper styles
  import 'swiper/css';

  import 'swiper/css/pagination';

  // import required modules
  import { Pagination,Autoplay } from 'swiper/modules';

  export default {
    props:{
      images:Array
    },
    components: {
      Swiper,
      SwiperSlide,
    },
    data() {
      return {
        shuffledImages: []
      }
    },
    methods: {
      shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
          let j = Math.floor(Math.random() * (i + 1));
          [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
      }
    },
    created() {
      this.shuffledImages = this.shuffleArray(this.images);
    },
    setup() {
      return {
        modules: [ Autoplay],
      };
    },
  };
</script>
