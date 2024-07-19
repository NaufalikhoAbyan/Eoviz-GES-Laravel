<script setup>
import { Link } from '@inertiajs/vue3';
import PageTitle from '@/Pages/Components/PageTitle.vue';
const props = defineProps({
    shiftHourPatterns: Object
});

let count = 1;
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Shift Hour Patterns" description="List of all shift hour pattern"/>
        </div>
        <div v-if="$page.props.flash.message" class="card-success">
            {{ $page.props.flash.message }}
        </div>
        <div class="card">
            <table class="table-auto w-full text-left">
                <thead>
                    <tr class="bg-green-100 border-b">
                        <th class="table-item">No.</th>
                        <th class="table-item">Shift Work Hour Name</th>
                        <th class="table-item">Is Short Day</th>
                        <th class="table-item">Shift Group Name</th>
                        <th class="table-item">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b" v-for="shiftHourPattern in props.shiftHourPatterns" :key="shiftHourPattern.id">
                        <td class="table-item">{{ count++ }}</td>
                        <td class="table-item">{{ shiftHourPattern['shift_work_hour'].name}}</td>
                        <td class="table-item">{{ shiftHourPattern['is_short_day'] ? "Yes" : "No" }}</td>
                        <td class="table-item">{{ shiftHourPattern['shift_group'].name }}</td>
                        <td class="table-action-item">
                            <Link :href="route('shift-hour-patterns.show', shiftHourPattern.id)"><button class="act-btn bg-yellow-500">Show</button></Link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
