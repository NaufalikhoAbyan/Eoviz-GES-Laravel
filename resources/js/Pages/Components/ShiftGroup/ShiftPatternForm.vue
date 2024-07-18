<script setup>
import { ref } from "vue";
import ShiftPatternItem from "@/Pages/Components/ShiftGroup/ShiftPatternItem.vue";

const props = defineProps({
    shiftPatternForms: Object,
    errorMessage: String
})

const nextIdValue = ref(2);

const shiftPatternForms = ref(props.shiftPatternForms)

function addShiftForm() {
    shiftPatternForms.value.push(
        {
            id: nextIdValue.value++,
            form: ref({
                shift_work_hour_id: null,
                is_short_day: false
            })
        }
    )
}

function deleteShiftForm(index) {
    shiftPatternForms.value.splice(index, 1);
}

defineExpose({
    shiftPatternForms
})

</script>

<template>
    <div class="flex items-center py-8 border-b">
        <p class="w-1/3">Pattern</p>
        <div class="flex w-2/3 flex-col flex-grow gap-2">
            <table class="text-xs">
                <thead>
                    <tr class="bg-gray-100 border-b">
                        <th class="table-item w-full">Shift Hour</th>
                        <th class="table-item text-nowrap">Short Day</th>
                        <th class="table-item">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <ShiftPatternItem v-for="(shiftPatternForm, index) in shiftPatternForms" :key="shiftPatternForm.id" :root="index" @add-shift-form="addShiftForm" @delete-shift-form="deleteShiftForm(index)" v-model:shift-hour-value="shiftPatternForm.form.shift_work_hour_id" v-model:short-day-value="shiftPatternForm.form.is_short_day"/>
                </tbody>
            </table>
            <p v-if="props.errorMessage" class="text-red-600 font-semibold">{{ props.errorMessage }}</p>
        </div>
    </div>
</template>
