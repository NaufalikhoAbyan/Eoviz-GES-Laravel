<script setup>
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    cancelRoute: String,
    saveRoute: String
})
</script>

<template>
    <div class="flex gap-4 justify-end py-8 border-b">
        <Link :href="route(props.cancelRoute)"><button class="secondary-btn">Cancel</button></Link>
        <Link :href="route(props.saveRoute)"><button class="primary-btn">Save</button></Link>
    </div>
</template>
