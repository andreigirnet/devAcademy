<template>
    <div>
        <div id="logo_back" class="flex" style="font-size: 40rem">
            <div id="slash">/</div><div class="blinking">.</div>
            <img :src="images['british-m']" class="museum" alt="">
            <img :src="images['british-f']" class="museum-f" alt="">
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            images:{
                'british-m':  'photos/courseIcons/british-museum.png',
                'british-f':  'photos/courseIcons/united-kingdom.png',
            }
        }
    }
}
</script>
<style>
    #logo_back{
        position: absolute;
        bottom: -4000px;
        left: 100px;
        z-index: -1;
        color:#035397;
    }
    .museum{
        position: absolute;
        z-index: -1;
        right:10px;
        top: -800px;
        width: 700px;
        height: 500px;
        opacity: 0.1;
    }
    .museum-f{
        position: absolute;
        z-index: -1;
        right:-960px;
        top: -2500px;
        width: 800px;
        height: 400px;
        opacity: 0.1;
        transform: rotate(25deg);
    }

    @media only screen and (max-width: 600px) {
        .museum{
            right: 0;
            width: 100px;
            height: 100px;
            display: none;
        }
        .museum-f{
            display: none;
        }
        #slash{
            display: none;

        }
    }
</style>
