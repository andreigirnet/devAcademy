<template>
    <div style="margin-top: 150px;" id="de-ce">
        <div class="w-full flex justify-center">
            <hr style="width: 80%; background-color: #001E6C;  box-shadow: 1px 1px #888888;">
        </div>
        <div class="w-full flex justify-center">
            <div class="mx-auto">
                <h1 style="color: #035397" class="mt-12 mx-auto" id="heading-programe-dece">AVANTAJELE ACESTUI CURS:</h1>
            </div>
        </div>
        <div class="container mt-12">

            <div class="card-dece">
                <a href="#contact"  style=" text-decoration: none; color: #1a1e21">
                <div class="flex justify-center mt-2 "><img :src="images['promotion']" class="w-28 img-avantaj" alt=""></div>
                <div style="color:#e86305;" class="text-center font-extrabold text-lg mt-4 text-uppercase">Carieră IT</div>
                <div class="text-center font-semibold mt-2 px-2">Unul din cele mai cerute Job-uri de pe piață</div>
                <div class="flex justify-center pt-2"><button class="text-uppercase border border-xl px-4 font-extrabold rounded-xl">Înscrie-te acum</button></div>
                </a>
            </div>

            <div class="card-dece">
                <a href="#contact" style=" text-decoration: none;     color: #1a1e21;">
                <div class="flex justify-center mt-2"><img :src="images['vacations']" class="w-28 img-avantaj" alt=""></div>
                <div style="color:#e86305;" class="text-center font-extrabold text-lg mt-4 text-uppercase">Lucru Remote</div>
                <div class="text-center font-semibold mt-2 px-2">Joburile în IT iți permit să lucrezi de unde dorești</div>
                <div class="flex justify-center pt-2"><button class="text-uppercase border border-xl px-4 font-extrabold rounded-xl">Înscrie-te acum</button></div>
                </a>
            </div>
            <div class="card-dece">
                <a href="#contact" style=" text-decoration: none;color: #1a1e21; ">
                <div class="flex justify-center mt-2 "><img :src="images['money-bag']" class="w-28 img-avantaj" alt=""></div>
                <div style="color:#e86305;" class="text-center font-extrabold text-lg mt-4 text-uppercase">Salarii bune</div>
                <div class="text-center font-semibold mt-2 px-2">Unul din cele mai platite Job-uri de pe piață</div>
                <div class="flex justify-center pt-2"><button class="text-uppercase border border-xl px-4 font-extrabold rounded-xl">Înscrie-te acum</button></div>
                </a>
            </div>
            <div class="card-dece" >
                <a href="#contact" style=" text-decoration: none;color: #1a1e21;">
                <div class="flex justify-center mt-2 "><img :src="images['clock']" class="w-28 img-avantaj" alt=""></div>
                <div style="color:#e86305;" class="text-center font-extrabold text-lg mt-4 text-uppercase">Program Flexibil</div>
                <div class="text-center font-semibold mt-2 px-2">Tu decizi orele în care vrei să lucrezi</div>
                <div class="flex justify-center pt-2"><button class="text-uppercase border border-xl px-4 font-extrabold rounded-xl">Înscrie-te acum</button></div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>

export default {

    data(){
        return{
            images:{
                'promotion': 'photos/courseIcons/promotion.png',
                'vacations': 'photos/courseIcons/vacations.png',
                'money-bag': 'photos/courseIcons/money-bag.png',
                'clock': 'photos/courseIcons/clock.png',
            }
        }
    }
};
</script>
<style scoped>

#heading-programe-dece{
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
#dece_block{
    width: 75%;
    height: 100px;
    border-radius: 10px ;
}
.card-dece {
    border-radius: 20px;
    cursor: pointer;
    width: 40%;
    height: 280px;
    object-fit:cover;
    transform-origin:center;
    transform:perspective(800px) rotateY(25deg);
    transition:0.5s;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
}
.container {
    max-width:1200px;
    display:flex;
    justify-content:center;
    align-items:center;
    gap:80px;

}
.container:hover .card-dece {
    opacity:0.3;
}
.container .card-dece:hover {
    transform:perspective(800px)       rotateY(0deg);
    opacity:1;
}
@media only screen and (max-width: 600px) {
    #heading-programe-dece{
        font-size: 28px;
        font-weight: 700;
    }
    .card-dece{
        transform: none;
        width: 350px;
        margin: 50px auto auto auto;
    }
    .container{
        display: block;
    }
    .img-avantaj{
        margin-top: 20px;
    }
}
</style>
