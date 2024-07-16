<script setup>
import { Link } from "@inertiajs/vue3";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import ActionButtons from "@/Pages/Components/ActionButtons.vue";

const props = defineProps({
    maritalStatuses: Object
});
let count = 1;
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Marital Statuses" description="List of all marital Status"/>
            <Link :href="route('marital-statuses.create')"><button class="primary-btn h-fit">Add +</button></Link>
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
                    <th class="table-item">Is Married</th>
                    <th class="table-item">Status</th>
                    <th class="table-item w-1">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b" v-for="maritalStatus in props.maritalStatuses" :key="maritalStatus.id">
                    <td class="table-item">{{ count++ }}</td>
                    <td class="table-item">{{ maritalStatus.name }}</td>
                    <td class="table-item">{{ maritalStatus['is_married'] ? "Yes" : "No" }}</td>
                    <td class="table-item">{{ maritalStatus.status }}</td>
                    <td class="table-action-item w-fit">
                        <ActionButtons route-name="marital-statuses" :parameter="maritalStatus.id"/>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
