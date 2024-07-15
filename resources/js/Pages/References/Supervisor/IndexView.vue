<script setup>
import { Link } from '@inertiajs/vue3';
import PageTitle from '@/Pages/Components/PageTitle.vue';
import ActionButtons from '@/Pages/Components/ActionButtons.vue';
const props = defineProps({
    supervisors: Object
});
let count = 1;
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Supervisor" description="List of all supervisor"/>
            <Link :href="route('supervisors.create')"><button class="primary-btn h-fit">Add +</button></Link>
        </div>
        <div v-if="$page.props.flash.message" class="card-success">
            {{ $page.props.flash.message }}
        </div>
        <div class="card">
            <table class="table-auto w-full text-left">
                <thead>
                    <tr class="bg-green-100 border-b">
                        <th class="table-item">No.</th>
                        <th class="table-item">Name</th>
                        <th class="table-item">Street</th>
                        <th class="table-item">Country</th>
                        <th class="table-item">State</th>
                        <th class="table-item">City</th>
                        <th class="table-item">Postal Code</th>
                        <th class="table-item">Phone</th>
                        <th class="table-item">Mobile</th>
                        <th class="table-item">Email</th>
                        <th class="table-item">Status</th>
                        <th class="table-item">Description</th>
                        <th class="table-item">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b" v-for="supervisor in props.supervisors" :key="supervisor.id">
                        <td class="table-item">{{ count++ }}</td>
                        <td class="table-item">{{ supervisor.name }}</td>
                        <td class="table-item">{{ supervisor.street }}</td>
                        <td class="table-item">{{ supervisor.country }}</td>
                        <td class="table-item">{{ supervisor.state }}</td>
                        <td class="table-item">{{ supervisor.city }}</td>
                        <td class="table-item">{{ supervisor.postal_code }}</td>
                        <td class="table-item">{{ supervisor.phone }}</td>
                        <td class="table-item">{{ supervisor.mobile }}</td>
                        <td class="table-item">{{ supervisor.email }}</td>
                        <td class="table-item">{{ supervisor.status }}</td>
                        <td class="table-item">{{ supervisor.description }}</td>
                        <td class="table-action-item">
                            <ActionButtons route-name="supervisors" :parameter="supervisor.id"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
