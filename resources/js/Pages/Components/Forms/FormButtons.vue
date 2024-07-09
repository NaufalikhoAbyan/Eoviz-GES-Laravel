<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    cancelRoute: String
})
</script>

<template>
    <div class="flex gap-4 justify-end py-8">
        <Link :href="route(props.cancelRoute)" tabindex="-1"><button class="secondary-btn">Cancel</button></Link>
        <button type="submit" class="primary-btn">Save</button>
    </div>
</template>
