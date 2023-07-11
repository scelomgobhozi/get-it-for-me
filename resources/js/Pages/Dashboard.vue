<script >
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import HomeCompLayout from "@/Layouts/HomeCompLayout.vue";
import { Head } from '@inertiajs/vue3';

export default {
    name: "Dashboard",
    components: {
        Head,
        AuthenticatedLayout,
        HomeCompLayout
    },
    props: {
        compact:Object
    }
}

</script>

<template>
    <Head title="Home" />

    <AuthenticatedLayout>

        <home-comp-layout :compact="compact" ></home-comp-layout>

    </AuthenticatedLayout>




</template>
