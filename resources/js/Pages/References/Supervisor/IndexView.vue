<script setup>
import { Link } from '@inertiajs/vue3';
import PageTitle from '@/Pages/Components/PageTitle.vue';
import ActionButtons from '@/Pages/Components/ActionButtons.vue';
const props = defineProps({
    supervisors: Object
});
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
        <div v-if="$page.props.flash.error" class="card-error">
            {{ $page.props.flash.error }}
        </div>
        <div class="card">
            <table class="table-auto w-full text-left">
                <thead>
                    <tr class="bg-green-100 border-b">
                        <th class="table-item">No.</th>
                        <th class="table-item">Name</th>
                        <th class="table-item">Street</th>
                        <th class="table-item">Email</th>
                        <th class="table-item">Status</th>
                        <th class="table-item">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b" v-for="(supervisor, index) in props.supervisors" :key="supervisor.id">
                        <td class="table-item">{{ index + 1 }}</td>
                        <td class="table-item">{{ supervisor.name }}</td>
                        <td class="table-item">{{ supervisor.street }}</td>
                        <td class="table-item">{{ supervisor.email }}</td>
                        <td class="table-item">{{ supervisor.status }}</td>
                        <td class="table-action-item">
                            <ActionButtons route-name="supervisors" :parameter="supervisor.id"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
