<script setup>
import { ref } from 'vue';
import ArrowRight from "@/Pages/Components/Icons/ArrowRight.vue";
import MenuItem from "@/Pages/Components/Navigation/MenuItem.vue";
import NavigationSidebar from "@/Pages/Components/Navigation/NavigationSidebar.vue";

const isExpanded = ref(false);

const references = [
    {
        link: "supervisors.index",
        src: "/images/assets/menus/small-supervisior.png",
        title: "Supervisors",
    },
        {
        link: "employees.index",
        src: "/images/assets/menus/small-employee-data.png",
        title: "Employees",
        children: [
            {
                link: "employee-types.index",
                src: "/images/assets/menus/employee.png",
                title: "Employee Types",
            },
            {
                link: "employee-statuses.index",
                src: "/images/assets/menus/small-employee-status.png",
                title: "Employee Statuses",
            },
            {
                link: "religions.index",
                src: "/images/assets/menus/small-religion.png",
                title: "Religions",
            },
            {
                link: "blood-types.index",
                src: "/images/assets/menus/small-blood-type.png",
                title: "Blood Types",
            },
            {
                link: "grade-types.index",
                src: "/images/assets/menus/small-grade-type.png",
                title: "Grade Types",
            },
            {
                link: "structural-position-types.index",
                src: "/images/assets/menus/small-structural-position.png",
                title: "Structural Position Types",
            },
            {
                link: "functional-position-types.index",
                src: "/images/assets/menus/small-functional-position.png",
                title: "Functional Position Types",
            },
        ]
    },
    {
        link: "marital-statuses.index",
        src: "/images/assets/menus/small-marital-status.png",
        title: "Marital Statuses",
        children: [
            {
                link: "marital-code-taxes.index",
                src: "/images/assets/menus/small-marital-tax.png",
                title: "Marital Code Taxes",
            },
            {
                link: "marital-codes.index",
                src: "/images/assets/menus/small-marital-code.png",
                title: "Marital Codes",
            }
        ]
    },
    {
        link: "shift-groups.index",
        src: "/images/assets/menus/small-shift-functional-position.png",
        title: "Shift Groups",
        children: [
            {
                link: "shift-work-hours.index",
                src: "/images/assets/menus/small-shift-setting.png",
                title: "Shift Work Hours",
                },
            {
                link: "shift-hour-patterns.index",
                src: "/images/assets/menus/small-shift-setting.png",
                title: "Shift Hour Patterns",
            },
            {
                link: "work-hours.index",
                src: "/images/assets/menus/small-work-hour.png",
                title: "Work Hours",
            }
        ]
    }
];
</script>

<template>
    <div class="flex flex-col min-h-screen">
        <div class="px-8 py-4 border-b-2 border-gray-200 bg-white">
            <img src="/images/assets/eoviz-logo-upscaled.jpg" alt="" class="h-12">
        </div>
        <div class="flex flex-grow">
            <div class="border-r-2 py-4">
                <div class="flex justify-center px-2 py-2">
                    <button class="flex justify-center w-full h-fit bg-blue-500 text-white rounded px-2 py-1 drop-shadow-md active:drop-shadow-none" @click="isExpanded = !isExpanded">
                        <ArrowRight class="text-white transition-all duration-500 ease-in-out h-6" :class="[isExpanded ? 'rotate-180' : 'rotate-0']"/>
                    </button>
                </div>
                <NavigationSidebar>
                    <template v-slot:parent>
                        <MenuItem title="References" link="references.index" :nav-state="isExpanded" src="/images/assets/menus/small-content.png" :parent="true"/>
                    </template>
                    <template v-slot:child>
                        <MenuItem v-for="(reference, index) in references" :key="index" :title="reference.title" :link="reference.link" :nav-state="isExpanded" :src="reference.src" :children="reference.children || []"/>
                    </template>
                </NavigationSidebar>
            </div>
            <div class="py-4 px-16 flex-grow">
                <slot/>
            </div>
        </div>
    </div>
</template>
