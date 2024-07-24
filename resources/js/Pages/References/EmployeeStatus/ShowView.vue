<script setup>
import {Link} from "@inertiajs/vue3";
import DetailsData from "@/Pages/Components/Details/DetailsData.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";

const props = defineProps({
    employeeStatus: Object
});
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
            <div class="flex justify-between items-center">
                <PageTitle page-name="Employee Status" description="Show an Employee Status data"/>
                <Link :href="route('employee-statuses.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Name" :value="props.employeeStatus.name"/>
            <DetailsData title="Is Permanent" :value="props.employeeStatus['is_active']" :boolean="true" true-value="Yes" false-value="No"/>
            <DetailsData title="Order" :value="props.employeeStatus.order"/>
            <DetailsData title="Status" :value="props.employeeStatus.status"/>
            <DetailsData title="Description" :value="props.employeeStatus.description"/>
        </div>
    </div>

</template>
