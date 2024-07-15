<script setup>
const props = defineProps({
    title: String,
    name: String,
    id: String,
    label: String,
    errorMessage: String
})

const model = defineModel()
</script>

<template>
    <div class="flex items-center py-8 border-b">
        <p class="w-1/3">{{ props.title }}</p>
        <div class="flex flex-col gap-2">
            <div class="flex items-center gap-4">
                <input type="checkbox" :name="props.name" :id="props.id" class="size-4" v-model="model">
                <label :for="props.id">{{ props.label }}</label>
            </div>
            <p v-if="props.errorMessage" class="text-red-600 font-semibold">{{ props.errorMessage }}</p>
        </div>
    </div>
</template>
