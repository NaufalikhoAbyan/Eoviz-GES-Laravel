<script setup>
import { Link } from '@inertiajs/vue3';
import PageTitle from "@/Pages/Components/PageTitle.vue";
import ActionButtons from '@/Pages/Components/ActionButtons.vue';
const props = defineProps({
    bloodTypes: Object
});
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Blood Types" description="List of all Blood Type"/>
            <Link :href="route('blood-types.create')"><button class="primary-btn h-fit">Add +</button></Link>
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
                    <tr class="bg-red-100 border-b">
                        <th class="table-item">No.</th>
                        <th class="table-item">Name</th>
                        <th class="table-item">Status</th>
                        <th class="table-item">Description</th>
                        <th class="table-item w-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b" v-for="(bloodType, index) in props.bloodTypes" :key="bloodType.id">
                        <td class="table-item">{{ index + 1 }}</td>
                        <td class="table-item">{{ bloodType.name }}</td>
                        <td class="table-item">{{ bloodType.status }}</td>
                        <td class="table-item">{{ bloodType.description }}</td>
                        <td class="table-action-item w-fit">
                            <ActionButtons route-name="blood-types" :parameter="bloodType.id" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
