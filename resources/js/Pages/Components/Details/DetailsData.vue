<script setup>
const props = defineProps({
    title: String,
    value: String,
    boolean: Boolean
});
</script>

<template>
    <div class="flex items-center py-8 border-b">
        <p class="w-1/3">{{ props.title }}</p>
        <p class="text-xl font-bold w-2/3">{{ props.boolean ? props.value ? "Yes" : "No" : props.value }}</p>
    </div>
</template>
