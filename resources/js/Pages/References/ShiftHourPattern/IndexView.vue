<script setup>
import { Link } from '@inertiajs/vue3';
import { Country, State } from 'country-state-city';
import PageTitle from '@/Pages/Components/PageTitle.vue';
import ActionButtons from '@/Pages/Components/ActionButtons.vue';
const props = defineProps({
    shiftHourPatterns: Object
});

let count = 1;
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Shift Hour Patterns" description="List of all shift hour pattern"/>
            <Link :href="route('shift-hour-patterns.create')"><button class="primary-btn h-fit">Add +</button></Link>
        </div>
        <div v-if="$page.props.flash.message" class="card-success">
            {{ $page.props.flash.message }}
        </div>
        <div class="card">
            <table class="table-auto w-full text-left">
                <thead>
                    <tr class="bg-green-100 border-b">
                        <th class="table-item">No.</th>
                        <th class="table-item">Shift Work Hour ID</th>
                        <th class="table-item">Is Short Day</th>
                        <th class="table-item">Shift Group ID</th>
                        <th class="table-item">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b" v-for="shiftHourPattern in props.shiftHourPatterns" :key="shiftHourPattern.id">
                        <td class="table-item">{{ count++ }}</td>
                        <td class="table-item">{{ shiftHourPattern.shift_work_hour_id }}</td>
                        <td class="table-item">{{ shiftHourPattern.is_short_day['is_short_day'] ? "Yes" : "No" }}</td>
                        <td class="table-item">{{ shiftHourPattern.shift_group_id }}</td>
                        <td class="table-action-item">
                            <ActionButtons route-name="shift-hour-patterns" :parameter="shiftHourPattern.id"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
