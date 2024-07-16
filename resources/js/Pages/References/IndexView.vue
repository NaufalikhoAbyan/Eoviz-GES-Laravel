<script setup>
import NavigationCard from "@/Pages/Components/Navigation/NavigationCard.vue";
</script>

<template>
    <div class="flex gap-12">
        <NavigationCard link="supervisors.index" src="/images/assets/menus/small-supervisior.png" title="Supervisors"/>
        <NavigationCard link="employee-types.index" src="/images/assets/menus/employee.png" title="Employee Types"/>
        <NavigationCard link="employee-statuses.index" src="/images/assets/menus/small-employee-status.png" title="Employee Statuses"/>
        <NavigationCard link="religions.index" src="/images/assets/menus/small-relegion.png" title="Religions"/>
        <NavigationCard link="blood-types.index" src="/images/assets/menus/small-blood-type.png" title="Blood Types"/>
        <NavigationCard link="grade-types.index" src="/images/assets/menus/small-grade-type.png" title="Grade Types"/>
        <NavigationCard link="work-hours.index" src="/images/assets/menus/small-work-hour.png" title="Work Hours"/>
        <NavigationCard link="marital-code-taxes.index" src="/images/assets/menus/small-marital-tax.png" title="Marital Code Taxes"/>
        <NavigationCard link="marital-statuses.index" src="/images/assets/menus/small-marital-status.png" title="Marital Statuses"/>
        <NavigationCard link="functional-position-types.index" src="/images/assets/menus/small-functional-position.png" title="Functional Position Types"/>
    </div>
</template>
