<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Possit" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Possit</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, numquam! Officiis vel voluptatum rerum vero, atque sunt iusto commodi. Deserunt maiores id perspiciatis itaque non velit temporibus totam illum ducimus?</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
