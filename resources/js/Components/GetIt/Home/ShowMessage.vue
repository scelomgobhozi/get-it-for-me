<template>

        <div class="message-text-container   ">
            <div class="message-text-wrapper ">
                <div class="chat-header bg-[#5A4FF3] text-center w-96 p-2 relative rounded-t-xl">

                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class=" relative right-20 inline-block bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                    </svg>
                    <a class="text-start inline-block underline text-white	font-semibold" href="#">Mgobhozi Household</a>
                </div>


                <div class="chat-area-container">
                    <div class="chat-area-wrapper bg-red-200 p-2">
                        <div class="message-header">
                            <a class=" underline font-bold" href="">Sicelo</a>
                            <span class="ml-3 text-xs">14:04</span>
                        </div>
                        <div class="justify-between flex">

                            <div class="actual-message flex">
                                <p>Noodle pack durban curry</p>
                            </div>
                            <div class="checkbox-confirm flex">
                                <input class="block" type="checkbox" name="bought" id="" >
                           </div>

                        </div>
                    </div>

                </div>



            </div>
        </div>

</template>

<script>
export default {
    name: "ShowMessage"
}
</script>

<style scoped>
.message-text-wrapper{
    background:rgb(234 , 233 , 255 , .4)
}
</style>
