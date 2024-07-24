<script setup>
import { Link } from '@inertiajs/vue3';
import PageTitle from '@/Pages/Components/PageTitle.vue';
import DetailsData from '@/Pages/Components/Details/DetailsData.vue';

const props = defineProps({
    shiftHourPattern: Object
});
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
           <div class="flex justify-between items-center">
                <PageTitle page-name="Shift Hour Pattern" description="Show a Shift Hour Pattern data"/>
                <Link :href="route('shift-hour-patterns.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <Link :href="route('shift-work-hours.show', props.shiftHourPattern.shift_work_hour_id)">
                <DetailsData title="Work Hour Name" :value="props.shiftHourPattern['shift_work_hour'].name"/>
            </Link>
            <DetailsData title="Is Short Day" :value="props.shiftHourPattern['is_short_day']" :boolean="true" true-value="Yes" false-value="No"/>
            <Link :href="route('shift-groups.show', props.shiftHourPattern.shift_group_id)">
                <DetailsData title="Group Name" :value="props.shiftHourPattern['shift_group'].name"/>
            </Link>
        </div>
    </div>
</template>
