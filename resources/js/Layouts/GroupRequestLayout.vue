<template>
    <div class="max-w-7xl home-container m-auto mt-5  ">
        <div class="home-wrapper  overflow-x-hidden pr-6">



            <!--          The Chat Area    -->
            <div class="no-flex m-auto  w-full sm:w-full md:w-2/5 bg-black-300  overscroll-contain ">
                <RoomRequest :room_request="room_request"></RoomRequest>
            </div>


        </div>
    </div>
</template>

<script>

import GroupShowRoom from "@/Components/GetIt/Admin/GroupShowRoom.vue";
import RoomRequest from "@/Components/GetIt/GroupRequest/RoomRequest.vue";
export default {
    name: "GroupRequestLayout",
    components:{
        GroupShowRoom,
        RoomRequest
    },
    props:{
        room_request:Object
    }
}
</script>

<style scoped>

</style>
