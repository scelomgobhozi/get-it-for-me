<template>
    <div class="admin-text-container   ">
        <div class="message-text-wrapper bg-red h-full w-full">
            <div class="chat-header bg-[#5A4FF3] text-center   p-2 relative rounded-t-xl">

                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                     class=" relative right-[30%] md:hidden inline-block bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                </svg>
                <a class="text-start inline-block underline text-white	font-semibold" href="#">Group Request</a>
            </div>

          <div v-if="room_request">
              <div >

                   <div v-for="roomRequest in room_request" :key="roomRequest.id" class="request-area-container   pl-2 pr-2 h-max pt-1 pb-1 overflow-y-auto">
                     <div class="request-area bg-gray-400 mt-6 p-3 rounded-lg">
                      <p> Group: {{roomRequest.room_name}}</p>
                      <p>Name: {{roomRequest.name}}</p>
                      <p>Email: {{roomRequest.email}}m</p>
                       <p>Phone {{roomRequest.phone}}r</p>
                    <button class="bg-[#5A4FF3] p-2 rounded-md  flex" @click="approveMember(roomRequest.admin_id, roomRequest.from_id, roomRequest.room_id)" >Approve</button>
                      </div>
                   </div>
              </div>
            </div>


        </div>
    </div>
</template>

<script>
import {router} from "@inertiajs/vue3";

export default {
    name: "RoomRequest",
    props:{
        room_request:Object
    },
    methods:{
        approveMember(adminID,fromID, roomID ){
            router.post('/group-request/store',{
                from_id: fromID,
                room_id:roomID,
                admin_id:adminID
            },{
                onSuccess: (page) => {console.log(page)},
            });


        }
    }
}
</script>

<style scoped>
.show-all-cont{
    background:rgb(184, 181, 255, .1);
    filter: drop-shadow(0px 4px 13px rgba(0, 0, 0, 0.25));

}
</style>
