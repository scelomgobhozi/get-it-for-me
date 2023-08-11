<template>
 <join-group-request :groupDetails="groupDetails" :user="user"></join-group-request>
</template>

<script>
import JoinGroupRequest from "@/Components/Join/JoinGroupRequest.vue";
import {usePage  } from "@inertiajs/vue3";
export default {
    name: "JoinGroupLayout",
    components: {
        JoinGroupRequest
    },
    props:{
        groupDetails:Object,
        user:Object
    }

}
</script>

<style scoped>

</style>
