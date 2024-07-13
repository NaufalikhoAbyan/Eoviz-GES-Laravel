<script setup>
import {Link} from "@inertiajs/vue3";
import DetailsData from "@/Pages/Components/Details/DetailsData.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";

const props = defineProps({
    workHour: Object
});
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
            <div class="flex justify-between items-center">
                <PageTitle page-name="Work Hour" description="Show an Work Hour data"/>
                <Link :href="route('work-hours.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Name" :value="props.workHour.name"/>
            <DetailsData title="Hour" :value="props.workHour.hour"/>
            <DetailsData title="Holiday" :value="props.workHour.holiday"/>
            <DetailsData title="Is Locked" :value="props.workHour['is_locked']" :boolean="true"/>
            <DetailsData title="Status" :value="props.workHour.status"/>
            <DetailsData title="Description" :value="props.workHour.description"/>
        </div>
    </div>

</template>
