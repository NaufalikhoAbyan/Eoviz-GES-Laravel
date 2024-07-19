<script setup>
import {Link} from "@inertiajs/vue3";
import DetailsData from "@/Pages/Components/Details/DetailsData.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";

const props = defineProps({
    structuralPositionType: Object
});
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
            <div class="flex justify-between items-center">
                <PageTitle page-name="Structural Position Type" description="Show a structural position type data"/>
                <Link :href="route('structural-position-types.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Parent" :value="props.structuralPositionType.parent ? props.structuralPositionType.parent.name : 'No Parent'"/>
            <DetailsData title="Code" :value="props.structuralPositionType.code"/>
            <DetailsData title="Name" :value="props.structuralPositionType.name"/>
            <DetailsData title="Order" :value="props.structuralPositionType.order"/>
            <DetailsData title="status" :value="props.structuralPositionType.status"/>
            <DetailsData title="description" :value="props.structuralPositionType.description"/>
        </div>
    </div>
</template>
