<script setup>
import { useForm } from '@inertiajs/vue3';
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";
import FormButtons from "@/Pages/Components/Forms/FormButtons.vue";
import FormCard from "@/Pages/Components/Forms/FormCard.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import TextAreaInputForm from "@/Pages/Components/Forms/TextAreaInputForm.vue";
import RadioInputForm from "@/Pages/Components/Forms/RadioInputForm.vue";
import RadioItem from "@/Pages/Components/Forms/RadioItem.vue";
import SingleCheckboxInputForm from "@/Pages/Components/Forms/SingleCheckboxInputForm.vue";
const props = defineProps({
    errors: Object
});

const form = useForm({
    name: null,
    hour: null,
    holiday: null,
    status: null,
    description: null,
    is_locked: false
});
</script>

<template>
    <FormCard save-route="work-hours.store" :form="form" method="POST">
        <PageTitle page-name="Create Work Hour" description="Create a new Work Hour"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.name" v-model="form.name"/>
        <TextInputForm title="Hour" name="hour" :error-message="props.errors.hour" v-model="form.hour"/>
        <TextInputForm title="Holiday" name="holiday" :error-message="props.errors.holiday" v-model="form.holiday"/>
        <RadioInputForm title="Status" name="status" :error-message="props.errors.status" v-model="form.status">
            <RadioItem label="Active" id="active"/>
            <RadioItem label="Not Active" id="not_active"/>
        </RadioInputForm>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model="form.description"/>
        <SingleCheckboxInputForm title="Is Locked" name="is_locked" id="isLocked" :error-message="props.errors['is_locked']" v-model="form.is_locked"/>
        <FormButtons cancel-route="work-hours.index"/>
    </FormCard>
</template>
