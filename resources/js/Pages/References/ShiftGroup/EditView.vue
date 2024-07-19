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
    shiftGroup: Object,
    shiftWorkHours: Object,
    errors: Object
});

const form = useForm({
    code: props.shiftGroup.code,
    name: props.shiftGroup.name,
    order: props.shiftGroup.order,
    status: props.shiftGroup.status,
    is_follow_holiday: props.shiftGroup.is_follow_holiday,
    description: props.shiftGroup.description,
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

const nextIdValue = ref(1);
if(props.shiftGroup['shift_hour_patterns'].length !== 0) {
    shiftPatternForms.value = [];
    props.shiftGroup['shift_hour_patterns'].forEach((item) => {
        shiftPatternForms.value.push(
            {
                id: nextIdValue.value++,
                form: ref({
                    shift_work_hour_id: item.shift_work_hour_id,
                    is_short_day: !!item.is_short_day
                })
            }
        );
    });
}

const patterns = ref(null);

function submitAllForm() {
    form.shift_group_patterns = patterns.value['shiftPatternForms'];
}

provide('shiftWorkHours', props.shiftWorkHours);
</script>

<template>
    <FormCard save-route="shift-groups.update" :parameter="props.shiftGroup.id" :form="form" method="PUT">
        <PageTitle page-name="Edit Shift Group" description="Edit a new shift group"/>
        <TextInputForm title="Code" name="code" :error-message="props.errors.code" v-model="form.code"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.name" v-model="form.name"/>
        <ShiftPatternForm ref="patterns" :shiftPatternForms="shiftPatternForms" :error-message="props.errors[0]"/>
        <TextInputForm title="Order" name="order" :error-message="props.errors.order" v-model.number="form.order"/>
        <RadioInputForm title="Status" name="status" :error-message="props.errors.status" v-model.number="form.status">
            <RadioItem label="Active" id="active"/>
            <RadioItem label="Not Active" id="not active"/>
        </RadioInputForm>
        <RadioInputForm title="Follow Holiday" name="followHoliday" :error-message="props.errors['is_follow_holiday']" v-model.number="form['is_follow_holiday']">
            <RadioItem label="Yes" id="yes" :value="1"/>
            <RadioItem label="No" id="no" :value="0"/>
        </RadioInputForm>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model.number="form.description"/>
        <FormButtons cancel-route="shift-groups.index" @confirm="submitAllForm"/>
    </FormCard>
</template>
