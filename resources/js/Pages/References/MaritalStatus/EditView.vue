<script setup>
import { useForm } from "@inertiajs/vue3";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import RadioInputForm from "@/Pages/Components/Forms/RadioInputForm.vue";
import TextAreaInputForm from "@/Pages/Components/Forms/TextAreaInputForm.vue";
import FormCard from "@/Pages/Components/Forms/FormCard.vue";
import FormButtons from "@/Pages/Components/Forms/FormButtons.vue";
import RadioItem from "@/Pages/Components/Forms/RadioItem.vue";
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";

const props = defineProps({
    maritalStatus: Object,
    errors: Object
});

const form = useForm({
    name: props.maritalStatus.name,
    is_married: props.maritalStatus.is_married,
    status: props.maritalStatus.status,
    description: props.maritalStatus.description
});
</script>

<template>
    <FormCard save-route="marital-statuses.update" :parameter="props.maritalStatus.id" :form="form" method="PUT">
        <PageTitle page-name="Edit Marital Status" description="Edit a Marital Status data"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.name" v-model="form.name"/>
        <RadioInputForm title="Is Permanent" name="is_permanent" :error-message="props.errors.is_married" v-model="form.is_married">
            <RadioItem label="Yes" id="yes" value="1"/>
            <RadioItem label="No" id="no" value="0"/>
        </RadioInputForm>
        <RadioInputForm title="Status" name="status" :error-message="props.errors.status" v-model="form.status">
            <RadioItem label="Active" id="active"/>
            <RadioItem label="Not Active" id="not_active"/>
        </RadioInputForm>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model="form.description"/>
        <FormButtons cancel-route="marital-statuses.index"/>
    </FormCard>
</template>
