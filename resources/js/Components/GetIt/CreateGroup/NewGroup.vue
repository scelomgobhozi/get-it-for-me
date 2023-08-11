<template>
<div class="create-group-wrapper mt-6">
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
        <p class="text-center mt-5 bg-gray-200 rounded-md" >{{offGroupLink}}</p>
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
        return {
            form,
            offGroupLink
        };



    },
}
</script>

<style scoped>
.create-group-container{
    background:rgb(184, 181, 255, .1);
    filter: drop-shadow(0px 4px 13px rgba(0, 0, 0, 0.25));

}
</style>
