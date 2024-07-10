<script setup>
import { ref } from 'vue';
import ArrorRigth from "@/Pages/Components/Icons/ArrorRight.vue";
const isExpanded = ref(false);
</script>

<template>
    <div class="px-8 py-4 border-b-2 border-gray-200 bg-white">
        <img src="/images/assets/eoviz-logo-upscaled.jpg" alt="" class="h-12">
    </div>
    <div class="flex min-h-screen">
        <div class="border-r-2 py-4">
            <div class="flex justify-center px-2">
                <button class="flex justify-center w-full h-fit bg-blue-500 text-white rounded px-2 py-1 drop-shadow-md active:drop-shadow-none" @click="isExpanded = !isExpanded">
                    <ArrorRigth class="text-white transition-all duration-500 ease-in-out h-6" :class="[isExpanded ? 'rotate-180' : 'rotate-0']"/>
                </button>
            </div>
        </div>
        <div class="py-4 px-16 flex-grow">
            <slot/>
        </div>
    </div>
</template>
