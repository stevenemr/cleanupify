<script setup>
defineProps({
    type: String,
    href: String | null,
});

const buttonClass =
    "inline-block px-7 py-2 rounded-full border border-dark-gray";
</script>

<template>
    <a :href="href" :class="buttonClass" v-if="type == 'link'">
        <slot />
    </a>

    <button :class="buttonClass" v-else>
        <slot />
    </button>
</template>
