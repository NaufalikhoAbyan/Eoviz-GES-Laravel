<script setup>
import { Link } from "@inertiajs/vue3";
import DetailsData from "@/Pages/Components/Details/DetailsData.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";
const props = defineProps({
    functionalPositionType: Object
});
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
            <div class="flex justify-between items-center">
                <PageTitle page-name="Functional Position Type" description="Show a Functional Position Type data"/>
                <Link :href="route('functional-position-types.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Parent" :value="props.functionalPositionType.parent ? props.functionalPositionType.parent.name : 'No Parent'"/>
            <DetailsData title="Code" :value="props.functionalPositionType.code"/>
            <DetailsData title="Name" :value="props.functionalPositionType.name"/>
            <DetailsData title="Order" :value="props.functionalPositionType.order"/>
            <DetailsData title="status" :value="props.functionalPositionType.status"/>
            <DetailsData title="description" :value="props.functionalPositionType.description"/>
        </div>
    </div>
</template>
