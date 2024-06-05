<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";
import axios from "axios";

const recentDocuments = ref([]);
const recentBoards = ref([]);

onMounted(async () => {
    const response = await axios.get("documentos/recientes");
    //console.log(response.data);
    recentDocuments.value = response.data;
    //const responseboards = await axios.get("boards/recientes");
    //console.log(response.data);
    //recentBoards.value = responseboards.data;
    //console.log(recentDocuments.value);
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 text-xl">
                        <h1>
                            Bienvenido a Vesta
                            <b>{{ $page.props.auth.user.name }}</b> ¿En que vas
                            ha trabajar hoy?
                        </h1>
                    </div>
                        <div class="p-6">
                            <h3 class="mb-4">Aquí tienes los últimos documentos que recientemente has modificado:</h3>
                            <ul class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 text-center">
                                <li
                                    v-for="document in recentDocuments"
                                    :key="document.id"
                                    class="relative bg-gray-400 hover:bg-gray-500 rounded-md min-h-[7rem] flex items-center justify-center"
                                >
                                    <a
                                        class="p-3 text-lg font-bold text-white"
                                        :href="`/documentos/${document.id}/edit`"
                                    >
                                        {{ document.nombre }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
