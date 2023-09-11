<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import GroupRequestLayout from "@/Layouts/GroupRequestLayout.vue";
import { Head } from '@inertiajs/vue3';

defineProps({
    room_request:{
        type:Object
    },

});
</script>

<template>
    <Head title="Request"/>
    <AuthenticatedLayout>

       <group-request-layout :room_request="room_request"></group-request-layout>

    </AuthenticatedLayout>
</template>




