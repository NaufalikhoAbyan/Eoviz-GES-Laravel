<script setup>
import PageTitle from "@/Pages/Components/PageTitle.vue";
import DetailsData from "@/Pages/Components/Details/DetailsData.vue";
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    maritalStatus: Object
});
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
            <div class="flex justify-between items-center">
                <PageTitle page-name="Marital Status" description="Show an marital status data"/>
                <Link :href="route('marital-statuses.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Name" :value="props.maritalStatus.name"/>
            <DetailsData title="Is Married" :value="props.maritalStatus['is_married']" :boolean="true"/>
            <DetailsData title="status" :value="props.maritalStatus.status"/>
            <DetailsData title="description" :value="props.maritalStatus.description"/>
        </div>
    </div>
</template>
