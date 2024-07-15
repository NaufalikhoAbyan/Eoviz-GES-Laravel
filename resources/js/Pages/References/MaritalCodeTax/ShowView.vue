<script setup>
import { Link } from "@inertiajs/vue3";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import DetailsData from "@/Pages/Components/Details/DetailsData.vue";

const props = defineProps({
    maritalCodeTax: Object
});
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
            <div class="flex justify-between items-center">
                <PageTitle page-name="Marital Code Tax" description="Show a Marital Code taxes"/>
                <Link :href="route('marital-code-taxes.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Code" :value="props.maritalCodeTax.code"/>
            <DetailsData title="Name" :value="props.maritalCodeTax.name"/>
            <DetailsData title="Order" :value="props.maritalCodeTax.order"/>
            <DetailsData title="Descriptin" :value="props.maritalCodeTax.description"/>
        </div>
    </div>
</template>
