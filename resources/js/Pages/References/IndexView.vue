<script setup>
import NavigationCard from "@/Pages/Components/Navigation/NavigationCard.vue";
</script>

<template>
    <div class="grid grid-cols-6 gap-10">
        <NavigationCard link="supervisors.index" src="/images/assets/menus/small-supervisior.png" title="Supervisors"/>
        <NavigationCard link="employee-types.index" src="/images/assets/menus/employee.png" title="Employee Types"/>
        <NavigationCard link="employee-statuses.index" src="/images/assets/menus/small-employee-status.png" title="Employee Statuses"/>
        <NavigationCard link="religions.index" src="/images/assets/menus/small-relegion.png" title="Religions"/>
        <NavigationCard link="blood-types.index" src="/images/assets/menus/small-blood-type.png" title="Blood Types"/>
        <NavigationCard link="grade-types.index" src="/images/assets/menus/small-grade-type.png" title="Grade Types"/>
        <NavigationCard link="work-hours.index" src="/images/assets/menus/small-work-hour.png" title="Work Hours"/>
        <NavigationCard link="marital-statuses.index" src="/images/assets/menus/small-marital-status.png" title="Marital Statuses"/>
        <NavigationCard link="shift-groups.index" src="/images/assets/menus/small-shift-functional-position.png" title="Shift Groups"/>
        <NavigationCard link="shift-work-hours.index" src="/images/assets/menus/small-shift-setting.png" title="Shift Work Hours"/>
        <NavigationCard link="shift-hour-patterns.index" src="/images/assets/menus/small-shift-setting.png" title="Shift Hour Patterns"/>
        <NavigationCard link="marital-code-taxes.index" src="/images/assets/menus/small-marital-tax.png" title="Marital Code Taxes"/>
        <NavigationCard link="marital-codes.index" src="/images/assets/menus/small-marital-code.png" title="Marital Codes"/>
        <NavigationCard link="structural-position-types.index" src="/images/assets/menus/small-structural-position.png" title="Structural Position Types"/>
        <NavigationCard link="functional-position-types.index" src="/images/assets/menus/small-functional-position.png" title="Functional Position Types"/>
    </div>
</template>
