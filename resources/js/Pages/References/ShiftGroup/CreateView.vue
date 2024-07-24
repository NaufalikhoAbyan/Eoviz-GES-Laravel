<script setup>
import { useForm } from '@inertiajs/vue3';
import { ref, provide } from "vue";
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";
import FormButtons from "@/Pages/Components/Forms/FormButtons.vue";
import FormCard from "@/Pages/Components/Forms/FormCard.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import TextAreaInputForm from "@/Pages/Components/Forms/TextAreaInputForm.vue";
import RadioInputForm from "@/Pages/Components/Forms/RadioInputForm.vue";
import RadioItem from "@/Pages/Components/Forms/RadioItem.vue";
import ShiftPatternForm from "@/Pages/Components/ShiftGroup/ShiftPatternForm.vue";
const props = defineProps({
    shiftWorkHours: Object,
    errors: Object
});

const form = useForm({
    code: null,
    name: null,
    order: null,
    status: null,
    is_follow_holiday: null,
    description: null,
    shift_group_patterns: null
});

const shiftPatternForms = ref([
    {
        id: 1,
        form: ref({
            shift_work_hour_id: null,
            is_short_day: false
        })
    }
]);

const patterns = ref(null);

function submitAllForm() {
    form.shift_group_patterns = patterns.value['shiftPatternForms'];
}

provide('shiftWorkHours', props.shiftWorkHours);
</script>

<template>
    <FormCard save-route="shift-groups.store" :form="form" method="POST">
        <PageTitle page-name="Create Shift Group" description="Create a new Shift Group data"/>
        <TextInputForm title="Code" name="code" :error-message="props.errors.code" v-model="form.code"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.name" v-model="form.name"/>
        <ShiftPatternForm ref="patterns" :shiftPatternForms="shiftPatternForms" :error-message="props.errors[0]"/>
        <TextInputForm title="Order" name="order" :error-message="props.errors.order" v-model.number="form.order"/>
        <RadioInputForm title="Status" name="status" :error-message="props.errors.status" v-model.number="form.status">
            <RadioItem label="Active" id="active"/>
            <RadioItem label="Not Active" id="not active"/>
        </RadioInputForm>
        <RadioInputForm title="Follow Holiday" name="followHoliday" :error-message="props.errors['is_follow_holiday']" v-model.number="form['is_follow_holiday']">
            <RadioItem label="Yes" id="yes" :value="true"/>
            <RadioItem label="No" id="no" :value="false"/>
        </RadioInputForm>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model.number="form.description"/>
        <FormButtons cancel-route="shift-groups.index" @confirm="submitAllForm"/>
    </FormCard>
</template>
