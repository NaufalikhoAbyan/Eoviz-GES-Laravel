<script setup>
import { Link, router } from "@inertiajs/vue3";
const props = defineProps({
    routeName: String,
    parameter: Number
});
</script>

<template>
    <Link :href="route(`${props.routeName}.edit`, props.parameter)"><button class="act-btn bg-green-500">Edit</button></Link>
    <Link :href="route(`${props.routeName}.show`, props.parameter)"><button class="act-btn bg-yellow-500">Show</button></Link>
    <button @click="router.delete(route(`${props.routeName}.destroy`, props.parameter))" class="act-btn bg-red-500">Delete</button>
</template>
