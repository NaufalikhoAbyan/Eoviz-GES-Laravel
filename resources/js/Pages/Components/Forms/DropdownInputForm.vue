<script setup>
const props = defineProps({
    title: String,
    errorMessage: String
});
const model = defineModel();
</script>

<template>
    <div class="flex items-center py-8 border-b">
        <p class="w-1/3">{{ props.title }}</p>
        <div class="flex w-2/3 flex-col flex-grow gap-2">
            <select class="w-full h-10 px-2 border border-gray-400 rounded-md focus:outline-blue-500" v-model="model">
                <option :value="null" disabled>-- Select --</option>
                <slot/>
            </select>
            <p v-if="props.errorMessage" class="text-red-600 font-semibold">{{ props.errorMessage }}</p>
        </div>
    </div>
</template>
