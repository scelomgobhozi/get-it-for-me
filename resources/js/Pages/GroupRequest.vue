<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import GroupRequestLayout from "@/Layouts/GroupRequestLayout.vue";
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Request"/>
    <AuthenticatedLayout>

       <group-request-layout></group-request-layout>

    </AuthenticatedLayout>
</template>




