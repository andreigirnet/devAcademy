<template>
    <!--            section Work-Instructions us-->
    <div class="work-wrapper">
        <div id="work-instruction">
            <div id="heading-programe">Care este procesul de înscriere?</div>
            <hr style="margin-top: 60px">
            <div id="work-instruction-content">
                <div >
                    <div class="circle-progress first-circle" data-aos="fade-right">
                        <div class="circle-nr">1</div>
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg"
                                  d="M18 2.0845
                              a 15.9155 15.9155 0 0 1 0 31.831
                              a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <path class="circle"
                                  stroke-dasharray="25, 100"
                                  d="M18 2.0845
                              a 15.9155 15.9155 0 0 1 0 31.831
                              a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <text x="18" y="20.35" class="percentage"></text>
                        </svg>
                    </div>
                    <div class="circle-title" data-aos="fade-right">
                        <div><img style="width: 35px" src="photos/courseIcons/messenger.png" alt=""></div>
                        Ne contacta-ți prin contact us sau messenger
                    </div>

                    <div class="circle-progress second-circle" data-aos="fade-right">
                        <div class="circle-nr">2</div>
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg"
                                  d="M18 2.0845
                              a 15.9155 15.9155 0 0 1 0 31.831
                              a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <path class="circle"
                                  stroke-dasharray="50, 100"
                                  d="M18 2.0845
                              a 15.9155 15.9155 0 0 1 0 31.831
                              a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <text x="18" y="20.35" class="percentage"></text>
                        </svg>
                    </div>
                    <div class="circle-title" data-aos="fade-right">
                        <div><img style="width: 35px" src="photos/courseIcons/presentation.png" alt=""></div>
                        Prezentare gratuită a cursului de catre instructor
                    </div>

                    <div class="circle-progress second-circle" data-aos="fade-right">
                        <div class="circle-nr">3</div>
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg"
                                  d="M18 2.0845
                              a 15.9155 15.9155 0 0 1 0 31.831
                              a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <path class="circle"
                                  stroke-dasharray="75, 100"
                                  d="M18 2.0845
                              a 15.9155 15.9155 0 0 1 0 31.831
                              a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <text x="18" y="20.35" class="percentage"></text>
                        </svg>
                    </div>
                    <div class="circle-title" data-aos="fade-right">
                        <div><img style="width: 35px" src="photos/courseIcons/coding.png" alt=""></div>
                        Începerea și derularea cursului
                    </div>

                    <div class="circle-progress second-circle" data-aos="fade-right">
                        <div class="circle-nr">4</div>
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg"
                                  d="M18 2.0845
                              a 15.9155 15.9155 0 0 1 0 31.831
                              a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <path class="circle"
                                  stroke-dasharray="100, 100"
                                  d="M18 2.0845
                              a 15.9155 15.9155 0 0 1 0 31.831
                              a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <text x="18" y="20.35" class="percentage"></text>
                        </svg>
                    </div>
                    <div class="circle-title" data-aos="fade-right">
                        <div><img style="width: 35px" src="photos/courseIcons/certificate.png" alt=""></div>
                        Absolvire și certificat
                    </div>
                </div>
                <div id="work-instruction-photo">
                    <img src="photos/courseIcons/how-work.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default {

}
</script>
<style scoped>
/* Work instruction section style*/

#heading-programe{
    font-family: 'Lato',
    sans-serif; font-size: 54px;
    font-weight: 600;
    line-height: 58px;
    color: #035397;
    text-align: center;
}
#work-instruction{
    margin-top: 160px;
}
.work-wrapper{
    width: 80%;
    margin: 20px auto;
}
#why-us-content{
    margin-top: 50px;
}
.border-line{
    height: 2px;
    background-color: rgb(0, 30, 108);
    width: 100%;
    margin-top: 24px;
}
.circle-bg {
    fill: none;
    stroke: #f2eadb;
    stroke-width: 4.0;
}

.circle {
    fill: none;
    stroke-width: 3.8;
    stroke-linecap: round;
    animation: progress 1s ease-out forwards;
}
.circular-chart.orange .circle {
    stroke: #D8814E;
}

.circular-chart.green .circle {
    stroke: #4CC790;
}

.circular-chart.blue .circle {
    stroke: #3c9ee5;
}

.percentage {
    fill: #fff;
    font-family: sans-serif;
    font-size: 0.5em;
    text-anchor: middle;
}
.circle-progress{
    width: 96px;
    height: 96px;
    position: relative;
}
.circle-nr{
    position: absolute;
    top:32px;
    left:43px;
    font-family: 'Onest';
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    line-height: 32px;
}
.circle-title{
    margin-top: 36px;
    font-family: 'Averta CY';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 30px;
    display: flex;
    align-items: center;
    column-gap: 10px;
}
#work-instruction-content{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 20px;

}
#work-instruction-photo{
    margin-top: 48px;
}
#work-instruction-photo img{
    border-radius: 15px;
}
.second-circle{
    margin-top: 120px;
}
.first-circle{
    margin-top: 48px;
}

@media only screen and (max-width: 600px) {
    #work-instruction-content{
        flex-direction: column-reverse;
    }
}
</style>
