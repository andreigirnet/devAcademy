<template>
    <div style="margin-top: 150px" id="despre">
        <div class="w-full flex justify-center">
            <hr style="width: 80%; background-color: #001E6C;  box-shadow: 1px 1px #888888;">
        </div>
        <div class="w-full flex justify-center">
            <div class="mx-auto">
                <h1 style="color: #3E4D72;" class="mt-12 mx-auto" id="heading-programe">Despre Noi</h1>
            </div>
        </div>
        <div class="w-full flex justify-center mt-12 despre-container">
            <div id="mobile-despre" style="width: 80%" class="grid grid-cols-4 gap-20">
            <div class="card rounded-xl cursor-pointer center">
                <a href="#contact" style="color: #1a1e21;">
                <div class="flex justify-center mt-4">
                    <img :src="images['teacher']" class="w-24" alt="">
                </div>
                <div style="color:#e86305;" class="text-center font-extrabold text-lg mt-4">PROFESORI CALIFICAȚI</div>
                <div class="text-center font-semibold mt-2">La Universități de top/UK</div>
                <div class="text-center font-semibold mt-2">Experiență vastă în domeniu</div>
                <div class="flex justify-center mt-4"><div class="border-2 w-36 font-semibold text-center rounded-full">CONTACTEAZĂ-NE!</div></div>
                </a>
            </div>
            <div class="card rounded-xl cursor-pointer center">
                <a href="#contact" style="color: #1a1e21;">
                <div class="flex justify-center mt-4">
                    <img :src="images['studying']" class="w-24" alt="">
                </div>
                <div style="color:#e86305;" class="text-center font-extrabold text-lg mt-4">CURICULLUM BRITANIC</div>
                <div class="text-center font-semibold mt-2">Metoda de studii Britanica</div>
                <div class="text-center font-semibold mt-2">University of Royal Holloway</div>
                <div class="flex justify-center mt-4"><div class="border-2 w-36 font-semibold text-center rounded-full">CONTACTEAZĂ-NE!</div></div>
                </a>
            </div>
            <div class="card rounded-xl cursor-pointer center">
                <a href="#contact" style="color: #1a1e21;">
                <div class="flex justify-center mt-4">
                    <img :src="images['certificate']" class="w-24" alt="">
                </div>
                <div style="color:#e86305;" class="text-center font-extrabold text-lg mt-4">CERTIFICĂM ABSOLVENȚII</div>
                <div class="text-center font-semibold mt-2">Confirmăm și recomandăm</div>
                <div class="text-center font-semibold mt-2">Certificate cu strictă evidență</div>
                <div class="flex justify-center mt-4"><div class="border-2 w-36 font-semibold text-center rounded-full">CONTACTEAZĂ-NE!</div></div>
                </a>
            </div>
            <div class="card rounded-xl cursor-pointer center">
                <a href="#contact" style="color: #1a1e21;">
                <div class="flex justify-center mt-4">
                    <img :src="images['tech']" class="w-24" alt="">
                </div>
                <div style="color:#e86305;" class="text-center font-extrabold text-lg mt-4">CELE MAI NOI TEHNOLOGII</div>
                <div class="text-center font-semibold mt-2">Cele mai recente unelte WEB</div>
                <div class="text-center font-semibold mt-2">Suntem în pas cu cerințele pieții</div>
                <div class="flex justify-center mt-4"><div class="border-2 w-36 font-semibold text-center rounded-full">CONTACTEAZĂ-NE!</div></div>
                </a>
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
                'teacher': 'photos/courseIcons/teacher.png',
                'studying':'photos/courseIcons/studying.png',
                'certificate':'photos/courseIcons/certificate.png',
                'tech':'photos/courseIcons/tech.png',
            }
        }
    }
}
</script>
<style scoped>
#heading-programe{
    color: #111 ;
    font-family: 'Lato',
    sans-serif; font-size: 54px;
    font-weight: 600;
    line-height: 58px;
}
.card {
    width: 250px;
    height: 300px;
    transition: 1.2s;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
}
.card:hover{
    transform: rotate(12deg);
}
@media only screen and (max-width: 600px) {
    #heading-programe{
        font-size: 22px;
    }
    #mobile-despre{
        display: block;
    }
    .center{
        margin: 50px auto auto auto;
    }
    .despre-container{
        margin-top: 5px;
    }
}
</style>
