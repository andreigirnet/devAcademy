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
import Dece from "./DeceComponent";
import CourseComponent from "./NewCourseComponent";
import instruction from "./HowItWorksComponent";
import DespreComponent from "./DespreComponent";
import ContactHome from "./ContactHomeComponent";
import FooterComponent from "./FooterComponent";
import LogoComponent from "./LogoComponent";
export default {
    components: {
        NavigationComponent,
        SwiperComponent,
        Dece,
        DespreComponent,
        ContactHome,
        FooterComponent,
        LogoComponent,
        instruction,
        CourseComponent,
    },
    data(){
        return{

        }
    },
    methods:{

    }
};
</script>
<style>
#heading-programe-dece{
    color: #111 ;
    font-family: 'Lato',
    sans-serif; font-size: 54px;
    font-weight: 600;
    line-height: 58px;
}
</style>
