<script setup>
import { Link } from '@inertiajs/vue3';
import PageTitle from "@/Pages/Components/PageTitle.vue";
import ActionButtons from "@/Pages/Components/ActionButtons.vue";
const props = defineProps({
    gradeTypes: Object
});
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Grade Types" description="List of all Grade Type"/>
            <Link :href="route('grade-types.create')"><button class="primary-btn h-fit">Add +</button></Link>
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
                    <th class="table-item">Level</th>
                    <th class="table-item">Code</th>
                    <th class="table-item">Name</th>
                    <th class="table-item">Order</th>
                    <th class="table-item w-1">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b" v-for="(gradeType, index) in props.gradeTypes" :key="gradeType.id">
                    <td class="table-item">{{ index + 1 }}</td>
                    <td class="table-item">{{ gradeType.level }}</td>
                    <td class="table-item">{{ gradeType.code}}</td>
                    <td class="table-item">{{ gradeType.name }}</td>
                    <td class="table-item">{{ gradeType.order }}</td>
                    <td class="table-action-item w-fit">
                        <ActionButtons route-name="grade-types" :parameter="gradeType.id"/>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
