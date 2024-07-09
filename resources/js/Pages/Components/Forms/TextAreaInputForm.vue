<script setup>
const props = defineProps({
    title: String,
    name: String
})
</script>

<template>
    <div class="flex py-8 border-b">
        <p class="w-1/3">{{ props.title }}</p>
        <textarea class="p-2 border border-gray-400 rounded-md flex-grow focus:outline-blue-500" :name="props.name"/>
    </div>
</template>
