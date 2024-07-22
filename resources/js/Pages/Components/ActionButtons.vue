<script setup>
import { Link, router } from "@inertiajs/vue3";
import { ref } from "vue";
const props = defineProps({
    routeName: String,
    parameter: Number
});
const confirmWindow = ref(false)
</script>

<template>
    <Link :href="route(`${props.routeName}.edit`, props.parameter)"><button class="act-btn bg-green-500">Edit</button></Link>
    <Link :href="route(`${props.routeName}.show`, props.parameter)"><button class="act-btn bg-yellow-500">Show</button></Link>
    <button @click="confirmWindow = true" class="act-btn bg-red-500">Delete</button>
    <div class="relative z-50">
        <div v-if="confirmWindow" class="flex flex-col gap-4 mt-0 p-4 top-9 right-0 card absolute">
            <p class="text-nowrap">Deleted data will be removed permanently</p>
            <div class="flex w-full justify-end gap-4">
                <button @click="router.delete(route(`${props.routeName}.destroy`, props.parameter))" class="act-btn bg-red-500">Delete</button>
                <button @click="confirmWindow = false" class="secondary-btn">Cancel</button>
            </div>
        </div>
    </div>
</template>
