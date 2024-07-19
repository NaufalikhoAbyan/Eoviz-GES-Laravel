<script setup>
import { useForm } from "@inertiajs/vue3";
import { computed, watch } from 'vue';
import RadioInputForm from "@/Pages/Components/Forms/RadioInputForm.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import RadioItem from "@/Pages/Components/Forms/RadioItem.vue";
import FormButtons from "@/Pages/Components/Forms/FormButtons.vue";
import TextAreaInputForm from "@/Pages/Components/Forms/TextAreaInputForm.vue";
import FormCard from "@/Pages/Components/Forms/FormCard.vue";
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";
import TimeInputForm from "@/Pages/Components/Forms/TimeInputForm.vue";

const props = defineProps({
    shiftWorkHour: Object,
    errors: Object
});

const form = useForm({
    'code' : props.shiftWorkHour.code,
    'name' : props.shiftWorkHour.name,
    'begin_log' : props.shiftWorkHour.begin_log,
    'end_log' : props.shiftWorkHour.end_log,
    'start' : props.shiftWorkHour.start,
    'end' : props.shiftWorkHour.end,
    'start_tolerance' : props.shiftWorkHour.start_tolerance,
    'end_tolerance' : props.shiftWorkHour.end_tolerance,
    'break_start' : props.shiftWorkHour.break_start,
    'break_end' : props.shiftWorkHour.break_end,
    'cross_day' : props.shiftWorkHour.cross_day,
    'overtime_type' : props.shiftWorkHour.overtime_type,
    'automatic_overtime' : props.shiftWorkHour.automatic_overtime,
    'status' : props.shiftWorkHour.status,
    'description' : props.shiftWorkHour.description
});

const isAutomaticOvertime = computed(() => form.overtime_type === 'Automatic');

watch(isAutomaticOvertime, (newValue) => {
    if (!newValue) {
        form.automatic_overtime = null;
    }
});

</script>

<template>
    <FormCard save-route="shift-work-hours.update" :parameter="props.shiftWorkHour.id" :form="form" method="PUT">
        <PageTitle page-name="Edit Shift Work Hour" description="Edit a Shift Work Hour Data"/>
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
        <Transition>
            <div class="max-h-96 border-b overflow-hidden" v-if="isAutomaticOvertime">
                <RadioInputForm title="Automatic Overtime" name="automatic_overtime" :error-message="props.errors.automatic_overtime" v-model="form.automatic_overtime">
                    <RadioItem label="Presence Before Work Hour" id="presence_before_work_hour"/>
                    <RadioItem label="Presence After Work Hour" id="presence_after_work_hour"/>
                    <RadioItem label="Presence Before and After Work Hour" id="presence_before_and_after_work_hour"/>
                </RadioInputForm>
            </div>
        </Transition>
        <RadioInputForm title="Status" name="status" :error-message="props.errors.status" v-model="form.status">
            <RadioItem label="Active" id="active"/>
            <RadioItem label="Not Active" id="not_active"/>
        </RadioInputForm>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model="form.description"/>
        <FormButtons cancel-route="shift-work-hours.index"/>
    </FormCard>
</template>

<style scoped>
.v-enter-active,
.v-leave-active {
    transition: max-height 0.5s ease-in-out;
}

.v-enter-from,
.v-leave-to {
    max-height: 0;
}
</style>
