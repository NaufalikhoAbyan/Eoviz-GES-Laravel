<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <p class="font-bold">About</p>
        <Link class="text-blue-600 hover:underline" :href="route('index')">Home</Link>
    </div>
</template>
