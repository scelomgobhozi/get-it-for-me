<template>

        <div class="message-text-container   ">
            <div class="message-text-wrapper bg-red h-full">
                <div class="chat-header bg-[#5A4FF3] text-center w-full  p-2 relative rounded-t-xl">

                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class=" relative right-[30%] md:hidden inline-block bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                    </svg>
                    <a class="text-start inline-block underline text-white underline	font-semibold" href="/room">Mgobhozi Household</a>
                </div>


                <div class="chat-area-container  bg-red-500 pl-2 pr-2 h-[32rem] pt-1 pb-1 overflow-y-scroll">
                    <div v-for="message in messages"  :key="message.id" class="chat-area-wrapper bg-red-200 p-2 mt-6 mb-6 rounded-lg">
                        <div class="message-header">
                            <a class=" underline font-bold" href="">{{message.from_id}}</a>
                            <span class="ml-3 text-xs">14:04</span>
                        </div>
                        <div class="justify-between flex">

                            <div class="actual-message flex">
                                <p>{{message.message}}</p>
                            </div>
                            <div class="checkbox-confirm flex">
                                <input class="block" type="checkbox" name="bought" id="" >
                            </div>

                        </div>
                        <div class="message-date text-center pt-4">
                            <span class="font-black ">09 June 2023</span>
                        </div>

                    </div>
                </div>


                <div class="send-message">
                    <div class="message-wrapper">
                        <div class="input-container">
                            <textarea class="w-full rounded-lg" cols="40" rows="4" placeholder="What do you want ?"></textarea>
                        </div>
                        <div class="send-message-action flex justify-between">
                            <div class="message-priority-select flex">

                                <select class=" " name="Priority" id="priority" >
                                    <option value="high">High</option>
                                    <option value="medium">Medium</option>
                                    <option value="low">Low</option>
                                </select>

                            </div>

                            <div class="message-button-send flex">
                                <button class="bg-[#5A4FF3] p-2 rounded-md   font-white">Send 📩</button>
                            </div>



                        </div>
                    </div>
                </div>



            </div>
        </div>

</template>

<script>
export default {
    name: "ShowMessage",
    props:{
        messages:Object
    }
}
</script>

<style scoped>
.message-text-wrapper{
    background:rgb(234 , 233 , 255 , .4)
}

.message-date{
    font-size: 10px;

}
</style>
