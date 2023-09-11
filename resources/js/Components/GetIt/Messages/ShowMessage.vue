<template>

        <div class="message-text-container   ">
            <div class="message-text-wrapper bg-red h-full">
                <div class="chat-header bg-[#5A4FF3] text-center w-full  p-2 relative rounded-t-xl">

                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class=" relative right-[30%] md:hidden inline-block bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                    </svg>
                    <a class="text-start inline-block underline text-white underline	font-semibold" href="/room">Mgobhozi Household</a>
                </div>


                <div class="chat-area-container  pl-2 pr-2 h-[32rem] pt-1 pb-1 overflow-y-scroll">

                    <div v-for="message in messages"  :key="message.id" :class="{high: message.priority }" class="chat-area-wrapper bg-gray-300  p-2 mt-6 mb-6 rounded-lg loop-div-wrap">
                        <div class="message-header">
                            <a class=" underline font-bold" href="">{{message.name}}</a>
                            <span class="ml-3 text-xs">{{moment(message.created_at).format("h:mm: a")}}</span>
                        </div>
                        <div class="justify-between flex">

                            <div class="actual-message flex">
                                <p>{{message.message}}</p>
                            </div>
                            <div class="checkbox-confirm flex">
                                <input class="block" type="checkbox" v-model="isChecked" @change="removeItem(message.id)" name="bought" id="" >
                            </div>

                        </div>
                        <div class="message-date text-center pt-4">
                            <span class="font-black ">{{moment(message.created_at).format("Do MMMM  YYYY")}}</span>
                        </div>

                    </div>
                </div>


                <div class="send-message">
                    <div class="message-wrapper">
                        <form @submit.prevent="form.post(route('messages.store'),{
                         preserveScroll: true,
                         onSuccess: () => form.reset()
                         })" >
                        <div class="input-container">
                            <textarea class="w-full rounded-lg" cols="40" rows="4" placeholder="What do you want ?" v-model="form.message"></textarea>
                          <InputError class="mt-2" :message="form.errors.message" />
                        </div>
                        <div class="send-message-action flex justify-between">
                            <div class="message-priority-select flex">

                                <select class=" " name="Priority" id="priority"  v-model="form.priority">
                                    <option value="" disabled selected hidden> Choose priority </option>
                                    <option value="high">High</option>
                                    <option value="medium">Medium</option>
                                    <option value="low">Low</option>
                                </select>
                              <InputError class="mt-2" :message="form.errors.priority" />

                            </div>

                            <div class="message-button-send flex">
                                <button class="bg-[#5A4FF3] p-2 rounded-md   font-white" type="submit">Send 📩</button>
                            </div>

                        </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>

</template>

<script>
import {router, useForm, usePage} from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import moment from "moment";

export default {
    name: "ShowMessage",
  components: {InputError},
    props:{
        messages:Object
    },
    setup(){
        const form = useForm({

            message: '',
            priority:'',
           room_id:usePage().props.room
        })



        return{
            isChecked:false,
           form,
          moment:moment,
          high:'red',
          medium:'orange',
          low:'grey'



        }
    },
    watch:{
      isChecked(newVal){
          console.log('Hey bro');
      }
    },
    methods:{
      removeItem(id){
          console.log(id);

              router.put('/messages/destroy',{
                  message_id: id,

              },{
                  onSuccess: (page) => {console.log(page)},
              });
      }
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
.high{
  background-color: red;
}

.medium{
  background-color: orange;
}
.low{
  background-color: #a0aec0;
}
</style>
