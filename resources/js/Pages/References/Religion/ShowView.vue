<script setup>
import { Link } from '@inertiajs/vue3';
import PageTitle from '@/Pages/Components/PageTitle.vue';
import DetailsData from '@/Pages/Components/Details/DetailsData.vue';

const props = defineProps({
    religion: Object
});
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
           <div class="flex justify-between items-center">
                <PageTitle page-name="Religion" description="Show a Religion data"/>
                <Link :href="route('religions.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Name" :value="props.religion.name"/>
            <DetailsData title="Status" :value="props.religion.status"/>
            <DetailsData title="Description" :value="props.religion.description"/>
        </div>
    </div>
</template>
