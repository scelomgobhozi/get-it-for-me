<template>
    <div class="max-w-7xl home-container m-auto mt-5  ">
        <div class="home-wrapper  flex-none md:flex md:justify-between lg:justify-between overflow-x-hidden">


            <!--            Show all groups     -->
            <div class="shadow-black hidden md:block show-all-cont h-[20rem] sm:min-w-fit md:w-2/5  p-5 rounded-lg">
                <create-group></create-group>


                <ShowRoom></ShowRoom>
            </div>

            <!--          The Chat Area    -->
            <div class="no-flex lg:flex  w-full sm:w-full md:w-2/5 bg-black-300  overscroll-contain ">
                <AdminManagement></AdminManagement>
            </div>


        </div>
    </div>
</template>

<script>
import ShowRoom from "@/Components/GetIt/Home/ShowRoom.vue";
import CreateGroup from "@/Components/GetIt/Home/CreateGroup.vue";
import AdminManagement from "@/Components/GetIt/Admin/AdminManagement.vue";

export default {
    name: "GroupManagementLayout",
    components: {
        ShowRoom,
        CreateGroup,
        AdminManagement
    }
}
</script>

<style scoped>

</style>
