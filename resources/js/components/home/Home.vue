<template>
    <div>
        <NavigationComponent></NavigationComponent>
        <SwiperComponent></SwiperComponent>
        <CourseComponent></CourseComponent>
        <Dece></Dece>
        <instruction></instruction>
        <DespreComponent></DespreComponent>
        <ContactHome></ContactHome>
        <FooterComponent></FooterComponent>
        <LogoComponent></LogoComponent>
    </div>
</template>

<script>
import NavigationComponent from "./NavigationComponent";
import SwiperComponent from "./SwiperComponent";
import CourseComponent from "./CourseComponent";
import Dece from "./DeceComponent";
import instruction from "./HowItWorksComponent";
import DespreComponent from "./DespreComponent";
import ContactHome from "./ContactHomeComponent";
import FooterComponent from "./FooterComponent";
import LogoComponent from "./LogoComponent";
export default {
    components: {
        NavigationComponent,
        SwiperComponent,
        CourseComponent,
        Dece,
        DespreComponent,
        ContactHome,
        FooterComponent,
        LogoComponent,
        instruction
    },
    data(){
        return{

        }
    }
};
</script>
<style>

</style>
