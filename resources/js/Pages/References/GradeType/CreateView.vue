<script setup>
import { useForm } from '@inertiajs/vue3';
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";
import FormButtons from "@/Pages/Components/Forms/FormButtons.vue";
import FormCard from "@/Pages/Components/Forms/FormCard.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import TextAreaInputForm from "@/Pages/Components/Forms/TextAreaInputForm.vue";
import RadioInputForm from "@/Pages/Components/Forms/RadioInputForm.vue";
import RadioItem from "@/Pages/Components/Forms/RadioItem.vue";
const props = defineProps({
    errors: Object
});

const form = useForm({
    level: null,
    code: null,
    name: null,
    order: null,
    status: null,
    description: null
});
</script>

<template>
    <FormCard save-route="grade-types.store" :form="form" method="POST">
        <PageTitle page-name="Create Grade Type" description="Create a new Grade Type data"/>
        <TextInputForm title="Level" name="level" :error-message="props.errors.level" v-model.number="form.level"/>
        <TextInputForm title="Code" name="code" :error-message="props.errors.code" v-model.number="form.code"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.name" v-model="form.name"/>
        <TextInputForm title="Order" name="order" :error-message="props.errors.order" v-model.number="form.order"/>
        <RadioInputForm title="Status" name="status" :error-message="props.errors.status" v-model="form.status">
            <RadioItem label="Active" id="active"/>
            <RadioItem label="Not Active" id="not_active"/>
        </RadioInputForm>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model="form.description"/>
        <FormButtons cancel-route="grade-types.index"/>
    </FormCard>
</template>
