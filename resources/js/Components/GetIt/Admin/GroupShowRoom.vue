<template>
    <div class="show-room-container mx-auto">
        <div class="create-group flex justify-between ">
            <!--          Group button and header-->
            <h5 class="   font-semibold flex">Rooms</h5>

            <button class="bg-[#5A4FF3] p-2 rounded-md  flex">Create group</button>

        </div>

        <div class="show-room-wrapper max-w-xs mt-12 mr-auto ml-auto rounded-lg p-2	justify-start relative  sm:w-72">
            <div class="inline-block rounded-full bg-red-500 h-10 w-10  mb-4 ml-2 text-center ">
                <h1 class="p-2">M</h1>
            </div>
            <div class="inline-block  pl-2 w-30 h-12 relative top-2 ml-2">

                <a class="room-name-p font-extrabold" href="/message">Mgobhozi House Hold</a>
                <p class="room-message-p ">Mbaili: Phata ama noodles</p>
            </div>

            <div class="h-4 w-4 bg-red-600 inline-block ml-10  ">


            </div>


        </div>
    </div>
</template>

<script>
export default {
    name: "GroupShowRoom"
}
</script>

<style scoped>
.show-room-wrapper{
    background-color:#EFEFEF;
}
.room-name-p{
    font-size:13px;
}

.room-message-p{
    font-size: small
}
</style>
