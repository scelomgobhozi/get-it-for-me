<template>
    <div class="create-group-wrapper mt-6">
        <div class="create-group-container  w-full sm:w-96 h-80 mx-auto p-4 rounded-lg">
            <p class="text-center bold font-black text-sm" >WHAT DO YOU WANT SOMEONE TO GET YOU ?</p>
            <div v-if="preferences" class= "pt-6">
                <div v-for="likes in preferences" :key="likes.id" class="flex justify-between">
                    <p>{{likes.preference}}</p>
                    <p> <Link :href="route('preferences.destroy', likes.id)">🗑️ </Link> </p>
                </div>

            </div>
            <form @submit.prevent="form.post(route('preferences.store'),{
            preserveScroll: true,
            onSuccess: () => form.reset()
        })" >

            <input  class="rounded-md w-full mt-4"
                   type="text"
                   placeholder="what do you want"
                   v-model="form.like"
              >
<!--                <div v-if="form.errors.email">{{ form.errors.like }}</div>-->
            <div class="text-center">
                <button class="bg-[#5A4FF3] p-2 rounded-md mt-2 mx-auto"  type="submit" >Add</button>
            </div>
            </form>
        </div>
    </div>
</template>

<script >

  import {useForm , Link} from "@inertiajs/vue3";
  import { usePage } from '@inertiajs/vue3'


  export default {
      components: {
          Link
      },
      data() {
          return {
              userId: ''
          }
      },

      props: {

          preferences: Object
      },
      setup() {

          const form = useForm({

              like: ''
          })

          return {form};



      },

      mounted (){


      }
      // created: {
      //     start() {
      //         let page = usePage();
      //         this.userId = page.props.auth.user.id;
      //         console.log(this.userId);
      //
      //
      //     }
      //}
  }
</script>

<style scoped>

</style>
