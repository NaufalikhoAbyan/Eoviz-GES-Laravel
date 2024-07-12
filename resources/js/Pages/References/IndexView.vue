<script setup>
import NavigationCard from "@/Pages/Components/Navigation/NavigationCard.vue";
</script>

<template>
    <div class="flex gap-12">
        <NavigationCard link="employee-types.index" src="/images/assets/menus/employee.png" title="Empoloyee Types"/>
        <NavigationCard link="blood-types.index" src="/images/assets/menus/small-blood-type.png" title="Blood Types"/>
        <NavigationCard link="employee-statuses.index" src="/images/assets/menus/small-employee-status.png" title="Employee Statuses"/>
        <NavigationCard link="grade-types.index" src="/images/assets/menus/small-grade-type.png" title="Grade Types"/>
    </div>
</template>
