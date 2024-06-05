<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Calendar" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Calendario</h2>
        </template>
<img src="assets/working.gif" alt="" class="mb-4 rounded-full w-96 h-96 object-cover mx-auto mt-24">
<div class="py-18 flex flex-col items-center justify-center m-auto text-center">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 m-auto flex flex-col items-center justify-center">
        <img src="assets/work.webp" alt="" class="mb-4">
        <h1 class="mb-10 text-xl">Esta será la primera de muchas mejoras que planeamos implementar en nuestra aplicación a corto plazo. Siempre puedes apoyarnos para acelerar nuestro progreso y tener un impacto en su desarrollo.</h1>
        <a href="/dona"
           class="dark:bg-gray-300 text-gray botonparallax p-3 w-36 flex items-center justify-center rounded-full button-hover">
           Dona
        </a>
    </div>
</div>
    </AuthenticatedLayout>
</template>
