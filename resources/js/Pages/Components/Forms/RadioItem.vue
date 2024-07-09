<script setup>
import { inject } from "vue";
const props = defineProps({
    label: String,
    id: String
})
const radioName = inject("radioName");
</script>

<template>
    <div class="flex items-center gap-4">
        <input type="radio" :name="radioName" :id="props.id" class="size-4">
        <label :for="props.id">{{ props.label }}</label>
    </div>
</template>
