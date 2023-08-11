<template>
    <Head title="Messages>"/>
    <AuthenticatedLayout>


        <MessageLayout :messages="messages"></MessageLayout>

    </AuthenticatedLayout>


</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import MessageLayout from "@/Layouts/MessageLayout.vue";
import { Head } from '@inertiajs/vue3';

defineProps({
    messages:{
        type:Object
    },

});

</script>

<style scoped>

</style>
