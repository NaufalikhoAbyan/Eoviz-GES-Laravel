<script setup>
import { useForm } from '@inertiajs/vue3';
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";
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
    order: null,
    status: null,
    is_follow_holiday: null,
    description: null
});
</script>

<template>
    <FormCard save-route="shift-groups.store" :form="form" method="POST">
        <PageTitle page-name="Create Shift Group" description="Create a new shift group"/>
        <TextInputForm title="Code" name="code" :error-message="props.errors.name" v-model="form.name"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.hour" v-model="form.hour"/>
        <div class="flex items-center py-8 border-b">
        <p class="w-1/3">Pattern</p>
        <div class="flex flex-col flex-grow gap-2">
            <table class="table-auto">
                <thead>
                    <tr class="bg-gray-100 border-b">
                        <th class="table-item">Shift Hour</th>
                        <th class="table-item">Short Day</th>
                        <th class="table-item">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="table-item flex justify-center">
                            <select class="h-10 px-2 border border-gray-400 rounded-md focus:outline-blue-500">
                             <option :value="null" disabled>-- Select --</option>
                            </select>
                        </td>
                        <td class="table-item">
                            <input type="checkbox" name="" id="" class="size-4 w-full">
                            <label></label>
                        </td>
                        <td class="table-item flex justify-center">
                            <button class="primary-btn">Add +</button>
                        </td>
                    </tr>
                </tbody>
             </table>
            </div>
        </div>
        <TextInputForm title="Order" name="order" :error-message="props.errors.holiday" v-model="form.holiday"/>
        <RadioInputForm title="Status" name="status" :error-message="props.errors.status" v-model="form.status">
            <RadioItem label="Active" id="active"/>
            <RadioItem label="Not Active" id="not_active"/>
        </RadioInputForm>
        <RadioInputForm title="Is Follow Holiday" name="status" :error-message="props.errors.status" v-model="form.status">
            <RadioItem label="Yes" id="active"/>
            <RadioItem label="No" id="not_active"/>
        </RadioInputForm>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model="form.description"/>
        <FormButtons cancel-route="shift-groups.index"/>
    </FormCard>
</template>
