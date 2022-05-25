<template>
    <div style="margin-top: 150px;">
        <div class="w-full flex justify-center">
            <hr style="width: 80%; background-color: #001E6C;  box-shadow: 1px 1px #888888;">
        </div>
        <div class="w-full flex justify-center">
            <div class="mx-auto">
                <h1 style="color: #035397" class="mt-12 mx-auto" id="heading-programe">Veniturile Web-developerilor</h1>
            </div>
        </div>
        <div class="w-full flex justify-center graph">
            <div class="w-full" id="salary-container">
                <div class="flex justify-center" style="position: relative">
                    <div id="salary-1" style="" class=" font-bold text-3xl">65.000$/AN</div>
                    <div id="salary-2" style="" class=" font-bold text-3xl">100.000$/AN</div>
                    <div id="an-2012" style="" class=" font-bold text-3xl ">2012</div>
                    <div id="an-2022" style="" class=" font-bold text-3xl ">2022</div>
                    <div id="glass" style=""  class="flex items-center">
                        <img id="glassdor-img" :src="images['glassdoor']" class="rounded-full w-32" alt="">
                        <div id="glass-text" style="color: #0CAA41" class="font-bold text-2xl ml-4">glassdoor approved</div>
                        <img id="glass-check" :src="images['checked']" class="w-12 ml-2" alt="">
                    </div>
                <img id="growth" :src="images['growth']" alt=""  style="">
                </div>
            </div>
        </div>
        <div>

        </div>
    </div>
</template>

<script>
export default {

    data(){
        return{
            images: {
                'growth': 'photos/courseIcons/growth.png',
                'glassdoor': 'photos/courseIcons/glassdoor.png',
                'checked': 'photos/courseIcons/checked.png',

            }
        }
    }
};
</script>
<style scoped>
#heading-programe{
    color: #111 ;
    font-family: 'Lato',
    sans-serif;
    font-size: 54px;
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
#salary-container{
    transition: 1.2s;
    width: 60%;
}
#salary-container:hover{
    transform: rotate(-3deg);
}
#salary-1{
    position: absolute;
    color:#0CAA41;
    top: 319px;
    left: 108px
}
#salary-2{
    position: absolute;
    color:#0CAA41;
    top: 161px;
    left: 633px;
}
#an-2012{
 position: absolute;
 top: 473px;
 left: 206px
}
#an-2022{
    position: absolute;
    top: 473px;
    left: 739px
}
#glass{
    position: absolute;
    left: -50px;
    opacity: 0.7;
    top:-20px;
}
#growth{
    width: 800px;
    height: 500px;
}

@media only screen and (max-width: 600px) {
    #growth{
    width: 800px;
    height: 397px;
    }
    #heading-programe{
        font-size: 25px;
        font-weight: 700;
    }
    #salary-1{
       top: 256px;
        left: -27px;
        font-size: 17px;
    }
    #salary-2{
    font-size: 17px;
    top: 131px;
    left: 157px;
}
    #an-2012{
    font-size: 20px;
    top: 384px;
    left: -1px
    }
    #an-2022{
    font-size: 20px;
    top: 384px;
    left: 174px
    }
    #glassdor-img{
        width: 54px;
    }
    #glass-text{
        font-size: 20px;
    }
    #glass-check{
        width: 30px;
    }
    .graph{
        margin-top: 50px;
    }

}
</style>
