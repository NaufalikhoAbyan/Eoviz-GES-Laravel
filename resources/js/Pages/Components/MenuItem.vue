<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    link: String,
    title: String
});
</script>

<template>
    <Link :href="route(props.link)" class="flex gap-6 mt-4">
        <slot/>
        <p class="flex-grow">{{ props.title }}</p>
    </Link>
</template>
