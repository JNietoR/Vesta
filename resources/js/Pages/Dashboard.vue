<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";
import axios from "axios";
import { DocumentIcon, ViewColumnsIcon } from '@heroicons/vue/24/solid';

const recentDocuments = ref([]);
const recentBoards = ref([]);
const greeting = ref('');

onMounted(async () => {
    const response = await axios.get("documentos/recientes");
    //console.log(response.data);
    recentDocuments.value = response.data;
    const responseBoards = await axios.get("boards/recientes");
    recentBoards.value = responseBoards.data;
    const currentHour = new Date().getHours();
    if (currentHour < 12) {
        greeting.value = 'Good Morning';
    } else if (currentHour < 18) {
        greeting.value = 'Good Afternon';
    } else {
        greeting.value = 'Good Night';
    }
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
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-16 text-center">
                <div class="overflow-hidden sm:rounded-lg">
                    <div class="p-6 text-gray-900 text-xl">
                        <h1 class="text-3xl">
                            {{ greeting }},
                            <b>{{ $page.props.auth.user.name }}</b>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-16">
                <h3 class="flex mb-4 text-xl">
                    <DocumentIcon class="size-6 text-gray-500 mr-2 " /> Latest Documents:
                </h3>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">

                        <ul
                            class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 text-center"
                        >
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
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-16">
                <h3 class="flex mb-4 text-xl">
                    <ViewColumnsIcon class="size-6 text-gray-500 mr-2" /> Latest Boards:
                </h3>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">

                        <ul
                            class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 text-center"
                        >
                            <li
                                v-for="board in recentBoards"
                                :key="board.id"
                                class="relative bg-gray-400 hover:bg-gray-500 rounded-md min-h-[7rem] flex items-center justify-center"
                            >
                                <a
                                    class="p-3 text-lg font-bold text-white"
                                    :href="`/boards/${board.id}`"
                                >
                                    {{ board.name }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
