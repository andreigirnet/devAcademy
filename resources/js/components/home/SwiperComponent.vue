<template>
    <div class="Swiper-banner">
        <div class="swiper mySwiper w-full mt-10" style="height: 650px">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#cursuri" class="img-cursuri"><img  :src="images[0]" style="background-position: center; background-size: cover" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href="#cursuri" class="img-cursuri"><img  :src="images[1]" style="background-position: center; " alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href="#cursuri" class="img-cursuri"><img  :src="images[2]" style="background-position: center; " alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href="#cursuri" class="img-cursuri"><img  :src="images[3]" style="background-position: center; " alt=""></a>
                </div>
            </div>
<!--            <div class="swiper-button-next"></div>-->
<!--            <div class="swiper-button-prev"></div>-->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</template>

<script>

export default {
    data(){
        return{
            images:[
                'photos/banner/2.png',
                'photos/banner/1.png',
                'photos/banner/3.png',
                'photos/banner/4.png',
            ],
        }
    }
};
</script>
<style scoped>
@media only screen and (max-width: 600px) {
    .swiper-button-next{
        display: none;
    }
    .swiper-button-prev{
        display: none;
    }
    .Swiper-banner{
        height: 150px;
        margin-top: 150px ;
    }
    .swiper-pagination{
        display: none;
    }
    .img-cursuri img{
        height: 220px;
    }
}
</style>
