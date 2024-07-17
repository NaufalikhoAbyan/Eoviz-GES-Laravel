    <script setup>
import { inject } from "vue";
const props = defineProps({
    label: String,
    id: String,
    value: String
});
const radioName = inject("radioName");
const model = inject("model");
</script>

<template>
    <div class="flex items-center gap-4">
        <input type="radio" :name="radioName" :id="props.id" :value="props.value ? props.value : props.label" class="size-4" v-model="model">
        <label :for="props.id">{{ props.label }}</label>
    </div>
</template>
