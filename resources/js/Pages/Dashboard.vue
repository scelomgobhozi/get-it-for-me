<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import HomeCompLayout from "@/Layouts/HomeCompLayout.vue";
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Home" />

    <AuthenticatedLayout>

        <home-comp-layout></home-comp-layout>

    </AuthenticatedLayout>




</template>
