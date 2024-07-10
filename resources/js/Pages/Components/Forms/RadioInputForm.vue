<script setup>
import { provide } from "vue";
const props = defineProps({
    title: String,
    name: String,
    errorMessage: String
});
const model = defineModel();
provide("model", model);
provide("radioName", props.name);
</script>

<template>
    <div class="flex items-center py-8 border-b">
        <p class="w-1/3">{{ props.title }}</p>
        <div class="flex flex-col gap-2">
            <slot/>
            <p v-if="props.errorMessage" class="text-red-600 font-semibold">{{ props.errorMessage }}</p>
        </div>
    </div>
</template>
