<script setup>
const props = defineProps({
    title: String
})
</script>

<template>
    <div class="py-4 border-b">
        <p class="text-xl font-semibold">{{ props.title }}</p>
    </div>
</template>
