<script setup>
import { Link } from '@inertiajs/vue3';
import PageTitle from '@/Pages/Components/PageTitle.vue';
import DetailsData from '@/Pages/Components/Details/DetailsData.vue';

const props = defineProps({
    employee: Object
});
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
            <div class="flex justify-between items-center">
                <PageTitle page-name="Employee" description="Show an Employee data"/>
                <Link :href="route('employees.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Fullname" :value="props.employee.fullname"/>
            <DetailsData title="Personal ID" :value="props.employee['personal_id']"/>
            <DetailsData title="Presence Number" :value="props.employee['presence_number']"/>
            <DetailsData title="Place of Birth" :value="props.employee['place_of_birth']"/>
            <DetailsData title="Gender" :value="props.employee.gender"/>
            <DetailsData title="Date of Birth" :value="props.employee['date_of_birth']"/>
            <DetailsData title="Blood Type" :value="props.employee['blood_type'].name"/>
            <DetailsData title="Religion" :value="props.employee.religion.name"/>
            <DetailsData title="Nationality" :value="props.employee.nationality"/>
        </div>
    </div>
</template>
