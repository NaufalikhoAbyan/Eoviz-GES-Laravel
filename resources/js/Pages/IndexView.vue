<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <p class="font-bold">Home</p>
        <Link class="text-blue-600 hover:underline" :href="route('about')">About</Link>
    </div>
</template>
