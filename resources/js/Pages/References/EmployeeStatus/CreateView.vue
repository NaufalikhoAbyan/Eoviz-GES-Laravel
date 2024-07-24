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
    errors: Object
});

const form = useForm({
    name: null,
    is_active: null,
    order: null,
    status: null,
    description: null
});
</script>

<template>
    <FormCard save-route="employee-statuses.store" :form="form" method="POST">
        <PageTitle page-name="Create Employee Status" description="Create a new Employee Status data"/>
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
        <FormButtons cancel-route="employee-types.index"/>
    </FormCard>
</template>
