<template>
    <div class="show-room-container flex-none h-[20rem]">

        <div v-for="rooms in compact" :key="rooms.id" class="show-room-wrapper max-w-xs mt-12 mr-auto ml-auto rounded-lg p-2	justify-start relative ">
           <div class="inline-block rounded-full bg-red-500 h-10 w-10  mb-4 ml-2 text-center ">
             <h1 class="p-2">M</h1>
           </div>
          <div class="inline-block  pl-2 w-30 h-12 relative top-2 ml-2">
             <Link class="room-name-p font-extrabold" :href="route('create-group')"> {{rooms.room_name}}</Link>


             <p class="room-message-p invisible">Mbaili: Phata ama noodles</p>
          </div>

           <div class="h-4 w-4 bg-red-600 inline-block ml-10  ">


          </div>


        </div>
    </div>

</template>

<script>
import { Link } from '@inertiajs/vue3';
export default {

    name: "ShowRoom",
    components: {
        Link
    },
    props : {
        compact:Object
    }

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
