<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import CreateGroupLayout from "@/Layouts/CreateGroupLayout.vue";
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Group" />

    <AuthenticatedLayout>

        <create-group-layout></create-group-layout>

    </AuthenticatedLayout>



</template>



