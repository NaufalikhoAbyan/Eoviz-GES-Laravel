<script setup>
import { useForm } from "@inertiajs/vue3";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";
import RadioInputForm from "@/Pages/Components/Forms/RadioInputForm.vue";
import TextAreaInputForm from "@/Pages/Components/Forms/TextAreaInputForm.vue";
import FormCard from "@/Pages/Components/Forms/FormCard.vue";
import FormButtons from "@/Pages/Components/Forms/FormButtons.vue";
import RadioItem from "@/Pages/Components/Forms/RadioItem.vue";

const props = defineProps({
    errors: Object
})

const form = useForm({
    name: null,
    is_married: null,
    status: null,
    description: null
})
</script>

<template>
    <FormCard save-route="marital-statuses.store" :form="form" method="POST">
        <PageTitle page-name="Create Marital Status" description="Create a new marital status"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.name" v-model="form.name"/>
        <RadioInputForm title="Is Married" name="is_married" :error-message="props.errors.is_permanent" v-model="form.is_married">
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
