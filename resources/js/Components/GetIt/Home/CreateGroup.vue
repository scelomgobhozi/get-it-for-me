<template>
    <div class="create-group flex justify-between w-full ">
        <!--          Group button and header-->
        <h5 class="   font-semibold flex">Rooms</h5>


        <Link class="bg-[#5A4FF3] p-2 rounded-md  flex" :href="route('create-group')"> Create group </Link>

    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
export default {
    name: "CreateGroup",
    components: {
        Link
    }
}
</script>

<style scoped>
.create-group h5 {
    max-width: 50px;
}


</style>
