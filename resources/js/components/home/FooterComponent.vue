<template>
    <div style="margin-top: 150px;">
        <div class="w-full h-52 bg-gray-200 footer-wrap">
            <div style="width: 80%;" class="mx-auto">
                <div class="grid grid-cols-4 font-semibold text-gray-500 footer">
                    <div class="mt-12 programe-disponibile" >
                        <div class=" text-center text-uppercase font-bold">Programe Disponibile:</div>
                        <div class="text-center">Program Juniori Web-Design</div>
                        <div class="text-center">Program Senior Full-Stack <br> Web Developer</div>
                    </div>
                    <div class="mt-12 ml-12 center-text">
                        <div class=" text-center text-uppercase font-bold">Program De Lucru</div>
                        <div class="text-center">Luni/Vineri</div>
                        <div class="text-center">09:00/17:00</div>
                    </div>
                    <div class="mt-12 ml-12 center-text">
                        <div class=" text-center text-uppercase font-bold">Contact</div>
                        <div class="flex items-center justify-center">
                            <div class="w-4"><img :src="images['whats-up']" alt=""></div>
                            <div class="text-center">0737704513</div>
                        </div>
                        <div class="flex items-center justify-center">
                            <div class="w-4"><img :src="images['gmail']" alt=""></div>
                            <div class="text-center ml-2">info@dev-academy.ro</div>
                        </div>
                    </div>

                    <div class="mt-12 ml-12 center-text sm-body">
                        <div class=" text-center text-uppercase font-bold">Social Media</div>
                        <a href="https://www.facebook.com/DevAcademyro">
                        <div class="flex items-center justify-center">
                            <div class="w-4"><img :src="images['facebook']" alt=""></div>
                            <div class="text-center ml-2">Facebook</div>
                        </div>
                        </a>
                        <a href="https://www.instagram.com/devacademyro/">
                            <div class="flex items-center justify-center">
                                <div class="w-4"><img :src="images['instagram']" alt=""></div>
                                <div class="text-center ml-2">Instagram</div>
                            </div>
                        </a>
                        <a href="https://www.youtube.com/channel/UCGdm25-EE2yvR-eaoXCCc1w">
                            <div class="flex items-center justify-center">
                                <div class="w-4"><img :src="images['youtube']" alt=""></div>
                                <div class="text-center ml-2">Youtube</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default{
    data(){
        return{
            images:{
                'whats-up': 'photos/sm/whatsapp.png',
                'gmail': 'photos/sm/gmail.png',
                'facebook': 'photos/sm/facebook.png',
                'instagram': 'photos/sm/instagram.png',
                'youtube': 'photos/sm/youtube.png'
            }
        }
    }
}
</script>
<style scoped>
.sm-body{
    display: flex;
    flex-direction: column;
    align-items: center;
}
@media only screen and (max-width: 600px) {
    .footer{
        display: block;
        text-align: center;
        margin: auto auto auto auto;
        padding-top: 20px;
    }
    .footer-wrap{
        height: 500px;
    }
    .center-text{
        margin-left: 0;
    }
    .programe-disponibile{
        margin-top: 20px;
    }
}
</style>
