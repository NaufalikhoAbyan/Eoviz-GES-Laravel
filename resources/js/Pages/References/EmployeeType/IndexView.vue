<script setup>
import { Link } from '@inertiajs/vue3';
import PageTitle from "@/Pages/Components/PageTitle.vue";
import ActionButtons from "@/Pages/Components/ActionButtons.vue";
const props = defineProps({
    employeeTypes: Object
});
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Employee Types" description="List of all employee type"/>
            <Link :href="route('employee-types.create')"><button class="primary-btn h-fit">Add +</button></Link>
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
                        <th class="table-item">Is Permanent</th>
                        <th class="table-item">Order</th>
                        <th class="table-item">Status</th>
                        <th class="table-item w-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b" v-for="(employeeType, index) in props.employeeTypes" :key="employeeType.id">
                        <td class="table-item">{{ index + 1 }}</td>
                        <td class="table-item">{{ employeeType.name }}</td>
                        <td class="table-item">{{ employeeType['is_permanent'] ? "Yes" : "No" }}</td>
                        <td class="table-item">{{ employeeType.order }}</td>
                        <td class="table-item">{{ employeeType.status }}</td>
                        <td class="table-action-item w-fit">
                            <ActionButtons route-name="employee-types" :parameter="employeeType.id"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
