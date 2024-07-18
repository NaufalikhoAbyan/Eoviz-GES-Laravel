<script setup>
import { inject } from "vue";

const props = defineProps({
    root: Number
})

const shiftWorkHours = inject('shiftWorkHours')

const shiftHourValue = defineModel('shiftHourValue')
const shortDayValue = defineModel('shortDayValue')

defineEmits([
    'addShiftForm',
    'deleteShiftForm',
])
</script>

<template>
    <tr>
        <th>
            <select class="w-full ml-2 p-2 border border-gray-400 rounded-md focus:outline-blue-500" v-model="shiftHourValue">
                <option :value="null" disabled>-- Select --</option>
                <option v-for="shiftWorkHour in shiftWorkHours" :key="shiftWorkHour.id" :value="shiftWorkHour.id">{{ `${shiftWorkHour.name} (${shiftWorkHour.start} - ${shiftWorkHour.end})` }}</option>
            </select>
        </th>
        <th>
            <input type="checkbox" v-model="shortDayValue">
        </th>
        <th>
            <button v-if="props.root" class="primary-btn text-nowrap m-2" @click.prevent="$emit('deleteShiftForm')">Delete</button>
            <button v-else class="primary-btn text-nowrap m-2" @click.prevent="$emit('addShiftForm')">Add +</button>
        </th>
    </tr>
</template>
