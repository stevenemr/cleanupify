<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <main>
        <!-- Navbar -->
        <header class="py-5 bg-linear-to-b from-dark-gray to-transparent">
            <div class="container flex justify-between items-center">
                <Link class="text-4xl font-bebas-neue" href="/"
                    >Cleanupify</Link
                >

                <ul class="hidden md:flex gap-7 items-center">
                    <li><Link href="/">Home</Link></li>
                    <li><Link href="/about">About</Link></li>
                    <li>
                        <a class="btn btn-white" href="/login">Login</a>
                    </li>
                </ul>

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
        </header>
        <!-- / Navbar -->

        <!-- Content -->
        <slot />
        <!-- / Content -->

        <!-- Footer -->
        <footer class="py-5 bg-linear-to-t from-dark-gray to-transparent">
            <div class="container text-center">
                <p>
                    &copy;
                    <a href="https://stevenem.nl" target="_blank">stevenem</a>
                </p>
            </div>
        </footer>
        <!-- / Footer -->
    </main>
</template>
