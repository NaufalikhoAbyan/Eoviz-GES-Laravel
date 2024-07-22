<script setup>
import { Link } from '@inertiajs/vue3';
import PageTitle from '@/Pages/Components/PageTitle.vue';
import ActionButtons from '@/Pages/Components/ActionButtons.vue';
const props = defineProps({
    employees: Object
});
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Work Hour" description="List of all work hour"/>
            <Link :href="route('employees.create')"><button class="primary-btn h-fit">Add +</button></Link>
        </div>
        <div v-if="$page.props.flash.message" class="card-success">
            {{ $page.props.flash.message }}
        </div>
        <div class="card">
            <table class="table-auto w-full text-left">
                <thead>
                    <tr class="bg-green-100 border-b">
                        <th class="table-item">No.</th>
                        <th class="table-item">Personal ID</th>
                        <th class="table-item">Full Name</th>
                        <th class="table-item">Gender</th>
                        <th class="table-item">Employee Type</th>
                        <th class="table-item">Employee Status</th>
                        <th class="table-item">Position</th>
                        <th class="table-item">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b" v-for="(employee, index) in props.employees" :key="employee.id">
                        <td class="table-item">{{ index + 1 }}</td>
                        <td class="table-item">{{ employee.personal_id}}</td>
                        <td class="table-item">{{ employee.fullname}}</td>
                        <td class="table-item">{{ employee.gender}}</td>
                        <td class="table-item">{{ employee['employee_type'].name}}</td>
                        <td class="table-item">{{ employee['employee_status'].name }}</td>
                        <td class="table-item">{{ employee['structural_position_type'].name }}</td>
                        <td class="table-action-item">
                            <ActionButtons route-name="employees" :parameter="employee.id"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
