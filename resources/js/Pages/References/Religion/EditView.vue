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
    religion: Object,
    errors: Object
});

const form = useForm({
    'name' : props.religion.name,
    'status' : props.religion.status,
    'description' : props.religion.description
});
</script>

<template>
    <FormCard save-route="religions.update" :parameter="props.religion.id" :form="form" method="PUT">
        <PageTitle page-name="Edit Religion" description="Edit a religion data"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.name" v-model="form.name"/>
        <RadioInputForm title="Status" name="status" :error-message="props.errors.status" v-model="form.status">
            <RadioItem label="Active" id="active"/>
            <RadioItem label="Not Active" id="not_active"/>
        </RadioInputForm>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model="form.description"/>
        <FormButtons cancel-route="religions.index"/>
    </FormCard>
</template>
