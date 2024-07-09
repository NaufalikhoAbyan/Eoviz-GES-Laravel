<script setup>
const props = defineProps({
    employeeTypes: Object
});
let count = 1
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <div>
                <p class="table-page-name">Employee Types</p>
                <p class="opacity-50">List of all employee types</p>
            </div>
            <button class="primary-btn h-fit">Add +</button>
        </div>
        <div class="mt-8 border rounded-lg drop-shadow-lg bg-white">
            <table class="table-auto w-full text-left">
                <thead>
                    <tr class="bg-gray-100 border-b">
                        <th class="table-item">No.</th>
                        <th class="table-item">Name</th>
                        <th class="table-item">Is Permanent</th>
                        <th class="table-item">Order</th>
                        <th class="table-item">Status</th>
                        <th class="table-item">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b" v-for="employeeType in props.employeeTypes" :key="employeeType.id">
                        <td class="table-item">{{ count++ }}</td>
                        <td class="table-item">{{ employeeType.name }}</td>
                        <td class="table-item">{{ employeeType['is_permanent'] ? "Yes" : "No" }}</td>
                        <td class="table-item">{{ employeeType.order }}</td>
                        <td class="table-item">{{ employeeType.status }}</td>
                        <td class="table-item">{{ employeeType.name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
