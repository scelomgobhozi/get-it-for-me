<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import GroupManagementLayout from "@/Layouts/GroupManagementLayout.vue";
import {Head} from '@inertiajs/vue3';

</script>

<template>

    <Head title="Admin"/>
    <AuthenticatedLayout>
         <group-management-layout></group-management-layout>
    </AuthenticatedLayout>


</template>


