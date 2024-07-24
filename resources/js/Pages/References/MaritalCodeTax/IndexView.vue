<script setup>
import PageTitle from "@/Pages/Components/PageTitle.vue";
import {Link} from "@inertiajs/vue3";
import ActionButtons from "@/Pages/Components/ActionButtons.vue";

const props = defineProps({
    maritalCodeTaxes: Object
});
</script>

<template>
    <div>
        <div class="flex justify-between items-center">
            <PageTitle page-name="Marital Code Taxes" description="List of all Marital Code Tax"/>
            <Link :href="route('marital-code-taxes.create')"><button class="primary-btn h-fit">Add +</button></Link>
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
                    <th class="table-item">Code</th>
                    <th class="table-item">Name</th>
                    <th class="table-item">Order</th>
                    <th class="table-item w-1">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b" v-for="(maritalCodeTax, index) in props.maritalCodeTaxes" :key="maritalCodeTax.id">
                    <td class="table-item">{{ index + 1 }}</td>
                    <td class="table-item">{{ maritalCodeTax.code }}</td>
                    <td class="table-item">{{ maritalCodeTax.name }}</td>
                    <td class="table-item">{{ maritalCodeTax.order }}</td>
                    <td class="table-action-item w-fit">
                        <ActionButtons route-name="marital-code-taxes" :parameter="maritalCodeTax.id"/>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
