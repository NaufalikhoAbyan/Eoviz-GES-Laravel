<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <p class="font-bold">Home</p>
    <Link :href="route('about')">About</Link>
</template>
