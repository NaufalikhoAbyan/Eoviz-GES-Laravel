<script setup>
import { ref } from 'vue';
import ArrorRigth from "@/Pages/Components/Icons/ArrorRight.vue";
import MenuItem from "@/Pages/Components/Navigation/MenuItem.vue";
import NavigationSidebar from "@/Pages/Components/Navigation/NavigationSidebar.vue";
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
            <NavigationSidebar>
                <template v-slot:parent>
                    <MenuItem title="References" link="references.index" :nav-state="isExpanded" src="/images/assets/menus/small-content.png" :parent="true"/>
                </template>
                <template v-slot:child>
                    <MenuItem title="Supervisors" link="supervisors.index" :nav-state="isExpanded" src="/images/assets/menus/small-supervisior.png"/>
                    <MenuItem title="Employee Types" link="employee-types.index" :nav-state="isExpanded" src="/images/assets/menus/employee.png"/>
                    <MenuItem title="Employee Statuses" link="employee-statuses.index" :nav-state="isExpanded" src="/images/assets/menus/small-employee-status.png"/>
                    <MenuItem title="Religions" link="religions.index" :nav-state="isExpanded" src="/images/assets/menus/small-relegion.png"/>
                    <MenuItem title="Blood Types" link="blood-types.index" :nav-state="isExpanded" src="/images/assets/menus/small-blood-type.png"/>
                    <MenuItem title="Grade Types" link="grade-types.index" :nav-state="isExpanded" src="/images/assets/menus/small-grade-type.png"/>
                    <MenuItem title="Work Hours" link="work-hours.index" :nav-state="isExpanded" src="/images/assets/menus/small-work-hour.png"/>
                    <MenuItem title="Marital Statuses" link="marital-statuses.index" :nav-state="isExpanded" src="/images/assets/menus/small-marital-status.png"/>
                    <MenuItem title="Marital Code Taxes" link="marital-code-taxes.index" :nav-state="isExpanded" src="/images/assets/menus/small-marital-tax.png"/>
                </template>
            </NavigationSidebar>
        </div>
        <div class="py-4 px-16 flex-grow">
            <slot/>
        </div>
    </div>
</template>
