<script setup>
import { Link } from "@inertiajs/vue3";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import DetailsData from "@/Pages/Components/Details/DetailsData.vue";

const props = defineProps({
    shiftGroup: Object,
    shiftWorkHours: Object
});

let count = 1;
</script>

<template>
    <div class="flex justify-center">
        <div class="card px-8 w-1/2">
            <div class="flex justify-between items-center">
                <PageTitle page-name="Shift Group" description="Show a shift group data"/>
                <Link :href="route('shift-groups.index')"><button class="primary-btn h-fit">Back</button></Link>
            </div>
            <DetailsData title="Code" :value="props.shiftGroup.code"/>
            <DetailsData title="Name" :value="props.shiftGroup.name"/>
            <div v-if="props.shiftWorkHours.length !== 0" class="flex items-center py-8 border-b">
                <p class="w-1/3">Patterns</p>
                <div class="flex w-2/3 flex-col flex-grow gap-2">
                    <table class="text-xs">
                        <thead>
                            <tr class="bg-gray-100 border-b">
                                <th class="table-item">Order</th>
                                <th class="table-item w-full">Shift Hour</th>
                                <th class="table-item text-nowrap">Short Day</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="shiftWorkHour in props.shiftWorkHours" class="bg-gray-100 border-b">
                                <th class="table-item">{{ count++ }}</th>
                                <th class="table-item w-full">{{ `${shiftWorkHour.name} (${shiftWorkHour.start} - ${shiftWorkHour.end})` }}</th>
                                <th class="table-item text-nowrap">{{ shiftWorkHour['is_short_day'] ? 'Yes' : 'No' }}</th>
                            </tr>
                        </tbody>
                    </table>
                    <p v-if="props.errorMessage" class="text-red-600 font-semibold">{{ props.errorMessage }}</p>
                </div>
            </div>
            <DetailsData title="Order" :value="props.shiftGroup.order"/>
            <DetailsData title="Status" :value="props.shiftGroup.status"/>
            <DetailsData title="Follow Holiday" :value="props.shiftGroup['is_follow_holiday'] ? 'Yes' : 'No'"/>
            <DetailsData title="Description" :value="props.shiftGroup.description"/>
        </div>
    </div>
</template>
