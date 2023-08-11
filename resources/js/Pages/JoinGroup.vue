<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import JoinGroupLayout from "@/Layouts/JoinGroupLayout.vue";
import { Head } from '@inertiajs/vue3';
defineProps({
    groupDetails :{
        type:Object
    },
    user :{
       type:Object
    }
})
</script>

<template>
    <Head title="Join Request"/>
    <AuthenticatedLayout>

       <join-group-layout :groupDetails="groupDetails" :user="user"></join-group-layout>

    </AuthenticatedLayout>
</template>




