<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    link: String,
    src: String,
    title: String
});
</script>

<template>
    <div class="size-fit">
        <Link :href="route(props.link)">
            <div class="flex flex-col items-center gap-2 size-fit">
                <div class="card w-fit bg-gray-300 p-6 hover:scale-110">
                    <img :src="props.src" alt="" class="size-12"/>
                </div>
                <p class="text-xl font-semibold opacity-60">{{ props.title }}</p>
            </div>
        </Link>
    </div>
</template>
