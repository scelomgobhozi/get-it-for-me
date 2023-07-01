<template>
<div class="create-group-wrapper mt-6">
    <div class="create-group-container bg-red-500 w-full sm:w-96 h-80 mx-auto p-4 rounded-lg">
        <p class="text-center" >Group Name</p>
        <input class="rounded-md w-full mt-4" type="text" placeholder="Group Name" name="" id="">
        <div class="text-center">
              <button class="bg-[#5A4FF3] p-2 rounded-md mt-2 mx-auto" >Create</button>
        </div>
        <p class="text-center mt-5 bg-gray-200 rounded-md">https://tailwindcss.com/docs/text-align🗒️️</p>
    </div>
</div>
</template>

<script>
export default {
    name: "NewGroup"
}
</script>

<style scoped>
.create-group-container{
    background:rgb(184, 181, 255, .1);
    filter: drop-shadow(0px 4px 13px rgba(0, 0, 0, 0.25));

}
</style>
