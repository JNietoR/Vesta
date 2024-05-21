<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>



    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <Link href="/">
                <ApplicationLogo class="w-72 h-72 fill-current text-gray-900" />
            </Link>
        </div>

        <div
            class="w-full  sm:max-w-md mt-6 px-6 py-7 bg-white shadow-md overflow-hidden sm:rounded-lg contenedor-margen">
            <slot />
        </div>
    </div>
</template>


