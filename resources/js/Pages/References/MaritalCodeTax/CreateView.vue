<script setup>
import { useForm } from "@inertiajs/vue3";
import FormCard from "@/Pages/Components/Forms/FormCard.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";
import TextAreaInputForm from "@/Pages/Components/Forms/TextAreaInputForm.vue";
import FormButtons from "@/Pages/Components/Forms/FormButtons.vue";

const props = defineProps({
    errors: Object
});
const form = useForm({
    code: null,
    name: null,
    order: null,
    description: null
});
</script>

<template>
    <FormCard save-route="marital-code-taxes.index" :form="form" method="POST">
        <PageTitle page-name="Create Marital Code Tax" description="Create a new code tax"/>
        <TextInputForm title="Code" name="code" :error-message="props.errors.code" v-model="form.code"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.name" v-model="form.name"/>
        <TextInputForm title="Order" name="order" :error-message="props.errors.order" v-model.number="form.order"/>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model="form.description"/>
        <FormButtons cancel-route="marital-code-taxes.index"/>
    </FormCard>
</template>
