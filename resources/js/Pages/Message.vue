<template>
    <Head title="Messages>"/>
    <AuthenticatedLayout>


        <MessageLayout></MessageLayout>

    </AuthenticatedLayout>


</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import MessageLayout from "@/Layouts/MessageLayout.vue";
import { Head } from '@inertiajs/vue3';


</script>

<style scoped>

</style>
