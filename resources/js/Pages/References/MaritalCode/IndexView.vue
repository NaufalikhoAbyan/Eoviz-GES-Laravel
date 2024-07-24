<script setup>
import { Link } from "@inertiajs/vue3";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import ActionButtons from "@/Pages/Components/ActionButtons.vue";

const props = defineProps({
    maritalCodes: Object
});
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Marital Codes" description="List of all Marital Code"/>
            <Link :href="route('marital-codes.create')"><button class="primary-btn h-fit">Add +</button></Link>
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
                    <th class="table-item">Marital Status</th>
                    <th class="table-item">Code</th>
                    <th class="table-item">Name</th>
                    <th class="table-item">Status</th>
                    <th class="table-item w-1">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b" v-for="(maritalCode, index) in props.maritalCodes" :key="maritalCode.id">
                    <td class="table-item">{{ index + 1 }}</td>
                    <td class="table-item">{{ maritalCode['marital_status'].name }}</td>
                    <td class="table-item">{{ maritalCode.code }}</td>
                    <td class="table-item">{{ maritalCode.name }}</td>
                    <td class="table-item">{{ maritalCode.status }}</td>
                    <td class="table-action-item w-fit">
                        <ActionButtons route-name="marital-codes" :parameter="maritalCode.id"/>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
