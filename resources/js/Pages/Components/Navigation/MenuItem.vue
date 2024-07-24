<script setup>
import { ref } from 'vue';
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    title: String,
    link: String,
    src: String,
    navState: Boolean,
    parent: Boolean,
    children: {
        type: Array,
        default: () => [],
    }
});

const isHovered = ref(false);
</script>

<template>
    <div class="relative hover:bg-gray-300" @mouseover="isHovered = true" @mouseleave="isHovered = false">
        <Link :href="route(props.link)">
            <div class="flex items-center px-4 py-4 border-b-2">
                <div class="size-6">
                    <img :src="props.src" alt="" class="w-full">
                </div>
                <Transition>
                    <div v-if="props.parent ? props.navState : true" class="overflow-hidden max-w-96">
                        <p class="ml-6 flex-grow text-nowrap">{{ props.title }}</p>
                    </div>
                </Transition>
            </div>
        </Link>
        <div v-if="isHovered && props.children.length" class="absolute left-full top-0 z-50 bg-white border-2 border-b-0">
            <MenuItem v-for="(child, index) in props.children" :key="index" :title="child.title" :link="child.link" :navState="props.navState" :src="child.src" :children="child.children || []"/>
        </div>
    </div>
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
