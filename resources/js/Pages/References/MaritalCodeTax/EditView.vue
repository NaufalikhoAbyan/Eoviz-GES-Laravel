<script setup>
import { useForm } from "@inertiajs/vue3";
import FormCard from "@/Pages/Components/Forms/FormCard.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";
import TextAreaInputForm from "@/Pages/Components/Forms/TextAreaInputForm.vue";
import FormButtons from "@/Pages/Components/Forms/FormButtons.vue";

const props = defineProps({
    maritalCodeTax: Object,
    errors: Object
});
const form = useForm({
    code: props.maritalCodeTax.code,
    name: props.maritalCodeTax.name,
    order: props.maritalCodeTax.order,
    description: props.maritalCodeTax.description
});
</script>

<template>
    <FormCard save-route="marital-code-taxes.update" :parameter="props.maritalCodeTax.id" :form="form" method="PUT">
        <PageTitle page-name="Edit Marital Code Tax" description="Edit a Marital Code Tax data"/>
        <TextInputForm title="Code" name="code" :error-message="props.errors.code" v-model.number="form.code"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.name" v-model="form.name"/>
        <TextInputForm title="Order" name="order" :error-message="props.errors.order" v-model.number="form.order"/>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model="form.description"/>
        <FormButtons cancel-route="marital-code-taxes.index"/>
    </FormCard>
</template>
