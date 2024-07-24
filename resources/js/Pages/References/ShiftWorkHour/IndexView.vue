<script setup>
import { Link } from '@inertiajs/vue3';
import PageTitle from '@/Pages/Components/PageTitle.vue';
import ActionButtons from '@/Pages/Components/ActionButtons.vue';
const props = defineProps({
    shiftWorkHours: Object
});
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Shift Work Hours" description="List of all Shift Work Hour"/>
            <Link :href="route('shift-work-hours.create')"><button class="primary-btn h-fit">Add +</button></Link>
        </div>
        <div v-if="$page.props.flash.message" class="card-success">
            {{ $page.props.flash.message }}
        </div>
        <div v-if="$page.props.flash.error" class="card-error">
            {{ $page.props.flash.error }}
        </div>
        <div class="card">
            <table class="table-auto w-full text-left">
                <thead>
                    <tr class="bg-green-100 border-b">
                        <th class="table-item">No.</th>
                        <th class="table-item">Code</th>
                        <th class="table-item">Name</th>
                        <th class="table-item">Begin Log</th>
                        <th class="table-item">Start</th>
                        <th class="table-item">End</th>
                        <th class="table-item">End Log</th>
                        <th class="table-item">Status</th>
                        <th class="table-item">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b" v-for="(shiftWorkHours, index) in props.shiftWorkHours" :key="shiftWorkHours.id">
                        <td class="table-item">{{ index + 1 }}</td>
                        <td class="table-item">{{ shiftWorkHours.code }}</td>
                        <td class="table-item">{{ shiftWorkHours.name }}</td>
                        <td class="table-item">{{ shiftWorkHours.begin_log }}</td>
                        <td class="table-item">{{ shiftWorkHours.start }}</td>
                        <td class="table-item">{{ shiftWorkHours.end }}</td>
                        <td class="table-item">{{ shiftWorkHours.end_log }}</td>
                        <td class="table-item">{{ shiftWorkHours.status }}</td>
                        <td class="table-action-item">
                            <ActionButtons route-name="shift-work-hours" :parameter="shiftWorkHours.id"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
