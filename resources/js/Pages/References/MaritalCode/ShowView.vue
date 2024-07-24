<script setup>
import {Link} from "@inertiajs/vue3";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import DetailsData from "@/Pages/Components/Details/DetailsData.vue";

const props = defineProps({
    maritalCode: Object
});
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
            <div class="flex justify-between items-center">
                <PageTitle page-name="Marital Code" description="Show a Marital Code data"/>
                <Link :href="route('marital-codes.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Code" :value="props.maritalCode.code"/>
            <DetailsData title="Name" :value="props.maritalCode.name"/>
            <DetailsData title="Status" :value="props.maritalCode.status"/>
            <DetailsData title="Description" :value="props.maritalCode.description"/>
            <DetailsData title="Marital Status" :value="props.maritalCode['marital_status'].name"/>
        </div>
    </div>
</template>
