<script setup>
const props = defineProps({
    title: String,
    name: String,
    errorMessage: String
});
const model = defineModel();
</script>

<template>
    <div class="flex py-8 border-b">
        <p class="w-1/3">{{ props.title }}</p>
        <div class="flex-grow">
            <textarea class="w-full p-2 border border-gray-400 rounded-md focus:outline-blue-500" :name="props.name" v-model="model"/>
            <p v-if="props.errorMessage" class="text-red-600 font-semibold">{{ props.errorMessage }}</p>
        </div>
    </div>
</template>
