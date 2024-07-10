<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    title: String,
    link: String,
    navState: Boolean
});
</script>

<template>
    <Link :href="route(props.link)">
        <div class="flex items-center px-4 py-4 border-b-2">
            <div class="size-6">
                <slot/>
            </div>
            <Transition>
                <div v-if="props.navState" class="overflow-hidden max-w-48">
                    <p class="ml-6 flex-grow text-nowrap">{{ props.title }}</p>
                </div>
            </Transition>
        </div>
    </Link>
</template>

<style scoped>
.v-enter-active,
.v-leave-active {
    transition: max-width 0.5s ease-in-out;
}

.v-enter-from,
.v-leave-to {
    max-width: 0;
}
</style>
