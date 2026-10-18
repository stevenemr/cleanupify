<script setup>
import ButtonBorder from "../components/buttons/ButtonBorder.vue";
import ButtonFilled from "../components/buttons/ButtonFilled.vue";
import Layout from "../Layout.vue";
</script>

<template>
    <Layout>
        <!-- Hero -->
        <section class="container py-20">
            <div class="flex flex-col gap-5 text-center mb-10">
                <h1>
                    Clean up your Spotify<br />
                    playlists with Cleanupify
                </h1>

                <p class="mx-auto max-w-xl">
                    Do you want to clean up your Spotify playlists with ease?
                    Use this free to use and open source program!
                </p>

                <div class="flex flex-wrap gap-3 justify-center">
                    <ButtonFilled type="link" href="/login">Login</ButtonFilled>
                    <ButtonBorder>Learn more</ButtonBorder>
                </div>
            </div>

            <img
                src="https://placehold.co/1920x1080?text=Image+Of+Program"
                class="rounded-xl w-full max-w-150 mx-auto"
                alt="Image of the Cleanupify program"
            />
        </section>
        <!-- / Hero -->

        <!-- What is Cleanupify -->
        <section class="my-10 bg-dark-gray">
            <div
                class="relative lg:py-10 container grid grid-cols-1 lg:grid-cols-2"
            >
                <div class="py-10 lg:py-0">
                    <h2 class="mb-3">What is Cleanupify?</h2>

                    <p class="mb-3">
                        Cleanupify is an application written in Laravel to clean
                        up your own playlists on Spotify. In a Tinder-like
                        style, you can organize your whole playlist with ease.
                        For each song in your playlist, you will hear a preview
                        of the song and keep or remove it from your playlist.
                    </p>

                    <p class="mb-3">
                        Cleanupify is an application written in Laravel to clean
                        up your own playlists on Spotify. In a Tinder-like
                        style, you can organize your whole playlist with ease.
                        For each song in your playlist, you will hear a preview
                        of the song and keep or remove it from your playlist.
                    </p>

                    <ButtonFilled type="link" href="/login">Login</ButtonFilled>
                </div>

                <div class="lg:absolute lg:bottom-0 lg:right-0">
                    <img
                        src="@/../images/phone-mockup.png"
                        class="float-end"
                        alt="Phone with the application open"
                    />
                </div>
            </div>
        </section>
        <!-- / What is Cleanupify -->

        <!-- Contact -->
        <section
            class="container grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 my-20"
        >
            <img
                src="https://placehold.co/1920x1080"
                class="rounded-xl"
                alt="placeholder contact image"
            />

            <div class="flex flex-col gap-3">
                <h2>Contact</h2>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Vero modi tempore eligendi ut enim sequi veniam accusamus,
                    praesentium iure nemo. Minus repudiandae doloremque placeat
                    inventore ipsum quidem incidunt nihil neque?
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quam enim voluptatum inventore voluptates consequuntur quas
                    officiis vel corrupti dignissimos harum neque tempora
                    aperiam id nulla ad dolorum, ipsum dolorem assumenda.
                </p>
            </div>
        </section>
        <!-- / Contact -->
    </Layout>
</template>
