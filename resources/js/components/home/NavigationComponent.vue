<template>
    <div class="w-full h-12">
        <div style="color:#035397;" class="flex h-20 items-center justify-between nav">
            <div class="flex items-center pl-10 font-extrabold text-xl cursor-pointer">
                <div class="flex" style="font-size: 2rem">
                    <div>/</div><div class="blinking">.</div>
                    <div class="ml-8">Dev-academy</div>
                </div>
                <div class="pl-2"></div>
            </div>
            <div class="pr-20 text-base font-semibold font-sans pr">
                <nav>
                    <ul class="flex items-center justify-center uppercase menu3 md:text-sm nav-sec" id="myDiv">
                            <li class="pr-8 cursor-pointer item active font-bold"><a href="#">Pagina Principala</a></li>
                            <li class="pr-8 cursor-pointer item font-bold"><a href="#cursuri">Cursuri</a></li>
                            <li class="pr-8 cursor-pointer item font-bold"><a href="#de-ce">DE CE NOI?</a></li>
                            <li class="pr-8 cursor-pointer item font-bold"><a href="#despre">Despre Noi</a></li>
                            <li class="cursor-pointer item font-bold"><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
          return{
              image_logo: 'photos/pngegg.png',
              is_active: false,
          }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            toggleMenu(){
                this.is_active = true
            }
        }
    }

</script>
<style>
.active, .item:hover {
    color: #E8630A;
}
a{
    text-decoration: none;
}
.blinking {
    -webkit-animation: 1s blink ease infinite;
    -moz-animation: 1s blink ease infinite;
    -ms-animation: 1s blink ease infinite;
    -o-animation: 1s blink ease infinite;
    animation: 1s blink ease infinite;

}
@keyframes "blink" {
    from, to {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
}

@-moz-keyframes blink {
    from, to {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
}

@-webkit-keyframes "blink" {
    from, to {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
}

@-ms-keyframes "blink" {
    from, to {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
}

@-o-keyframes "blink" {
    from, to {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
}
@media only screen and (max-width: 600px) {
    .nav{
        display: block;
    }
    .nav-sec{
        display: block;
        text-align: center;
        margin-top: 20px
    }
    .nav-sec li{
        display: block;
        text-align: center;
        padding-right: 0;
        margin-top: 5px;
    }
    .nav-sec a{
        width: 100%;
        display: flex;
        justify-content: center;
        text-align: center;
        padding-right: 0;
        text-decoration: none;
    }
    .pr{
        padding-right:0;
    }
}
</style>
