<script setup>
const props = defineProps({
    routeName: String,
    parameter: Number
})

import { Link, router } from "@inertiajs/vue3";
</script>

<template>
    <Link :href="route(`${routeName}.edit`, parameter)"><button class="act-btn bg-green-500">Edit</button></Link>
    <Link :href="route(`${routeName}.show`, parameter)"><button class="act-btn bg-yellow-500">Show</button></Link>
    <button @click="router.delete(route(`${routeName}.destroy`, parameter))" class="act-btn bg-red-500">Delete</button>
</template>
