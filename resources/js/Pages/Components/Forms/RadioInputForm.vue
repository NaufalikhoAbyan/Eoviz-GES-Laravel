<script setup>
import { provide } from "vue";
const props = defineProps({
    title: String,
    name: String
})
provide("radioName", props.name)
</script>

<template>
    <div class="flex items-center py-8 border-b">
        <p class="w-1/3">{{ props.title }}</p>
        <div class="flex flex-col gap-2">
            <slot/>
        </div>
    </div>
</template>
