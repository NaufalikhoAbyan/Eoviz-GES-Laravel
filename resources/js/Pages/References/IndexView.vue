<script setup>
import NavigationCard from "@/Pages/Components/Navigation/NavigationCard.vue";

const navigationItems = [
    {
        link: "supervisors.index",
        src: "/images/assets/menus/small-supervisior.png",
        title: "Supervisors",
    },
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
    },{
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
        link: "work-hours.index",
        src: "/images/assets/menus/small-work-hour.png",
        title: "Work Hours",
    },
    {
        link: "marital-statuses.index",
        src: "/images/assets/menus/small-marital-status.png",
        title: "Marital Statuses",
    },
    {
        link: "shift-groups.index",
        src: "/images/assets/menus/small-shift-functional-position.png",
        title: "Shift Groups",
    },
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
        link: "marital-code-taxes.index",
        src: "/images/assets/menus/small-marital-tax.png",
        title: "Marital Code Taxes",
    },
    {
        link: "marital-codes.index",
        src: "/images/assets/menus/small-marital-code.png",
        title: "Marital Codes",
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
];
</script>

<template>
    <div class="grid grid-cols-6 gap-10">
        <NavigationCard v-for="(navigationItem, index) in navigationItems" :key="index" :link="navigationItem.link" :src="navigationItem.src" :title="navigationItem.title"/>
    </div>
</template>
