<script setup>
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";
import FormButtons from "@/Pages/Components/Forms/FormButtons.vue";
import FormCard from "@/Pages/Components/Forms/FormCard.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import TextAreaInputForm from "@/Pages/Components/Forms/TextAreaInputForm.vue";
import RadioInputForm from "@/Pages/Components/Forms/RadioInputForm.vue";
import RadioItem from "@/Pages/Components/Forms/RadioItem.vue";
</script>

<template>
    <FormCard>
        <PageTitle page-name="Create Employee Type" description="Create a new employee type"/>
        <TextInputForm title="Name" name="name"/>
        <RadioInputForm title="Is Permanent" name="is_permanent">
            <RadioItem label="Yes" id="yes"/>
            <RadioItem label="No" id="no"/>
        </RadioInputForm>
        <TextInputForm title="Order" name="order"/>
        <RadioInputForm title="Status" name="status">
            <RadioItem label="Active" id="active"/>
            <RadioItem label="Not Active" id="not_active"/>
        </RadioInputForm>
        <TextAreaInputForm title="Description" name="description"/>
        <FormButtons cancel-route="employee-types.index" save-route="employee-types.index"/>
    </FormCard>
</template>
