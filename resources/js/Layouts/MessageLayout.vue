<template>
    <div class="max-w-7xl home-container m-auto mt-5 ">
        <div class="home-wrapper  flex-none md:flex md:justify-between lg:justify-between overscroll-contain ">


            <!--            Show all groups     -->
            <div class="shadow-black hidden md:block show-all-cont h-[20rem] md:w-2/5  p-5 rounded-lg">
                <create-group></create-group>


                <ShowRoom> </ShowRoom>
            </div>

            <!--          The Chat Area    -->
            <div class="no-flex md:flex  w-full md:w-2/5 bg-black-300  overscroll-contain ">
                <ShowMessage></ShowMessage>
            </div>


        </div>
    </div>


</template>

<script>
import ShowRoom from "@/Components/GetIt/Messages/ShowRoom.vue";
import ShowMessage from "@/Components/GetIt/Messages/ShowMessage.vue";
import CreateGroup from "@/Components/GetIt/Home/CreateGroup.vue";

export default {
    name: "MessageLayout",
    components: {
        ShowRoom,
        ShowMessage,
        CreateGroup
    },
}
</script>

<style scoped>
.show-all-cont{
    background:rgb(184, 181, 255, .1);
    filter: drop-shadow(0px 4px 13px rgba(0, 0, 0, 0.25));

}


</style>
