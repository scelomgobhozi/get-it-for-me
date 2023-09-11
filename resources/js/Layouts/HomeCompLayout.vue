<template>

    <div class="max-w-7xl home-container m-auto mt-5">
        <div class="home-wrapper   ">


            <!--            Show all groups     -->

            <div class="shadow-black m-auto	 show-all-cont  md:w-2/5  p-5 rounded-lg">
                <div v-if="$page.props.flash.message" class="alert">
                    {{$page.props.flash.message}}
                </div>
             <create-group></create-group>


                <ShowRoom :compact="compact" > </ShowRoom>
            </div>

            <!--          The Chat Area    -->



        </div>
    </div>


</template>

<script>
import ShowRoom from "@/Components/GetIt/Home/ShowRoom.vue";
import ShowMessage from "@/Components/GetIt/Home/ShowMessage.vue";
import CreateGroup from "@/Components/GetIt/Home/CreateGroup.vue";
export default {
    name: "HomeCompLayout",
    components:{
        ShowRoom,
        ShowMessage,
        CreateGroup
    },
    props:{
    compact:Object
    }
}
</script>

<style scoped>
.show-all-cont{
    background:rgb(184, 181, 255, .1);
    filter: drop-shadow(0px 4px 13px rgba(0, 0, 0, 0.25));

}
</style>
