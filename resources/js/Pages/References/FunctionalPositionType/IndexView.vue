<script setup>
import { Link } from "@inertiajs/vue3";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import ActionButtons from "@/Pages/Components/ActionButtons.vue";
const props = defineProps({
    functionalPositionTypes: Object
});
let count = 1;
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Functional Position Types" description="List of all functional position type"/>
            <Link :href="route('functional-position-types.create')"><button class="primary-btn h-fit">Add +</button></Link>
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
                    <th class="table-item">Parent</th>
                    <th class="table-item">Code</th>
                    <th class="table-item">Name</th>
                    <th class="table-item">Order</th>
                    <th class="table-item">Status</th>
                    <th class="table-item w-1">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b" v-for="functionalPositionType in props.functionalPositionTypes" :key="functionalPositionType.id">
                    <td class="table-item">{{ count++ }}</td>
                    <td class="table-item">{{ functionalPositionType.parent ? functionalPositionType.parent.name : '' }}</td>
                    <td class="table-item">{{ functionalPositionType.code }}</td>
                    <td class="table-item">{{ functionalPositionType.name }}</td>
                    <td class="table-item">{{ functionalPositionType.order }}</td>
                    <td class="table-item">{{ functionalPositionType.status }}</td>
                    <td class="table-action-item w-fit">
                        <ActionButtons route-name="functional-position-types" :parameter="functionalPositionType.id"/>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
