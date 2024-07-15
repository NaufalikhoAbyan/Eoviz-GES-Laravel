<script setup>
import {Link} from "@inertiajs/vue3";
import DetailsData from "@/Pages/Components/Details/DetailsData.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";

const props = defineProps({
    supervisor: Object
});
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
            <div class="flex justify-between items-center">
                <PageTitle page-name="Supervisor" description="Show an supervisor data"/>
                <Link :href="route('supervisors.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Name" :value="props.supervisor.name"/>
            <DetailsData title="Street" :value="props.supervisor.street"/>
            <DetailsData title="Country" :value="props.supervisor.country"/>
            <DetailsData title="State" :value="props.supervisor.state"/>
            <DetailsData title="City" :value="props.supervisor.city"/>
            <DetailsData title="Postal Code" :value="props.supervisor.postal_code"/>
            <DetailsData title="Phone" :value="props.supervisor.phone"/>
            <DetailsData title="Mobile" :value="props.supervisor.mobile"/>
            <DetailsData title="Email" :value="props.supervisor.email"/>
            <DetailsData title="Status" :value="props.supervisor.status"/>
            <DetailsData title="Description" :value="props.supervisor.description"/>
        </div>
    </div>

</template>
