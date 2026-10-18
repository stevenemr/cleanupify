<script setup>
import { computed, ref } from "vue";
import { Link, usePage } from "@inertiajs/vue3";

const page = usePage();

const user = computed(() => page.props.auth.user);

const isDropdownOpen = ref(false);
</script>

<template>
    <!-- Navbar -->
    <header class="py-5">
        <div class="container flex justify-between items-center">
            <!-- TODO: Get a logo -->
            <a href="/">
                <div class="w-12 h-12 bg-light-gray rounded-full"></div>
            </a>

            <ul class="hidden md:flex gap-7 items-center">
                <li><Link href="/">Home</Link></li>
                <li><Link href="/about">About</Link></li>
            </ul>

            <div class="flex gap-3 items-center">
                <div v-if="user" class="relative">
                    <button
                        @click="isDropdownOpen = !isDropdownOpen"
                        class="flex items-center gap-3"
                        type="button"
                    >
                        <div class="text-right hidden sm:block">
                            <p class="text-[10px]">Welcome,</p>
                            <p>{{ user.display_name }}</p>
                        </div>

                        <img
                            :src="user.images[1].url"
                            class="rounded-full h-10 w-10"
                            :alt="user.display_name"
                        />
                    </button>

                    <div
                        v-if="isDropdownOpen"
                        class="absolute right-0 mt-2 min-w-48 rounded-md bg-dark-gray py-2 shadow-lg z-20 border border-white/10"
                    >
                        <Link
                            href="/app/home"
                            class="block px-4 py-2 text-sm text-white hover:bg-white/10"
                            @click="isDropdownOpen = false"
                        >
                            Dashboard
                        </Link>

                        <Link
                            href="/logout"
                            method="post"
                            as="button"
                            class="w-full text-left block px-4 py-2 text-sm text-red-400 hover:bg-white/10"
                            @click="isDropdownOpen = false"
                        >
                            Logout
                        </Link>
                    </div>
                </div>

                <div v-else>
                    <a class="btn btn-white" href="/login">Login</a>
                </div>

                <!-- TODO: Create mobile menu -->
                <button class="md:hidden">
                    <svg
                        width="30"
                        height="30"
                        viewBox="0 0 300 234"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M0 18.5C0 8.28273 8.28273 0 18.5 0H300V37H18.5C8.28273 37 0 28.7173 0 18.5V18.5Z"
                            fill="white"
                        />
                        <path
                            d="M75 117.5C75 107.283 83.2827 99 93.5 99H300V136H93.5C83.2827 136 75 127.717 75 117.5V117.5Z"
                            fill="white"
                        />
                        <path
                            d="M150 215.5C150 205.283 158.283 197 168.5 197H300V234H168.5C158.283 234 150 225.717 150 215.5V215.5Z"
                            fill="white"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <!-- / Navbar -->

    <!-- Content -->
    <slot />
    <!-- / Content -->

    <!-- Footer -->
    <footer class="container py-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 mb-10 items-center gap-10">
            <div>
                <div class="w-24 h-24 bg-light-gray rounded-full mb-5"></div>
                <p>
                    A website by
                    <a class="underline" href="https://stevenem.nl">stevenem</a>
                </p>
            </div>

            <img
                src="@/../images/stevenem.svg"
                class="opacity-5"
                alt="stevenem logo"
            />
        </div>
    </footer>
    <!-- / Footer -->
</template>
