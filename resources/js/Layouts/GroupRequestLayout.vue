<template>
    <div class="max-w-7xl home-container m-auto mt-5  ">
        <div class="home-wrapper  flex-none md:flex justify-between overflow-x-hidden pr-6">


            <!--            Show all groups     -->
            <div class=" no-flex md:flex shadow-black hidden md:block show-all-cont h-[20rem] sm:min-w-fit md:w-2/5  p-5 rounded-lg ">
                <GroupShowRoom></GroupShowRoom>
            </div>

            <!--          The Chat Area    -->
            <div class="no-flex   w-full sm:w-full md:w-2/5 bg-black-300  overscroll-contain ">
                <RoomRequest></RoomRequest>
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
    }
}
</script>

<style scoped>

</style>
