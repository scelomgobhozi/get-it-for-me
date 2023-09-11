<template>
    <div v-for="groupInfo in groupDetails " :key="groupInfo.id" class="create-group-wrapper mt-6 pt-2">
        <div class="show-room-wrapper max-w-xs mt-12 mr-auto ml-auto rounded-lg p-5	justify-between relative bg-white text-center ">
            <div class="inline-block rounded-full bg-red-500 h-10 w-10  mb-4 ml-2 text-center ">
                <h1 class="p-2">M</h1>
            </div>
            <div class="inline-block      ml-2">
                <Link class="room-name-p font-extrabold" :href="route('create-group')"> {{groupInfo.room_name}}  </Link>

            </div>

             <button :disabled="sendDisabled" @click="joinGroup(groupInfo.id,groupInfo.Admin_id)" class="bg-blue-500 p-2 rounded-md  flex mx-auto text-white"> Send joining request</button>

        </div>

    </div>
</template>

<script>
import {Link, router, usePage} from '@inertiajs/vue3';
export default {
    name: "JoinGroupRequest",
    components: {
        Link
    },
    props:{
        groupDetails:Object,

    },
    setup(){
        let userId = usePage().props.auth.user.id;
        let sendDisabled = false;
        return{
            userId,
            sendDisabled
        }
    },
    methods:{
        joinGroup(roomId,adminId){
          let uid = this.userId.toString();



           router.post('/join-room/store',{
               user_id: uid,
               room_id:roomId,
               admin_id:adminId
           },{
               onSuccess: (page) => {console.log(page)},
           });


        },

    }
}
</script>

<style scoped>

</style>
