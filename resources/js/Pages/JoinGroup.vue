<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import JoinGroupLayout from "@/Layouts/JoinGroupLayout.vue";
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Join Request"/>
    <AuthenticatedLayout>

       <join-group-layout></join-group-layout>

    </AuthenticatedLayout>
</template>




