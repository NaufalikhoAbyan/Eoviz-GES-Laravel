<script setup>
import { useForm } from '@inertiajs/vue3';
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";
import TimeInputForm from "@/Pages/Components/Forms/TimeInputForm.vue";
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
    code: null,
    name: null,
    begin_log: null,
    end_log: null,
    start: null,
    end: null,
    start_tolerance: null,
    end_tolerance: null,
    break_start: null,
    break_end: null,
    cross_day: null,
    overtime_type: null,
    status: null,
    description: null
});
</script>

<template>
    <FormCard save-route="shift-work-hours.store" :form="form" method="POST">
        <PageTitle page-name="Create Shift Work Hour" description="Create a new Shift Work Hour"/>
        <TextInputForm title="Code" name="code" :error-message="props.errors.code" v-model="form.code"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.name" v-model="form.name"/>
        <TimeInputForm title="Begin Log" name="begin_log" :error-message="props.errors.begin_log" v-model="form.begin_log"/>
        <TimeInputForm title="End Log" name="end_log" :error-message="props.errors.end_log" v-model="form.end_log"/>
        <TimeInputForm title="Start" name="start" :error-message="props.errors.start" v-model="form.start"/>
        <TimeInputForm title="End" name="end" :error-message="props.errors.end" v-model="form.end"/>
        <TextInputForm title="Start Tolerance" name="start_tolerance" :error-message="props.errors.start_tolerance" v-model="form.start_tolerance"/>
        <TextInputForm title="End Tolerance" name="end_tolerance" :error-message="props.errors.end_tolerance" v-model="form.end_tolerance"/>
        <TimeInputForm title="Break Start" name="break_start" :error-message="props.errors.break_start" v-model="form.break_start"/>
        <TimeInputForm title="Break End" name="break_end" :error-message="props.errors.break_end" v-model="form.break_end"/>
        <RadioInputForm title="Cross Day" name="cross_day" :error-message="props.errors.cross_day" v-model="form.cross_day">
            <RadioItem label="Yes" id="yes"/>
            <RadioItem label="No" id="no"/>
        </RadioInputForm>
        <RadioInputForm title="Overtime Type" name="overtime_type" :error-message="props.errors.overtime_type" v-model="form.overtime_type">
            <RadioItem label="Request" id="request"/>
            <RadioItem label="Automatic" id="automatic"/>
        </RadioInputForm>
        <RadioInputForm title="Status" name="status" :error-message="props.errors.status" v-model="form.status">
            <RadioItem label="Active" id="active"/>
            <RadioItem label="Not Active" id="not_active"/>
        </RadioInputForm>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model="form.description"/>
        <FormButtons cancel-route="shift-work-hours.index"/>
    </FormCard>
</template>
