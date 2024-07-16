<script setup>
import { Link } from '@inertiajs/vue3';
import { Country, State } from 'country-state-city';
import PageTitle from '@/Pages/Components/PageTitle.vue';
import ActionButtons from '@/Pages/Components/ActionButtons.vue';
const props = defineProps({
    shiftGroups: Object
});

let count = 1;
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Shift Groups" description="List of all shift group"/>
            <Link :href="route('shift-groups.create')"><button class="primary-btn h-fit">Add +</button></Link>
        </div>
        <div v-if="$page.props.flash.message" class="card-success">
            {{ $page.props.flash.message }}
        </div>
        <div class="card">
            <table class="table-auto w-full text-left">
                <thead>
                    <tr class="bg-green-100 border-b">
                        <th class="table-item">No.</th>
                        <th class="table-item">Code</th>
                        <th class="table-item">Name</th>
                        <th class="table-item">Order</th>
                        <th class="table-item">Status</th>
                        <th class="table-item">Is Follow Holiday</th>
                        <th class="table-item">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b" v-for="shiftGroup in props.shiftGroups" :key="shiftGroup.id">
                        <td class="table-item">{{ count++ }}</td>
                        <td class="table-item">{{ shiftGroup.code }}</td>
                        <td class="table-item">{{ shiftGroup.name }}</td>
                        <td class="table-item">{{ shiftGroup.order }}</td>
                        <td class="table-item">{{ shiftGroup.status }}</td>
                        <td class="table-item">{{ shiftGroup.is_follow_holiday['is_follow_holiday'] ? "Yes" : "No" }}</td>
                        <td class="table-action-item">
                            <ActionButtons route-name="shift-groups" :parameter="shiftGroup.id"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
