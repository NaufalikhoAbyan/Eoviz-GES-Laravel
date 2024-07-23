<script setup>
import { Link } from "@inertiajs/vue3";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import ActionButtons from "@/Pages/Components/ActionButtons.vue";
const props = defineProps({
    employeeStatuses: Object
});
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Employee Statuses" description="List of all employee status"/>
            <Link :href="route('employee-statuses.create')"><button class="primary-btn h-fit">Add +</button></Link>
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
                <tr class="bg-gray-100 border-b">
                    <th class="table-item">No.</th>
                    <th class="table-item">Name</th>
                    <th class="table-item">Is Active</th>
                    <th class="table-item">Order</th>
                    <th class="table-item">Status</th>
                    <th class="table-item w-1">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b" v-for="(employeeStatus, index) in props.employeeStatuses" :key="employeeStatus.id">
                    <td class="table-item">{{ index + 1 }}</td>
                    <td class="table-item">{{ employeeStatus.name }}</td>
                    <td class="table-item">{{ employeeStatus['is_active'] ? "Yes" : "No" }}</td>
                    <td class="table-item">{{ employeeStatus.order }}</td>
                    <td class="table-item">{{ employeeStatus.status }}</td>
                    <td class="table-action-item w-fit">
                        <ActionButtons route-name="employee-statuses" :parameter="employeeStatus.id"/>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
