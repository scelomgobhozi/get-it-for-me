<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import CreateGroupLayout from "@/Layouts/CreateGroupLayout.vue";
import { Head } from '@inertiajs/vue3';

defineProps({
    groupLink:{
        type:Object
    },

});
</script>

<template>
    <Head title="Group" />

    <AuthenticatedLayout>

        <create-group-layout :groupLink="groupLink"></create-group-layout>

    </AuthenticatedLayout>



</template>



