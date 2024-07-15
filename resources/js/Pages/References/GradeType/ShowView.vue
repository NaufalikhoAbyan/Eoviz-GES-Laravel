<script setup>
import PageTitle from "@/Pages/Components/PageTitle.vue";
import {Link} from "@inertiajs/vue3";
import DetailsData from "@/Pages/Components/Details/DetailsData.vue";

const props = defineProps({
    gradeType: Object
});
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
            <div class="flex justify-between items-center">
                <PageTitle page-name="Grade Type" description="Show an grade type data"/>
                <Link :href="route('grade-types.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Level" :value="props.gradeType.level"/>
            <DetailsData title="Code" :value="props.gradeType.code"/>
            <DetailsData title="Name" :value="props.gradeType.name"/>
            <DetailsData title="Order" :value="props.gradeType.order"/>
            <DetailsData title="Status" :value="props.gradeType.status"/>
            <DetailsData title="Description" :value="props.gradeType.description"/>
        </div>
    </div>
</template>
