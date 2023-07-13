<template>
 <preference-management  :preferences="preferences"></preference-management>
</template>

<script>
import preferenceManagement from "@/Components/GetIt/Preferences/PreferenceManagement.vue";




export default {
    name: "PreferenceLayout",
    components: {
       preferenceManagement
    },
    props:{
        preferences:Object,

    }
}
</script>

<style scoped>

</style>
