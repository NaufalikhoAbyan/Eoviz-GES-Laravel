<script setup>
import {Link} from "@inertiajs/vue3";
import DetailsData from "@/Pages/Components/Details/DetailsData.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";

const props = defineProps({
    shiftWorkHour: Object
});
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
            <div class="flex justify-between items-center">
                <PageTitle page-name="Shift Work Hour" description="Show an Shift Work Hour data"/>
                <Link :href="route('shift-work-hours.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Code" :value="props.shiftWorkHour.code"/>
            <DetailsData title="Name" :value="props.shiftWorkHour.name"/>
            <DetailsData title="Begin Log" :value="props.shiftWorkHour.begin_log"/>
            <DetailsData title="End Log" :value="props.shiftWorkHour.end_log"/>
            <DetailsData title="Start" :value="props.shiftWorkHour.start"/>
            <DetailsData title="End" :value="props.shiftWorkHour.end"/>
            <DetailsData title="Start Tolerance" :value="`${props.shiftWorkHour.start_tolerance} minutes`"/>
            <DetailsData title="End Tolerance" :value="`${props.shiftWorkHour.end_tolerance} minutes`"/>
            <DetailsData title="Break Start" :value="props.shiftWorkHour.break_start"/>
            <DetailsData title="Break End" :value="props.shiftWorkHour.break_end"/>
            <DetailsData title="Cross Day" :value="props.shiftWorkHour.cross_day"/>
            <DetailsData title="Overtime Type" :value="props.shiftWorkHour.overtime_type"/>
            <DetailsData title="Automatic Overtime" :value="props.shiftWorkHour.automatic_overtime" v-if="props.shiftWorkHour.automatic_overtime"/>
            <DetailsData title="Status" :value="props.shiftWorkHour.status"/>
            <DetailsData title="Description" :value="props.shiftWorkHour.description"/>
        </div>
    </div>

</template>
