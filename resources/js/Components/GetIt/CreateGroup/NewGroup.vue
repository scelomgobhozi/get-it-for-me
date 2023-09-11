<template>
<div class="create-group-wrapper mt-6">
<div v-if="$page.props.flash.message " class="m-auto" :class="{hidden:closeModal}" >
    <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 text-sm font-normal">{{$page.props.flash.message}}</div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close" @click="closeToast()">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
</div>

    <div class="create-group-container bg-red-500 w-full sm:w-96 h-80 mx-auto p-4 rounded-lg">
        <form @submit.prevent="form.post(route('create-room.store'),{
            preserveScroll: true,
            onSuccess: () => form.reset()
        })" >
          <p class="text-center" >Group Name</p>
           <input class="rounded-md w-full mt-4"
                  type="text"
                  placeholder="Group Name"
                  v-model="form.room_name"
                  id="">
            <InputError class="mt-2" :message="form.errors.room_name" />
           <div class="text-center">
              <button class="bg-[#5A4FF3] p-2 rounded-md mt-2 mx-auto" type="submit" >Create</button>


            </div>
        </form>
        <div v-if="groupLink">
          <div  >
            <p class="text-center mt-5 bg-gray-200 rounded-md" >{{groupLink.groupUrl}}</p>
          </div>
        </div>
    </div>
</div>
</template>

<script>
import {usePage , useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
export default {
    name: "NewGroup",
    components: {InputError},

    setup() {

        const form = useForm({

            room_name: ''
        })
        const offGroupLink = usePage().props.groupLink.groupUrl;
        let closeModal = false
        return {
            form,
            offGroupLink,
            closeModal
        };



    },
    props:{
        groupLink:Object
    },
    methods:{
        closeToast(){
            this.closeModal = true;
        }
    }
}
</script>

<style scoped>
.create-group-container{
    background:rgb(184, 181, 255, .1);
    filter: drop-shadow(0px 4px 13px rgba(0, 0, 0, 0.25));

}
</style>
