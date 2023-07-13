<script setup>

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PreferenceLayout from "@/Layouts/PreferenceLayout.vue";
import {Head} from "@inertiajs/vue3";

defineProps({
    preferences:{
        type:Object
    },

});
</script>

<template>
    <Head title="What to get me" />

    <AuthenticatedLayout>

        <PreferenceLayout  :preferences="preferences"></PreferenceLayout>

    </AuthenticatedLayout>

</template>



