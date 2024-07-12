<script setup>
import DetailsData from "@/Pages/Components/Details/DetailsData.vue";
import {Link} from "@inertiajs/vue3";
import PageTitle from "@/Pages/Components/PageTitle.vue";

const props = defineProps({
    employeeStatus: Object
});
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
            <div class="flex justify-between items-center">
                <PageTitle page-name="Employee Status" description="Show an Employee status data"/>
                <Link :href="route('employee-statuses.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Name" :value="props.employeeStatus.name"/>
            <DetailsData title="Is Permanent" :value="props.employeeStatus['is_active']" :boolean="true"/>
            <DetailsData title="order" :value="props.employeeStatus.order"/>
            <DetailsData title="status" :value="props.employeeStatus.status"/>
            <DetailsData title="description" :value="props.employeeStatus.description"/>
        </div>
    </div>

</template>
