<script setup>
import { Link } from "@inertiajs/vue3";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import DetailsData from "@/Pages/Components/Details/DetailsData.vue";

const props = defineProps({
    employeeType: Object
})
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
            <div class="flex justify-between items-center">
                <PageTitle page-name="Employee Type" description="Show an employee type data"/>
                <Link :href="route('employee-types.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Name" :value="props.employeeType.name"/>
            <DetailsData title="Is Permanent" :value="props.employeeType['is_permanent']" :boolean="true"/>
            <DetailsData title="order" :value="props.employeeType.order"/>
            <DetailsData title="status" :value="props.employeeType.status"/>
            <DetailsData title="description" :value="props.employeeType.description"/>
        </div>
        <div>
        </div>
    </div>
</template>
