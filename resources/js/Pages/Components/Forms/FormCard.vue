<script setup>
const props = defineProps({
    saveRoute: String,
    parameter: Number,
    method: String,
    form: Object
});

function submit(routeName, parameter, method, form) {
    switch(method) {
        case "POST":
            form.post(route(routeName, parameter), form);
            break;
        case "PUT":
            form.put(route(routeName, parameter), form);
            break;
        case "DELETE":
            form.delete(route(routeName, parameter), form);
            break;
    }
}
</script>

<template>
    <div class="flex justify-center">
        <div class="card w-1/2 px-12 pt-4">
            <form @submit.prevent="submit(props.saveRoute, props.parameter, props.method, props.form)">
                <slot/>
            </form>
        </div>
    </div>
</template>
