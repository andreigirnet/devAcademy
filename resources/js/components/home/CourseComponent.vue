<template>
    <div class="mt-28" id="cursuri">
        <div class="w-full flex justify-center">
            <hr style="width: 80%; background-color: #001E6C;  box-shadow: 1px 1px #888888;">
        </div>
        <div class="w-full flex justify-center">
            <div class="mx-auto">
                <h1 style="color: #035397" class="mt-12 mx-auto" id="heading-programe">PROGRAME DISPONIBILE:</h1>
            </div>
        </div>
        <div class="program-wrap">
            <div class="flex justify-center w-full mt-4" >
                <div class="flex items-center" id="card-program" style="position:relative;">
                        <div>
                            <div class="flex items-center">
                                <i class="fa-solid fa-arrow-right"></i>
                                <i class="fa-solid fa-arrow-right"></i>
                                <i class="fa-solid fa-arrow-right"></i>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                        <div style="margin-left: 0; margin-right: 200px; position: absolute; left: -80px" id="swiperTwo" class="swiper swiperTwo mr-2">
                            <div style="" class="swiper-wrapper shuffle-cards">
                                <div class="swiper-slide swiper-slide-card"><img :src="images['html']" alt=""></div>
                                <div class="swiper-slide swiper-slide-card"><img :src="images['css']" alt=""></div>
                                <div class="swiper-slide swiper-slide-card"><img :src="images['js']" alt=""></div>
                            </div>
                        </div>
                    <div>
                        <div class="course-card-content">
                            <div class="font-extrabold text-2xl text-course-title" style="color: #e8630a;">JUNIOR WEB-DESIGNER (14-18/ani)</div>
                            <div class="font-extrabold text-2xl text-course durata" >DURATA: 14 ORE</div>
                            <div class="mt-4">
                                <div class=" course-content">
                                    <div class="font-semibold text-xl text-course" >HTML - Hyper Text Markup Language</div>
                                    <div class="font-semibold text-xl text-course" >CSS - Cascading Style Sheets</div>
                                    <div class="font-semibold text-xl text-course" >JS - Programming language of the Web</div>
                                </div>
                                <div class="button-rezerva w-full flex justify-center">
                                    <a href="#contact"><button  class="border border-2 mt-12 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl" style="">Rezervă Acum!</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img style="" class="curs-img" :src="images['card-img1']" alt="">
                </div>
            </div>
            <div class="flex justify-center w-full mt-12" >
                <div class="flex items-center" id="card-program" style="position:relative;">
                    <div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-arrow-right"></i>
                            <i class="fa-solid fa-arrow-right"></i>
                            <i class="fa-solid fa-arrow-right"></i>
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                    <div style="" class="swiper swiperTwo mr-2">
                        <div style="" class="swiper-wrapper">
                            <div class="swiper-slide"><img :src="images['html']" alt=""></div>
                            <div class="swiper-slide"><img :src="images['css']" alt=""></div>
                            <div class="swiper-slide"><img :src="images['js']" alt=""></div>
                        </div>
                    </div>
                    <div>
                        <div class="course-card-content">
                            <div class="font-extrabold text-2xl text-course-title" id="second-course-title" style=" color: #e8630a;">SENIOR WEB-DESIGNER (18/ani+)</div>
                            <div class="font-extrabold text-2xl text-course durata" style="">DURATA: 30 ORE</div>
                            <div class="mt-4 ">
                                <div class="course-content">
                                    <div class="font-semibold text-xl text-course" style="">HTML/CSS</div>
                                    <div class="font-semibold text-xl text-course" style="">Tailwind Framework</div>
                                    <div class="font-semibold text-xl text-course" style="">JS - Web Programing Language</div>
                                </div>
                                <div class="button-rezerva w-full flex justify-center">
                                <a href="#contact"><button id="second-rezerva"  class="border border-2 mt-12 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl" style="">Rezervă Acum!</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="curs-img" :src="images['card-img2']" alt="">
                </div>
            </div>
            <div class="flex justify-center w-full mt-12" >
                <div class="flex items-center" id="card-program" style="position:relative;">
                    <div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-arrow-right"></i>
                            <i class="fa-solid fa-arrow-right"></i>
                            <i class="fa-solid fa-arrow-right"></i>
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                    <div style="" class="swiper swiperTwo mr-2">
                        <div style="" class="swiper-wrapper">
                            <div class="swiper-slide"><img :src="images['vue']" alt=""></div>
                            <div class="swiper-slide"><img :src="images['php']" alt=""></div>
                            <div class="swiper-slide"><img :src="images['composer']" alt=""></div>
                        </div>
                    </div>
                    <div>
                        <div class="course-card-content">
                            <div class="font-extrabold text-2xl text-course-title" id="second-course-title" style=" color: #e8630a;">FULL STACK ADVANCED COURSE (18/ani+)</div>
                            <div class="font-extrabold text-2xl text-course durata" style="">DURATA: 50 ORE</div>
                            <div class="mt-4 ">
                                <div class="course-content">
                                    <div class="font-semibold text-xl text-course" style="">COMPOSER/NPM</div>
                                    <div class="font-semibold text-xl text-course" style="">PHP BASICS/MYSQL/LARAVEL</div>
                                    <div class="font-semibold text-xl text-course" style="">VUE JS FRAMEWORK</div>
                                </div>
                                <div class="button-rezerva w-full flex justify-center">
                                    <a href="#contact"><button id="second-rezerva"  class="border border-2 mt-12 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl" style="">Rezervă Acum!</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="curs-img" :src="images['card-img2']" alt="">
                </div>
            </div>

        </div>
    </div>
</template>
<script>
export default{
    data(){
        return{
            images: {
                'html': 'photos/courseIcons/html.png',
                'css': 'photos/courseIcons/css.png',
                'php': 'photos/courseIcons/php.png',
                'js': 'photos/courseIcons/js.png',
                'vue':'photos/courseIcons/vue.png',
                'vuex':'photos/courseIcons/vuex.png',
                'swipe-icon':'photos/courseIcons/swipe-icon.png',
                'right-arrow': 'photos/courseIcons/right-arrow.png',
                'checked': 'photos/courseIcons/checked.png',
                'junior': 'photos/courseIcons/junior.png',
                'senior': 'photos/courseIcons/senior.png',
                'card-img1': 'photos/courseIcons/card-img1.png',
                'card-img2': 'photos/courseIcons/card-img2.png',
                'laravel': 'photos/courseIcons/laravel.png',
                'composer':'photos/courseIcons/composer.png',
                'sql':'photos/courseIcons/sql.png',
                'axios':'photos/courseIcons/axios.png',
            }
        }
    }
}

</script>
<style scoped>
.program-wrap{
    margin: 50px auto;
    padding: 20px;
    width: 80%;
}
.program-wrap::-webkit-scrollbar {
    width: 10px;
}
.program-wrap::-webkit-scrollbar-track {
    background: #f1f1f1;
}
.program-wrap::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 16px;
}
#heading-programe{
    color: #111 ;
    font-family: 'Lato',
    sans-serif; font-size: 54px;
    font-weight: 600;
    line-height: 58px;
}
#program-juniori{
    color: #111 ;
    font-family: 'Lato',
    sans-serif; font-size: 35px;
    font-weight: 300;
    line-height: 58px;
    margin-top: 20px;
}
.swiper {
    width: 240px;
    height: 320px;
}

.swiper-slide {
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 18px;
    font-size: 22px;
    font-weight: bold;
    color: #fff;
}


.swiper-slide:nth-child(1n) {
    background-color: rgb(206, 17, 17);
}

.swiper-slide:nth-child(2n) {
    background-color: rgb(0, 140, 255);
}

.swiper-slide:nth-child(3n) {
    background-color: yellow;
}

.swiper-slide:nth-child(4n) {
    background-color: blue;
}

.swiper-slide:nth-child(5n) {

}

.swiper-slide:nth-child(6n) {
    background-color: rgb(180, 10, 47);
}

.swiper-slide:nth-child(7n) {
    background-color: rgb(35, 99, 19);
}

.swiper-slide:nth-child(8n) {
    background-color: rgb(0, 68, 255);
}

.swiper-slide:nth-child(9n) {
    background-color: rgb(218, 12, 218);
}

.swiper-slide:nth-child(10n) {
    background-color: rgb(54, 94, 77);
}
#card-program{
    width:60%;
    height: 400px;
    background-color: white;
    border-radius: 20px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
}
.swiperTwo{
    margin-left: 0;
    margin-right: 200px;
    position: absolute;
    left: -80px
}
.text-course-title{
    margin-left: 200px;
}
.text-course{
    margin-left: 200px;
}
.curs-img{
    position: absolute;
    z-index: 0;
    opacity:0.1;
    width: 400px;
    right: 20px;
}
.contact-button-curs{
    margin-left: 300px
}

@media only screen and (max-width: 600px) {
    .program-wrap{
        overflow: visible;
        width: 100%;
        height: auto;
    }
    #second-course-title{
        font-size: 22px;
    }
    .course-content{
        margin: 0;
    }
    #heading-programe{
        font-size: 25px;
        font-weight: 700;
    }
    .swiperTwo{
        display: none;
    }
    .text-course-title{
        font-size: 16px;
        margin-left: 10px;
    }
    .text-course{
        font-size: 16px;
        margin-left: 5px;
        font-weight: 700;
    }
    #card-program
    {
        width: 80%;
    }
    .curs-img{
        opacity:0.1;
        margin-left: 30px;
    }
    .durata{
        font-weight: 800;
        margin-left: 10px;
    }
    .course-content{
       font-size: 5px;
       margin: 0px 10px 0px 10px;
    }
    .text-course-title{
        font-size: 25px;
    }
    #second-course-title{
        margin-top: 25px;
    }
    .course-card-content{
        padding: 0 10px 0 10px;
    }
    #second-rezerva{
        padding-bottom: 10px;
    }
    .button-rezerva{
        width: 100%;
        display: flex;
        justify-content: center;
    }

}
</style>
