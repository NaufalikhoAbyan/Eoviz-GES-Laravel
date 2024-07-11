<script setup>
import { useForm } from "@inertiajs/vue3";
import FormButtons from "@/Pages/Components/Forms/FormButtons.vue";
import RadioInputForm from "@/Pages/Components/Forms/RadioInputForm.vue";
import RadioItem from "@/Pages/Components/Forms/RadioItem.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import FormCard from "@/Pages/Components/Forms/FormCard.vue";
import TextAreaInputForm from "@/Pages/Components/Forms/TextAreaInputForm.vue";
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";

const props = defineProps({
    employeeStatus: Object,
    errors: Object
});
const form = useForm({
    'name': props.employeeStatus.name,
    'is_active': props.employeeStatus.is_active,
    'order': props.employeeStatus.order,
    'status': props.employeeStatus.status,
    'description': props.employeeStatus.description
});
</script>

<template>
    <FormCard save-route="employee-statuses.update" :parameter="props.employeeStatus.id" :form="form" method="PUT">
        <PageTitle page-name="Edit Employee Status" description="Edit a new employee status"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.name" v-model="form.name"/>
        <RadioInputForm title="Is Active" name="is_active" :error-message="props.errors.is_active" v-model="form.is_active">
            <RadioItem label="Yes" id="yes" value="1"/>
            <RadioItem label="No" id="no" value="0"/>
        </RadioInputForm>
        <TextInputForm title="Order" name="order" :error-message="props.errors.order" v-model.number="form.order"/>
        <RadioInputForm title="Status" name="status" :error-message="props.errors.status" v-model="form.status">
            <RadioItem label="Active" id="active"/>
            <RadioItem label="Not Active" id="not_active"/>
        </RadioInputForm>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model="form.description"/>
        <FormButtons cancel-route="employee-statuses.index"/>
    </FormCard>
</template>
