<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import LikesLayout from '@/Layouts/LikesLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Messages>"/>
    <AuthenticatedLayout>

      <likes-layout></likes-layout>

    </AuthenticatedLayout>
</template>




