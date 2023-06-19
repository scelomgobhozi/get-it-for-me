<template>
    <div class="admin-text-container   ">
        <div class="message-text-wrapper bg-red h-full w-full">
            <div class="chat-header bg-[#5A4FF3] text-center   p-2 relative rounded-t-xl">

                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                     class=" relative right-[30%] md:hidden inline-block bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                </svg>
                <a class="text-start inline-block underline text-white	font-semibold" href="#">Mgobhozi Household</a>
            </div>


            <div class="participants-area-container  bg-red-500 pl-2 pr-2 h-[32rem] pt-1 pb-1 overflow-y-auto">
                <div class="participants-wrapper w-full flex justify-between mt-5 bg-gray-200 rounded-lg p-2">
                    <p class="flex">Sicelo Mgobhozi </p>
                    <p class="flex">Admin</p>


                </div>


                <div class="participants-wrapper w-full flex justify-between mt-5 p-2  bg-gray-200 rounded-lg">
                    <p class="flex">Sandile Mgobhozi </p>
                    <p class="flex">Remove</p>


                </div>

                <div class="participants-wrapper w-full flex justify-between p-2 mt-5 bg-gray-200 rounded-lg">
                    <p class="flex">Nomxolisi Mgobhozi </p>
                    <p class="flex">Remove</p>


                </div>


            </div>


        </div>
    </div>
</template>

<script>
export default {
    name: "AdminManagement"
}
</script>

<style scoped>

</style>
