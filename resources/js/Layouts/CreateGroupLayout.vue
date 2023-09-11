<template>


 <new-group :groupLink="groupLink"></new-group>


</template>

<script>
import NewGroup from "@/Components/GetIt/CreateGroup/NewGroup.vue";
export default {
    name: "CreateGroupLayout",
    components: {
        NewGroup
    },
    props:{
        groupLink:Object
    }
}
</script>

<style scoped>

</style>
