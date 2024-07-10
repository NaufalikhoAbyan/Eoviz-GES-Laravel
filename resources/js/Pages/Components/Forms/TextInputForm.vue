<script setup>
const props = defineProps({
    title: String,
    name: String,
    errorMessage: String
})
const model = defineModel()
</script>

<template>
    <div class="flex items-center py-8 border-b">
        <p class="w-1/3">{{ props.title }}</p>
        <div class="flex flex-col flex-grow gap-2">
            <input type="text" class="w-full h-10 px-2 border border-gray-400 rounded-md focus:outline-blue-500" :name="props.name" v-model="model">
            <p v-if="props.errorMessage" class="text-red-600 font-semibold">{{ props.errorMessage }}</p>
        </div>
    </div>
</template>
