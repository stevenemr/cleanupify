<script setup>
import Layout from "../Layout.vue";

defineProps({ user: Object, userPlaylists: Object });
</script>

<template>
    <Layout>
        <div class="container py-10">
            <h1 class="mb-3">Welcome, {{ user.display_name }}</h1>

            <p class="mb-5">
                In the list below are the playlists you have created.
            </p>

            <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-10"
            >
                <div
                    class="flex flex-col h-full shadow-md"
                    v-for="playlist in userPlaylists"
                    :key="playlist.id"
                >
                    <img
                        :src="playlist.images[0]?.url"
                        class="w-full aspect-square rounded-t-lg"
                        alt=""
                    />

                    <div
                        class="bg-glass text-white p-3 rounded-b-lg text-center flex h-full justify-center"
                    >
                        <p>{{ playlist.name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
