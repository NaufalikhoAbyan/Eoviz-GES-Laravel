<script setup>
import { useForm } from "@inertiajs/vue3";
import RadioInputForm from "@/Pages/Components/Forms/RadioInputForm.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import RadioItem from "@/Pages/Components/Forms/RadioItem.vue";
import FormButtons from "@/Pages/Components/Forms/FormButtons.vue";
import TextAreaInputForm from "@/Pages/Components/Forms/TextAreaInputForm.vue";
import FormCard from "@/Pages/Components/Forms/FormCard.vue";
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";

const props = defineProps({
    employeeType: Object,
    errors: Object
});

const form = useForm({
    name: props.employeeType.name,
    is_permanent: props.employeeType.is_permanent,
    order: props.employeeType.order,
    status: props.employeeType.status,
    description: props.employeeType.description
});
</script>

<template>
    <FormCard save-route="employee-types.update" :parameter="props.employeeType.id" :form="form" method="PUT">
        <PageTitle page-name="Edit Employee Type" description="Edit an Employee Type data"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.name" v-model="form.name"/>
        <RadioInputForm title="Is Permanent" name="is_permanent" :error-message="props.errors.is_permanent" v-model="form.is_permanent">
            <RadioItem label="Yes" id="yes" value="1"/>
            <RadioItem label="No" id="no" value="0"/>
        </RadioInputForm>
        <TextInputForm title="Order" name="order" :error-message="props.errors.order" v-model.number="form.order"/>
        <RadioInputForm title="Status" name="status" :error-message="props.errors.status" v-model="form.status">
            <RadioItem label="Active" id="active"/>
            <RadioItem label="Not Active" id="not_active"/>
        </RadioInputForm>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model="form.description"/>
        <FormButtons cancel-route="employee-types.index"/>
    </FormCard>
</template>

