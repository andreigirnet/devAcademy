<template>
    <div style="margin-top: 150px" id="contact">
        <div class="w-full flex justify-center">
            <hr style="width: 80%; background-color: #001E6C;  box-shadow: 1px 1px #888888;">
        </div>
        <div class="w-full flex justify-center">
            <div class="mx-auto">
                <h1 style="color: #035397" class="mt-12 mx-auto" id="heading-programe">Contactează-ne</h1>
            </div>
        </div>
        <div class="w-full flex justify-center mt-4">
            <form ref="anyName" class="w-full max-w-lg" @submit.prevent="saveData">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Prenume
                        </label>
                        <input  v-model="contacts['first_name']" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Andrei" required>
<!--                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>-->
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            Nume
                        </label>
                        <input v-model="contacts.last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Stan" required>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >
                            E-mail
                        </label>
                        <input v-model="contacts.email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" required>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >
                            Telefon De Contact
                        </label>
                        <input v-model="contacts.telephone" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="telephone" id="telephone" type="text" required>
                    </div>
                </div>
                <label for="cars" class="font-semibold block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Alege un Program
                </label>

                <select name="program" required v-model="contacts.program" id="cars" class="w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 font-semibold text-gray-400">
                    <option value="FRONT END - BEGINNER">FRONT END - BEGINNER</option>
                    <option value="FRONT END - ADVANCED">FRONT END - ADVANCED</option>
                    <option value="LARAVEL PHP">LARAVEL PHP</option>
                    <option value="FULL STACK WEB DEV">FULL STACK WEB DEV</option>
                    <option value="PHP COURSE">PHP COURSE</option>
                </select>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Mesaj
                        </label>
                        <textarea  v-model="contacts.message" class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message"></textarea>
                    </div>
                </div>
                <div class="w-full ">
                    <div class="w-full relative">
                        <button v-on:click="saveData()" :disabled="isLoading"  class="shadow h-12 bg-blue-400 hover:bg-blue-600 w-full hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                            Trimite
                        </button>
                        <div v-if="successMessage.length"  class="shadow relative h-12 bg-green-400 hover:bg-green-600 w-full focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded flex items-center justify-center mt-4">
                            <div class="cursor-pointer"  v-for="success in successMessage">
                                {{success}}
                            </div>
                            <div class=" absolute w-6 right-4 cursor-pointer" v-on:click="successMessage=[]"><img :src="images['cancel']"></div>
                        </div>
                        <div v-if="errors.length"  v-for="error in errors" class="mt-2 relative py-1 text-xs bg-red-400 text-white font-semibold rounded-xl flex justify-center cursor:pointer">
                            <div>{{error}}</div>
                        </div>
                        <div v-if="errors.length" v-on:click="errors=[]" class="absolute">
                            <div class=" absolute w-8  cursor-pointer mt-2" v-on:click="successMessage=[]"><img :src="images['cancel']"></div>
                        </div>
                    </div>
                    <div class="md:w-2/3"></div>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data(){
        return{
            contacts:{
                first_name: '',
                last_name: '',
                email: '',
                telephone: '',
                program: '',
            },
            errors:[],
            successMessage:[],
            images:{
                'cancel': 'photos/courseIcons/cancel.png',
            },
            isLoading: null

        }
    },
    methods: {
        saveData() {

            if (this.errors=[]){
                if(!this.contacts.first_name){
                    this.errors.push('Completează spațiul cu prenumele tău')
                }

                if(!this.contacts.last_name){
                    this.errors.push('Completează spațiul cu numele tău')
                }

                if(!this.contacts.email){
                    this.errors.push('Completează spațiul cu email-ul tău')
                }

                if(!this.contacts.telephone){
                    this.errors.push('Lasa-ne un numar de contact')
                }

                if(!this.contacts.program){
                    this.errors.push('Spațiul program este obligatoriu')
                }
            }
                axios.post('api/contact', this.contacts).then(function (response) {
                })
                this.isLoading = true
                setTimeout(() => {
                    this.isLoading = false
                }, 1000)
                if (this.successMessage = []){
                 if (!this.errors.length){
                    this.successMessage.push('Mesajul tău a fost primit, te vom contacta cît mai curînd')
                 }
            }

            // if (contacts.first_name){
            //     this.successMessage= 'Mesajul dumneavoastra a fost primit'
            // }else{
            //     this.successMessage = '';
            // }
        },

    }
}
</script>
<style scoped>
    #heading-programe{
        color: #035397 ;
        font-family: 'Lato',
        sans-serif; font-size: 54px;
        font-weight: 600;
        line-height: 58px;
    }
@media only screen and (max-width: 600px) {
    #heading-programe{
        font-size: 30px;
        font-weight: 700;
    }
    form{
        padding:20px;
    }
    option{
        width: 50px;
    }
}
</style>
