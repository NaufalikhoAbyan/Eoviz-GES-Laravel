<script setup>
import { inject } from "vue";
const props = defineProps({
    label: String,
    id: String,
    value: Boolean
});
const checkboxName = inject("checkboxName");
const model = inject("model");
</script>

<template>
    <div class="flex items-center gap-4">
        <input type="checkbox" :name="checkboxName" :id="props.id" :true-value="props.value ? props.value : '1'" false-value="0" class="size-4" v-model="model">
        <label :for="props.id">{{ props.label }}</label>
    </div>
</template>
