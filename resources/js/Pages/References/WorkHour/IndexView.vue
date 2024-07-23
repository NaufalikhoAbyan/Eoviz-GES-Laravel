<script setup>
import { Link } from '@inertiajs/vue3';
import PageTitle from '@/Pages/Components/PageTitle.vue';
import ActionButtons from '@/Pages/Components/ActionButtons.vue';
const props = defineProps({
    workHours: Object
});
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Work Hour" description="List of all work hour"/>
            <Link :href="route('work-hours.create')"><button class="primary-btn h-fit">Add +</button></Link>
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
                        <th class="table-item">Name</th>
                        <th class="table-item">Hour</th>
                        <th class="table-item">Holiday</th>
                        <th class="table-item">Status</th>
                        <th class="table-item">Description</th>
                        <th class="table-item">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b" v-for="(workHour, index) in props.workHours" :key="workHour.id">
                        <td class="table-item">{{ index + 1 }}</td>
                        <td class="table-item">{{ workHour.name }}</td>
                        <td class="table-item">{{ workHour.hour }}</td>
                        <td class="table-item">{{ workHour.holiday }}</td>
                        <td class="table-item">{{ workHour.status }}</td>
                        <td class="table-item">{{ workHour.description }}</td>
                        <td class="table-action-item">
                            <ActionButtons route-name="work-hours" :parameter="workHour.id"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
