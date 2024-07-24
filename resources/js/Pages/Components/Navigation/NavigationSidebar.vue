<template>
    <div class="relative group">
        <slot name="parent"/>
        <div class="absolute left-full top-0 hidden group-hover:block z-50 bg-white border-2 border-b-0">
            <slot name="child"/>
        </div>
    </div>
</template>

<style scoped>

</style>
