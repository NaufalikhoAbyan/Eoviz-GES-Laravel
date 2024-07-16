<script setup>
import { useForm } from "@inertiajs/vue3";

import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";
import RadioInputForm from "@/Pages/Components/Forms/RadioInputForm.vue";
import RadioItem from "@/Pages/Components/Forms/RadioItem.vue";
import DropdownInputForm from "@/Pages/Components/Forms/DropdownInputForm.vue";
import TextAreaInputForm from "@/Pages/Components/Forms/TextAreaInputForm.vue";
import FormCard from "@/Pages/Components/Forms/FormCard.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import FormButtons from "@/Pages/Components/Forms/FormButtons.vue";

const props = defineProps({
    maritalCode: Object,
    maritalStatuses: Object,
    errors: Object
});

const form = useForm({
    code: props.maritalCode.code,
    name: props.maritalCode.name,
    status: props.maritalCode.status,
    description: props.maritalCode.description,
    marital_status_id: props.maritalCode.marital_status_id,
});
</script>

<template>
    <FormCard save-route="marital-codes.update" :parameter="props.maritalCode.id" :form="form" method="PUT">
        <PageTitle page-name="Edit Marital Code" description="Edit a marital code data"/>
        <TextInputForm title="Code" name="code" :error-message="props.errors.code" v-model="form.code"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.name" v-model="form.name"/>
        <RadioInputForm title="Status" name="status" :error-message="props.errors.status" v-model="form.status">
            <RadioItem label="Active" id="active"/>
            <RadioItem label="Not Active" id="not_active"/>
        </RadioInputForm>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model="form.description"/>
        <DropdownInputForm title="Marital Status" :error-message="props.errors.status" v-model.number="form['marital_status_id']">
            <option v-for="maritalStatus in props.maritalStatuses" :key="maritalStatus.id" :value="maritalStatus.id">{{ maritalStatus.name }}</option>
        </DropdownInputForm>
        <FormButtons cancel-route="marital-codes.index"/>
    </FormCard>
</template>
