<script setup>
const props = defineProps({
    pageName: String,
    description: String
});
</script>

<template>
    <div class="py-4">
        <p class="page-name">{{ props.pageName }}</p>
        <p class="opacity-50">{{ props.description }}</p>
    </div>
</template>
