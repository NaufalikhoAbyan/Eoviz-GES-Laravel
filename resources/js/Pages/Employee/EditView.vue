<script setup>
import { ref, watch } from "vue";
import { useForm } from "@inertiajs/vue3";
import Nationalities from "@dropdowns/nationalities";
import FormCard from "@/Pages/Components/Forms/FormCard.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";
import DateInputForm from "@/Pages/Components/Forms/DateInputForm.vue";
import DropdownInputForm from "@/Pages/Components/Forms/DropdownInputForm.vue";
import FormButtons from "@/Pages/Components/Forms/FormButtons.vue";
import FormSubTitle from "@/Pages/Components/Forms/FormSubTitle.vue";
import RadioInputForm from "@/Pages/Components/Forms/RadioInputForm.vue";
import RadioItem from "@/Pages/Components/Forms/RadioItem.vue";

const props = defineProps({
    employee: Object,
    bloodTypes: Object,
    religions: Object,
    workHours: Object,
    employeeTypes: Object,
    employeeStatuses: Object,
    structuralPositions: Object,
    functionalPositions: Object,
    gradeTypes: Object,
    maritalStatuses: Object,
    maritalCodeTaxes: Object,
    shiftGroups: Object,
    shiftWorkHours: Object,
    supervisors: Object,
    errors: Object
});

const form = useForm({
    fullname: props.employee.fullname,
    personal_id: props.employee.personal_id,
    presence_number: props.employee.presence_number,
    place_of_birth: props.employee.place_of_birth,
    date_of_birth: props.employee.date_of_birth,
    gender: props.employee.gender,
    blood_type_id: props.employee.blood_type_id,
    religion_id: props.employee.religion_id,
    nationality: props.employee.nationality,
    join_date: props.employee.join_date,
    work_hour_id: props.employee.work_hour_id,
    employee_type_id: props.employee.employee_type_id,
    effective_type_start_date: props.employee.effective_type_start_date,
    effective_type_end_date: props.employee.effective_type_end_date,
    employee_status_id: props.employee.employee_status_id,
    effective_status_start_date: props.employee.effective_status_start_date,
    effective_status_end_date: props.employee.effective_status_end_date,
    structural_position_type_id: props.employee.structural_position_type_id,
    effective_structural_pos_start_date: props.employee.effective_structural_pos_start_date,
    effective_structural_pos_end_date: props.employee.effective_structural_pos_end_date,
    functional_position_type_id: props.employee.functional_position_type_id,
    effective_functional_pos_start_date: props.employee.effective_functional_pos_start_date,
    effective_functional_pos_end_date: props.employee.effective_functional_pos_end_date,
    grade_type_id: props.employee.grade_type_id,
    effective_grade_start_date: props.employee.effective_grade_start_date,
    effective_grade_end_date: props.employee.effective_grade_end_date,
    marital_status_id: props.employee.marital_status_id,
    marital_code_id: props.employee.marital_code_id,
    marital_code_tax_id: props.employee.marital_code_tax_id,
    effective_marital_start_date: props.employee.effective_marital_start_date,
    effective_marital_end_date: props.employee.effective_marital_end_date,
    shift_group_id: props.employee.shift_group_id,
    shift_work_hour_id: props.employee.shift_work_hour_id,
    effective_group_shift_start_date: props.employee.effective_group_shift_start_date,
    effective_group_shift_end_date: props.employee.effective_group_shift_end_date,
    supervisor_id: props.employee.supervisor_id,
    effective_supervisor_start_date: props.employee.effective_supervisor_start_date,
    effective_supervisor_end_date: props.employee.effective_supervisor_end_date
});

const isEmployementTab = ref(false);

const nationalities = Nationalities.getAllNationalities();

const maritalStatuses = props.maritalStatuses;
const maritalCodes = ref();

for (let i = 0; i < maritalStatuses.length; i++) {
    if (maritalStatuses[i].id === form.marital_status_id) {
        maritalCodes.value = maritalStatuses[i]['marital_codes'];
    }
}

watch(
    () => form.marital_status_id,
    () => {
        form.marital_code_id = null;
        for (let i = 0; i < maritalStatuses.length; i++) {
            if (maritalStatuses[i].id === form.marital_status_id) {
                maritalCodes.value = maritalStatuses[i]['marital_codes'];
            }
        }
    }
);

const shiftGroups = props.shiftGroups;
const shiftWorkHour = props.shiftWorkHours;
const shiftWorkPattern = ref([]);
const selectedShiftWorkHour = ref([]);

for (let i = 0; i < shiftGroups.length; i++) {
    for (let l = 0; l < shiftGroups[i]['shift_hour_patterns'].length; l++) {
        if (shiftGroups[i]['shift_hour_patterns'][l]['shift_work_hour_id'] === form.shift_group_id) {
            shiftWorkPattern.value.push(shiftGroups[i]['shift_hour_patterns'][l]);
        }
    }
}
for (let i = 0; i < shiftWorkHour.length; i++) {
    for (let l = 0; l < shiftWorkPattern.value.length; l++) {
        if (shiftWorkPattern.value[l]['shift_work_hour_id'] === shiftWorkHour[i].id) {
            selectedShiftWorkHour.value.push(shiftWorkHour[i]);
        }
    }
}

watch(
    () => form.shift_group_id,
    () => {
        form.shift_work_hour_id = null;
        shiftWorkPattern.value = [];
        selectedShiftWorkHour.value = [];
        for (let i = 0; i < shiftGroups.length; i++) {
            for (let l = 0; l < shiftGroups[i]['shift_hour_patterns'].length; l++) {
                if (shiftGroups[i]['shift_hour_patterns'][l]['shift_work_hour_id'] === form.shift_group_id) {
                    shiftWorkPattern.value.push(shiftGroups[i]['shift_hour_patterns'][l]);
                }
            }
        }
        for (let i = 0; i < shiftWorkHour.length; i++) {
            for (let l = 0; l < shiftWorkPattern.value.length; l++) {
                if (shiftWorkPattern.value[l]['shift_work_hour_id'] === shiftWorkHour[i].id) {
                    selectedShiftWorkHour.value.push(shiftWorkHour[i]);
                }
            }
        }
    }
);
</script>

<template>
    <FormCard save-route="employees.update" :parameter="props.employee.id" :form="form" method="PUT">
        <PageTitle page-name="Edit Employee" description="Edit an Employee data"/>
        <div class="flex text-xl mt-8">
            <div @click="isEmployementTab = false" class="flex flex-col items-center gap-2 w-1/2 cursor-pointer text-center opacity-75">
                <p>Personal Data</p>
                <Transition name="tab">
                    <div v-if="!isEmployementTab" class="w-36 h-2 bg-blue-500 rounded-lg"></div>
                </Transition>
            </div>
            <div @click="isEmployementTab = true" class="flex flex-col items-center gap-2 w-1/2 cursor-pointer text-center opacity-75">
                <p>Employment</p>
                <Transition name="tab">
                    <div v-if="isEmployementTab" class="w-36 h-2 bg-blue-500 rounded-lg"></div>
                </Transition>
            </div>
        </div>

        <Transition>
            <div v-if="!isEmployementTab">
                <TextInputForm title="Fullname" name="fullname" :error-message="props.errors.fullname" v-model="form.fullname"/>
                <TextInputForm title="Personal ID" name="personalId" :error-message="props.errors.personal_id" v-model.number="form.personal_id"/>
                <TextInputForm title="Presence Number" name="presenceNumber" :error-message="props.errors.presence_number" v-model.number="form.presence_number"/>
                <TextInputForm title="Place of Birth" name="placeOfBirth" :error-message="props.errors.place_of_birth" v-model="form.place_of_birth"/>
                <RadioInputForm title="Gender" name="gender" :error-message="props.errors.gender" v-model="form.gender">
                    <RadioItem label="Male" id="male"/>
                    <RadioItem label="Female" id="female"/>
                </RadioInputForm>
                <DateInputForm title="Date of Birth" name="dateOfBirth" :error-message="props.errors.date_of_birth" v-model="form.date_of_birth"/>
                <DropdownInputForm title="Blood Type" name="bloodType" :error-message="props.errors.blood_type_id" v-model="form.blood_type_id">
                    <option v-for="bloodType in props.bloodTypes" :key="bloodType.id" :value="bloodType.id">{{ bloodType.name }}</option>
                </DropdownInputForm>
                <DropdownInputForm title="Religion" name="religion" :error-message="props.errors.religion_id" v-model="form.religion_id">
                    <option v-for="religion in props.religions" :key="religion.id" :value="religion.id">{{ religion.name }}</option>
                </DropdownInputForm>
                <DropdownInputForm title="Nationality" name="nationality" :error-message="props.errors.nationality" v-model="form.nationality">
                    <option v-for="(nationality, index) in nationalities" :key="index" :value="nationality.name">{{ nationality.name }}</option>
                </DropdownInputForm>
            </div>
        </Transition>

        <Transition>
            <div v-if="isEmployementTab">
                <DateInputForm title="Join Date" name="joinDate" :error-message="props.errors.join_date" v-model="form.join_date"/>
                <DropdownInputForm title="Work Hour Type" name="workHourType" :error-message="props.errors.work_hour_id" v-model="form.work_hour_id">
                    <option v-for="workHour in props.workHours" :key="workHour.id" :value="workHour.id">{{ workHour.name }}</option>
                </DropdownInputForm>
                <FormSubTitle title="Employee Type"/>
                <DropdownInputForm title="Employee Type" name="employeeType" :error-message="props.errors.employee_type_id" v-model="form.employee_type_id">
                    <option v-for="employeeType in props.employeeTypes" :key="employeeType.id" :value="employeeType.id">{{ employeeType.name }}</option>
                </DropdownInputForm>
                <DateInputForm title="Effective Date (Start)" name="effectiveTypeStartDate" :error-message="props.errors.effective_type_start_date" v-model="form.effective_type_start_date"/>
                <DateInputForm title="Effective Date (End)" name="effectiveTypeEndDate" :error-message="props.errors.effective_type_end_date" v-model="form.effective_type_end_date"/>
                <FormSubTitle title="Employee Status"/>
                <DropdownInputForm title="Employee Status" name="employeeStatus" :error-message="props.errors.employee_status_id" v-model="form.employee_status_id">
                    <option v-for="employeeStatus in props.employeeStatuses" :key="employeeStatus.id" :value="employeeStatus.id">{{ employeeStatus.name }}</option>
                </DropdownInputForm>
                <DateInputForm title="Effective Date (Start)" name="effectiveStatusStartDate" :error-message="props.errors.effective_status_start_date" v-model="form.effective_status_start_date"/>
                <DateInputForm title="Effective Date (End)" name="effectiveStatusEndDate" :error-message="props.errors.effective_status_end_date" v-model="form.effective_status_end_date"/>
                <FormSubTitle title="Employee Structural Position"/>
                <DropdownInputForm title="Structural Position" name="structuralPosition" :error-message="props.errors.structural_position_type_id" v-model="form.structural_position_type_id">
                    <option v-for="structuralPosition in props.structuralPositions" :key="structuralPosition.id" :value="structuralPosition.id">{{ structuralPosition.name }}</option>
                </DropdownInputForm>
                <DateInputForm title="Effective Date (Start)" name="effectiveStructuralPosStartDate" :error-message="props.errors.effective_structural_pos_start_date" v-model="form.effective_structural_pos_start_date"/>
                <DateInputForm title="Effective Date (End)" name="effectiveStructuralPosEndDate" :error-message="props.errors.effective_structural_pos_end_date" v-model="form.effective_structural_pos_end_date"/>
                <FormSubTitle title="Employee Functional Position"/>
                <DropdownInputForm title="Functional Position" name="functionalPosition" :error-message="props.errors.functional_position_type_id" v-model="form.functional_position_type_id">
                    <option v-for="functionalPosition in props.functionalPositions" :key="functionalPosition.id" :value="functionalPosition.id">{{ functionalPosition.name }}</option>
                </DropdownInputForm>
                <DateInputForm title="Effective Date (Start)" name="effectiveFunctionalPosStartDate" :error-message="props.errors.effective_functional_pos_start_date" v-model="form.effective_functional_pos_start_date"/>
                <DateInputForm title="Effective Date (End)" name="effectiveFunctionalPosEndDate" :error-message="props.errors.effective_functional_pos_end_date" v-model="form.effective_functional_pos_end_date"/>
                <FormSubTitle title="Employee Grade Type"/>
                <DropdownInputForm title="Grade Type" name="gradeType" :error-message="props.errors.grade_type_id" v-model="form.grade_type_id">
                    <option v-for="gradeType in props.gradeTypes" :key="gradeType.id" :value="gradeType.id">{{ gradeType.name }}</option>
                </DropdownInputForm>
                <DateInputForm title="Effective Date (Start)" name="effectivegGradeStartDate" :error-message="props.errors.effective_grade_start_date" v-model="form.effective_grade_start_date"/>
                <DateInputForm title="Effective Date (End)" name="effectivegGradeEndDate" :error-message="props.errors.effective_grade_end_date" v-model="form.effective_grade_end_date"/>
                <FormSubTitle title="Employee Marital Status"/>
                <DropdownInputForm title="Marital Status" name="maritalStatus" :error-message="props.errors.marital_status_id" v-model="form.marital_status_id">
                    <option v-for="maritalStatus in props.maritalStatuses" :key="maritalStatus.id" :value="maritalStatus.id">{{ maritalStatus.name }}</option>
                </DropdownInputForm>
                <DropdownInputForm title="Marital Code" name="maritalCode" :error-message="props.errors.marital_code_id" v-model="form.marital_code_id">
                    <option v-for="maritalCode in maritalCodes" :key="maritalCode.id" :value="maritalCode.id">{{ maritalCode.name }}</option>
                </DropdownInputForm>
                <DropdownInputForm title="Marital Code Tax" name="maritalCodeTax" :error-message="props.errors.marital_code_tax_id" v-model="form.marital_code_tax_id">
                    <option v-for="maritalCodeTax in props.maritalCodeTaxes" :key="maritalCodeTax.id" :value="maritalCodeTax.id">{{ maritalCodeTax.name }}</option>
                </DropdownInputForm>
                <DateInputForm title="Effective Date (Start)" name="effectivegMartialStatusStartDate" :error-message="props.errors.effective_marital_start_date" v-model="form.effective_marital_start_date"/>
                <DateInputForm title="Effective Date (End)" name="effectivegMartialStatusEndDate" :error-message="props.errors.effective_marital_end_date" v-model="form.effective_marital_end_date"/>
                <FormSubTitle title="Employee Group Shift"/>
                <DropdownInputForm title="Group Shift" name="groupShift" :error-message="props.errors.shift_group_id" v-model="form.shift_group_id">
                    <option v-for="shiftGroup in props.shiftGroups" :key="shiftGroup.id" :value="shiftGroup.id">{{ shiftGroup.name }}</option>
                </DropdownInputForm>
                <DropdownInputForm title="Work Hour Shift Start" name="workHourShiftStart" :error-message="props.errors.shift_work_hour_id" v-model="form.shift_work_hour_id">
                    <option v-for="shiftWorkHour in selectedShiftWorkHour" :key="shiftWorkHour.id" :value="shiftWorkHour.id">{{ shiftWorkHour.name }}</option>
                </DropdownInputForm>
                <DateInputForm title="Effective Date (Start)" name="effectivegGroupShiftStartDate" :error-message="props.errors.effective_group_shift_start_date" v-model="form.effective_group_shift_start_date"/>
                <DateInputForm title="Effective Date (End)" name="effectivegGroupShiftEndDate" :error-message="props.errors.effective_group_shift_end_date" v-model="form.effective_group_shift_end_date"/>
                <FormSubTitle title="Supervision"/>
                <DropdownInputForm title="Supervisor" name="supervisor" :error-message="props.errors.supervisor_id" v-model="form.supervisor_id">
                    <option v-for="supervisor in props.supervisors" :key="supervisor.id" :value="supervisor.id">{{ supervisor.name }}</option>
                </DropdownInputForm>
                <DateInputForm title="Effective Date (Start)" name="effectiveSupervisorStartDate" :error-message="props.errors.effective_supervisor_start_date" v-model="form.effective_supervisor_start_date"/>
                <DateInputForm title="Effective Date (End)" name="effectiveSupervisorEndDate" :error-message="props.errors.effective_supervisor_end_date" v-model="form.effective_supervisor_end_date"/>
            </div>
        </Transition>

        <FormButtons cancel-route="employees.index"/>
    </FormCard>
</template>

<style scoped>
.tab-enter-active,
.tab-leave-active {
    transition: width 0.2s ease;
}

.tab-enter-from,
.tab-leave-to {
    width: 0;
}

.v-enter-active,
.v-leave-active {
    transition: opacity 0.2s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}
</style>
