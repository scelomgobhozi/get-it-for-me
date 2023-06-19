<template>
    <div class="max-w-7xl home-container m-auto mt-5  ">
        <div class="home-wrapper  flex-none md:flex justify-between overflow-x-hidden">


            <!--            Show all groups     -->
            <div class=" no-flex md:flex shadow-black hidden md:block show-all-cont h-[20rem] sm:min-w-fit md:w-2/5  p-5 rounded-lg">
                 <GroupShowRoom></GroupShowRoom>
            </div>

            <!--          The Chat Area    -->
            <div class="no-flex   w-full sm:w-full md:w-2/5 bg-black-300  overscroll-contain ">
                <AdminManagement></AdminManagement>
            </div>


        </div>
    </div>
</template>

<script>
import GroupShowRoom from "@/Components/GetIt/Admin/GroupShowRoom.vue";
import AdminManagement from "@/Components/GetIt/Admin/AdminManagement.vue";

export default {
    name: "GroupManagementLayout",
    components: {
        GroupShowRoom,
        AdminManagement
    }
}
</script>

<style scoped>
.show-all-cont{
    background:rgb(184, 181, 255, .1);
    filter: drop-shadow(0px 4px 13px rgba(0, 0, 0, 0.25));

}
</style>
