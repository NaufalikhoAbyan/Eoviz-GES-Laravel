<script setup>
import { useForm } from "@inertiajs/vue3";
import FormCard from "@/Pages/Components/Forms/FormCard.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import DropdownInputForm from "@/Pages/Components/Forms/DropdownInputForm.vue";
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";
import RadioInputForm from "@/Pages/Components/Forms/RadioInputForm.vue";
import RadioItem from "@/Pages/Components/Forms/RadioItem.vue";
import TextAreaInputForm from "@/Pages/Components/Forms/TextAreaInputForm.vue";
import FormButtons from "@/Pages/Components/Forms/FormButtons.vue";
const props = defineProps({
    functionalPositionTypes: Object,
    errors: Object
});
const form = useForm({
    functional_position_type_id: null,
    code: null,
    name: null,
    order: null,
    status: null,
    description: null,
});
</script>

<template>
    <FormCard save-route="functional-position-types.store" :form="form" method="POST">
        <PageTitle page-name="Create Functional Position Type" description="Create a new Functional Position Type data"/>
        <DropdownInputForm title="Parent" :error-message="props.errors['functional_position_type_id']" v-model="form['functional_position_type_id']">
            <option :value="null">No parent</option>
            <option v-for="functionalPositionType in functionalPositionTypes" :key="functionalPositionType.id" :value="functionalPositionType.id">{{ functionalPositionType.name }}</option>
        </DropdownInputForm>
        <TextInputForm title="Code" name="code" :error-message="props.errors.code" v-model="form.code"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.name" v-model="form.name"/>
        <TextInputForm title="Order" name="order" :error-message="props.errors.order" v-model.number="form.order"/>
        <RadioInputForm title="Status" name="status" :error-message="props.errors.status" v-model="form.status">
            <RadioItem label="Active" id="active"/>
            <RadioItem label="Not Active" id="not_active"/>
        </RadioInputForm>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model.number="form.description"/>
        <FormButtons cancel-route="functional-position-types.index"/>
    </FormCard>
</template>
