<script setup>
import { Country, State, City }  from 'country-state-city';
import { useForm } from "@inertiajs/vue3";
import { watch, ref } from "vue";
import FormCard from "@/Pages/Components/Forms/FormCard.vue";
import PageTitle from "@/Pages/Components/PageTitle.vue";
import DropdownInputForm from "@/Pages/Components/Forms/DropdownInputForm.vue";
import TextInputForm from "@/Pages/Components/Forms/TextInputForm.vue";
import TextAreaInputForm from "@/Pages/Components/Forms/TextAreaInputForm.vue";
import RadioInputForm from "@/Pages/Components/Forms/RadioInputForm.vue";
import RadioItem from "@/Pages/Components/Forms/RadioItem.vue";
import FormButtons from "@/Pages/Components/Forms/FormButtons.vue";

const props = defineProps({
    errors: Object
});

const countries = Country.getAllCountries();
let states = ref(null);
let cities = ref(null);

const form = useForm({
    name: null,
    street: null,
    country: null,
    state: null,
    city: null,
    postal_code: null,
    phone: null,
    mobile: null,
    email: null,
    status: null,
    description: null,
});

watch(
    () => form.country,
    () => {
        form.state = null;
        states.value = State.getStatesOfCountry(form.country);
    }
);

watch(
    () => form.state,
    () => {
        form.city = null;
        cities.value = City.getCitiesOfState(form.country, form.state);
    }
);
</script>

<template>
    <FormCard save-route="supervisors.store" :form="form" method="POST">
        <PageTitle page-name="Create Supervisor" description="Create a new supervisor"/>
        <TextInputForm title="Name" name="name" :error-message="props.errors.name" v-model="form.name"/>
        <TextAreaInputForm title="Street" name="street" :error-message="props.errors.street" v-model="form.street"/>
        <DropdownInputForm title="Country" :error-message="props.errors.country" v-model="form.country">
            <option v-for="country in countries" :value="country.isoCode">{{ country.name }}</option>
        </DropdownInputForm>
        <DropdownInputForm title="State" :error-message="props.errors.state" v-model="form.state">
            <option v-for="state in states" :value="state.isoCode">{{ state.name }}</option>
        </DropdownInputForm>
        <DropdownInputForm title="City" :error-message="props.errors.city" v-model="form.city">
            <option v-for="city in cities" :value="city.name">{{ city.name }}</option>
        </DropdownInputForm>
        <TextInputForm title="Postal Code" name="postalCode" :error-message="props.errors['postal_code']" v-model.number="form['postal_code']"/>
        <TextInputForm title="Phone" name="phone" :error-message="props.errors.phone" v-model.number="form.phone"/>
        <TextInputForm title="Mobile" name="mobile" :error-message="props.errors.mobile" v-model.number="form.mobile"/>
        <TextInputForm title="Email" name="email" :error-message="props.errors.email" v-model="form.email"/>
        <RadioInputForm title="Status" name="status" :error-message="props.errors.status" v-model.number="form.status">
            <RadioItem label="Active" id="active" value="Active"/>
            <RadioItem label="Not Active" id="not_active" value="Not Active"/>
        </RadioInputForm>
        <TextAreaInputForm title="Description" name="description" :error-message="props.errors.description" v-model="form.description"/>
        <FormButtons cancel-route="supervisors.index"/>
    </FormCard>
</template>
