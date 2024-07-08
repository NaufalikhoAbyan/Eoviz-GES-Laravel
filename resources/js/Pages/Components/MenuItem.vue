<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    link: String,
    title: String,
    navState: Boolean
});
</script>

<template>
    <Link :href="route(props.link)" class="flex gap-6 mt-4">
        <slot/>
        <p class="flex-grow text-nowrap" :class="[navState ? 'visible' : ['delay-500', 'invisible']]">{{ props.title }}</p>
    </Link>
</template>
