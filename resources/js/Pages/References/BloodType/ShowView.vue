<script setup>
import { Link } from '@inertiajs/vue3';
import PageTitle from '@/Pages/Components/PageTitle.vue';
import DetailsData from '@/Pages/Components/Details/DetailsData.vue';

const props = defineProps({
    bloodType: Object
});
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
           <div class="flex justify-between items-center">
                <PageTitle page-name="Blood Type" description="Show an blood type data"/>
                <Link :href="route('blood-types.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Name" :value="props.bloodType.name"/>
            <DetailsData title="Status" :value="props.bloodType.status"/>
            <DetailsData title="Description" :value="props.bloodType.description"/>
        </div>
    </div>
</template>
