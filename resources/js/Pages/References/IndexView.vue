<script setup>
import { Link } from "@inertiajs/vue3";
import NavigationCard from "@/Pages/Components/Navigation/NavigationCard.vue";
</script>

<template>
    <div class="flex gap-12">
        <NavigationCard link="employee-types.index" src="/images/assets/menus/employee.png" title="Empoloyee Types"/>
        <NavigationCard link="blood-types.index" src="/images/assets/menus/small-blood-type.png" title="Blood Types"/>
    </div>
</template>
