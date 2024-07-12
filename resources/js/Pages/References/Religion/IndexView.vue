<script setup>
import { Link } from '@inertiajs/vue3';
import PageTitle from '@/Pages/Components/PageTitle.vue';
import ActionButtons from '@/Pages/Components/ActionButtons.vue';
const props = defineProps({
    religions: Object
});
let count = 1;
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Religion" description="List of all religions"/>
            <Link :href="route('religions.create')"><button class="primary-btn h-fit">Add +</button></Link>
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
                        <th class="table-item">Status</th>
                        <th class="table-item">Description</th>
                        <th class="table-item">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b" v-for="religion in props.religions" :key="religion.id">
                        <td class="table-item">{{ count++ }}</td>
                        <td class="table-item">{{ religion.name }}</td>
                        <td class="table-item">{{ religion.status }}</td>
                        <td class="table-item">{{ religion.description }}</td>
                        <td class="table-action-item">
                            <ActionButtons route-name="religions" :parameter="religion.id"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
