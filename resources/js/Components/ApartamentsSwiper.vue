<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";
import "swiper/css";


const modules = [Autoplay];


const props = defineProps({
    apartments:Object
})


console.log(props.apartments);

</script>


<template>
 



   
    <swiper
        :autoplay="{
            delay: 2500,
            disableOnInteraction: false,
        }"
        :slides-per-view="1"
        :breakpoints="{
     
      '768': {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      '1500': {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    }"
        :loop="true"
        :space-between="50"
        :modules="modules"
        :grabCursor="true"
        class="h-full w-full flex "
    >




    <swiper-slide v-for="apartment in apartments" :key="apartment.id" class="border shadow-lg ">
            <img :src="apartment.image" :alt="'wnętrze ' + apartment.title" />
            <div class="flex flex-col justify-center items-center text-center py-12 gap-6">
                <h3 class="text-3xl font-semibold">{{apartment.title}}</h3>
                <div class="flex justify-center items-center gap-4">
                    <img src="/assets/icons/persons.svg" alt="" class="w-8"><span>max {{apartment.persons}} os.</span>
                </div>
                <a :href="apartment.link" class="uppercase font-semibold text-sm link-hover">zobacz</a>
            </div>
        </swiper-slide>
    <!-- <swiper-slide class="border shadow-lg ">
            <img src="/assets/images/header--big.webp" alt="" />
            <div class="flex flex-col justify-center items-center text-center py-12 gap-6">
                <h3 class="text-3xl font-semibold">Apartament typu studio</h3>
                <div class="flex justify-center items-center gap-4">
                    <img src="/assets/icons/persons.svg" alt="" class="w-8"><span>max 4 os.</span>
                </div>
                <a href="" class="uppercase font-semibold text-sm link-hover">zobacz</a>
            </div>
        </swiper-slide> -->
  

   
   
    
       
      
        
    </swiper>

</template>


<style scoped>
.swiper-wrapper{
    padding-bottom:50px !important
}
</style>
