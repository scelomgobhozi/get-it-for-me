<template>

    <div class="max-w-7xl home-container m-auto mt-5">
        <div class="home-wrapper  flex justify-between ">


            <!--            Show all groups     -->
            <div class="shadow-black	 show-all-cont  w-2/5  p-5 rounded-lg">
                <div class="create-group flex justify-between w-full">
                    <!--          Group button and header-->
                    <h5 class="   font-semibold flex">Rooms</h5>

                    <button class="bg-[#5A4FF3] p-2 rounded-md  flex">Create group</button>

                </div>

                <ShowRoom> </ShowRoom>
            </div>

            <!--          The Chat Area    -->
            <div class="flex w-2/5 bg-black-100">
                <ShowMessage></ShowMessage>
            </div>


        </div>
    </div>


</template>

<script>
import ShowRoom from "@/Components/GetIt/Home/ShowRoom.vue";
import ShowMessage from "@/Components/GetIt/Home/ShowMessage.vue";
export default {
    name: "HomeCompLayout",
    components:{
        ShowRoom,
        ShowMessage,
    }
}
</script>

<style scoped>
.create-group h5 {
    max-width: 50px;
}

.show-all-cont{
    background:rgb(184, 181, 255, .1);
    filter: drop-shadow(0px 4px 13px rgba(0, 0, 0, 0.25));






}
</style>
