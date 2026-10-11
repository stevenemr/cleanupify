<script setup>
defineProps({ user: Object, userPlaylists: Object });
</script>

<template>
    <div class="container">
        <h1 class="text-4xl mb-3">Welcome, {{ user.display_name }}</h1>

        <p class="mb-5">
            In the list below are the playlists you have created.
        </p>

        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-10"
        >
            <div v-for="playlist in userPlaylists" :key="playlist.id">
                <img
                    :src="playlist.images[0]?.url"
                    class="w-full aspect-square rounded-lg"
                    alt=""
                />

                <p>{{ playlist.name }}</p>
            </div>
        </div>
    </div>
</template>
