<template>
    <div class="course-container mt-12" id="cursuri">
        <div class="w-full flex justify-center">
            <div class="mx-auto">
                <h1 style="color: #035397" class="mt-12 mx-auto" id="heading-programe">Cursurile Disponibile: </h1>
            </div>
        </div>
        <div class="course-cards">
            <div class="course-card" v-for="(course, index) in courses" :key="index">
                <div><img class="course-img" :src="course.image" alt=""></div>
                <div>
                    <div  class="text-center font-extrabold text-xl mt-4 text-uppercase">{{course.name}}</div>
                    <div style="color:#e86305;" class="course-card-stack text-center font-bold text-lg text-gray-600 mt-2 text-uppercase">{{course.stack}}</div>
                </div>
                <div v-on:click="showSingleModal(course)" class="course-card-stack text-center font-extrabold text-lg border border-gray-500 rounded-xl px-4 py-2 cursor-pointer hover:bg-gray-600 hover:text-white">Detalii despre curs</div>
            </div>
        </div>
        <div class="modal-content-container" v-if="showModal">
            <div class="modal-header">
                <div style="color:#e86305;" class="modal-header-text font-bold text-uppercase">{{course.name}}</div>
                <img class="close-image" v-on:click="hideModal" src="photos/courseIcons/cancel.png" alt="">
            </div>
            <div class="modal-body">
                <img :src="course.image" class="image-detail" alt="">
                <div class="course-content">
                    <div class="price text-gray-600 font-bold text-2xl">Price: <span class="text-green-600 font-normal">{{course.price}}£</span></div>
                    <div class="price text-gray-600 font-bold text-2xl">Stack: <span class="text-gray-600 font-normal">{{course.stack}}</span></div>
                    <div class="price text-gray-600 font-bold text-2xl">Durata: <span class="text-gray-600 font-normal">{{course.durata}}</span></div>
                    <div class="price text-gray-600 font-bold text-2xl">Descriere: <span class="text-gray-600 font-normal">{{course.description}}</span></div>
                    <div class="mt-4">
                        <a class="rezerva-button mt-4" href="#contact" v-on:click="hideModal">Rezervă acum</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import axios from 'axios'

    export default {

        data(){
            return{
                courses:[],
                showModal: false,
                course: []
            }
        },
        mounted() {
            this.getCourses()
        },
        methods:{
            getCourses(){
                axios.get('./api/courses').then(response=> this.courses = response.data)
            },
            showSingleModal(course){
                this.course = course
                this.showModal = true
            },
            hideModal(){
                this.course = [];
                this.showModal = false
            }
        }
    }
</script>
<style>
#heading-programe{
    color: #111 ;
    font-family: 'Lato',
    sans-serif; font-size: 54px;
    font-weight: 600;
    line-height: 58px;
    text-transform: uppercase;
}
.course-cards{
    width: 80%;
    margin: 80px auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-column-gap: 20px;
}
.course-img{
    width: 200px;
    height: 200px;
}
.modal-header-text{
    font-size: 30px;
}
.course-card{
    width: 300px;
    height: 400px;
    display: flex;
    padding: 15px;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    border-radius: 16px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
}
.modal-content-container{
    width: 80%;
    height: 600px;
    background: white;
    opacity: 1;
    position: fixed;
    z-index: 4;
    top: 50%;  /* position the top  edge of the element at the middle of the parent */
    left: 50%; /* position the left edge of the element at the middle of the parent */
    transform: translate(-50%, -50%);
    border-radius: 16px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
}
.close-image{
    width: 30px;
    cursor: pointer;
}
.modal-header{
    display: flex;
    justify-content: space-between;
}
.image-detail{
    width: 300px;
    height: 300px;
}
.modal-body{
    width: 90%;
    margin: auto;
    display: flex;
    column-gap: 100px
}
.course-content{
    width: 70%;
}
.rezerva-button{
    background: #e86305;
    font-size: 20px;
    border-radius: 16px;
    padding: 10px 20px;
    margin-top: 10px;
    color: white;
    font-weight: 600;
}
a:hover{
    color: white;
}
@media only screen and (max-width: 600px) {
    #heading-programe{
        font-size: 30px;
        font-weight: 700;
        margin-top: 110px;
    }
    .course-cards{
        display: grid;
        grid-template-columns: 1fr;
        row-gap: 60px;
        grid-column-gap: 0;
        justify-content: center;
    }
    .modal-header-text{
        font-size: 20px;
    }
    .image-detail{
        width: 100px;
        height: 100px;
    }
    .modal-body{
        flex-direction: column;
        align-items: center;
    }
    .course-content{
        width: 100%;
    }
    .modal-content-container{
        height: 700px;
        overflow-y: scroll;
        padding: 20px 10px;
    }
    .course-card{
        width: 330px;
    }
}
</style>
