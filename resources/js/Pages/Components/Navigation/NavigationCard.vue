<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    link: String,
    src: String,
    title: String
});
</script>

<template>
    <div>
        <Link :href="route(props.link)">
            <div class="flex flex-col items-center gap-4">
                <div class="card size-24 bg-gray-300 p-6 hover:scale-110">
                    <img :src="props.src" alt="" class="size-full"/>
                </div>
                <p class="text-xl font-semibold opacity-60 text-center">{{ props.title }}</p>
            </div>
        </Link>
    </div>
</template>
