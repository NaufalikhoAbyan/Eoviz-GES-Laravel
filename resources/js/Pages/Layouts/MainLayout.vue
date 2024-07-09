<script setup>
import { ref } from 'vue';
import ArrorRigth from "@/Pages/Components/Icons/ArrorRight.vue";
import MenuItem from "@/Pages/Components/MenuItem.vue";
const isExpanded = ref(false);
</script>

<template>
    <div class="px-8 py-4 border-b-2 border-gray-200 bg-white">
        <img src="/images/assets/eoviz-logo-upscaled.jpg" alt="" class="h-12">
    </div>
    <div class="flex min-h-screen">
        <div class="flex flex-col px-4 py-2 border-r border-gray-200 bg-white transition-all duration-500 ease-in-out overflow-hidden" :class="[isExpanded ? 'w-52' : 'w-16']">
            <button class="bg-blue-500 text-white rounded px-2 py-1 drop-shadow-md active:drop-shadow-none w-8" @click="isExpanded = !isExpanded">
                <ArrorRigth class="text-white transition-all duration-500 ease-in-out" :class="[isExpanded ? 'rotate-180' : 'rotate-0']"/>
            </button>
            <MenuItem link="employee-types.index" title="Employee Types" :nav-state="isExpanded">
                <img src="/images/assets/menus/employee.png" alt=""/>
            </MenuItem>
        </div>
        <div class="p-4 w-full">
            <slot/>
        </div>
    </div>
</template>
