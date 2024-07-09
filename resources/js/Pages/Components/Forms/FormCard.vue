<script setup>
import { useForm } from "@inertiajs/vue3";
const props = defineProps({
    saveRoute: String,
    form: useForm
})
</script>

<template>
    <div class="flex justify-center">
        <div class="card w-1/2 px-12 pt-4">
            <form @submit.prevent="form.post(route(saveRoute), form)">
                <slot/>
            </form>
        </div>
    </div>
</template>
