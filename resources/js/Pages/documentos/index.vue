<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Listado de Documentos</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        <!-- Lista de documentos -->
                        <div class="mt-4">
                            <div class="flex justify-end items-center my-4">
                                <Link :href="navigateToCreateDocumento()"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                +
                                </Link>
                            </div>

                            <table class="text-left border border-gray-200 divide-y divide-gray-200">
                                <!-- Encabezados de la tabla -->
                                <thead>
                                    <tr>
                                        <th class="py-3 px-6 text-left" style="width: 40%">Título</th>
                                        <th class="py-3 px-6 text-left" style="width: 20%">F. Creación</th>
                                        <th class="py-3 px-6 text-left" style="width: 20%">F. Actualización</th>
                                        <th class="py-3 px-6 text-center" style="width: 10%">Favorito</th>
                                        <th class="py-3 px-6 text-center" style="width: 10%">Editar</th>
                                        <th class="py-3 px-6 text-center" style="width: 10%">Eliminar</th>
                                    </tr>
                                </thead>
                                <!-- Cuerpo de la tabla -->
                                <tbody>
                                    <!-- Iterar sobre los documentos -->
                                    <tr v-for="(documento, index) in documentos" :key="documento.id"
                                        :class="index % 2 === 0 ? 'bg-gray-100' : ''">
                                        <td class="py-4 px-6">{{ documento.nombre }}</td>
                                        <td class="py-4 px-6">{{ formatDate(documento.created_at) }}</td>
                                        <td class="py-4 px-6">{{ formatDate(documento.updated_at) }}</td>
                                        <td class="py-4 px-6 text-center">
                                            <button @click="toggleFavorito(documento.id, documento.favorito)">

                                                <svg v-if="documento.favorito === 1" class="w-6 h-6 text-yellow-500 hover:text-yellow-700"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg v-else class="w-6 h-6 text-gray-400 hover:text-gray-700"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                        clip-rule="evenodd" />
                                                </svg>

                                            </button>
                                        </td>
                                        <td class="py-4 px-6 flex justify-center">
                                            <Link :href="`/documentos/${documento.id}/edit`"
                                                class="text-blue-500 hover:underline hover:text-blue-700">
                                            <PencilSquareIcon class="w-5 h-5" />
                                            </Link>
                                        </td>
                                        <td class="py-4 px-6 text-center">
                                            <form @submit.prevent="submitForm(documento.id)">
                                                <button type="submit" class="text-red-500 hover:text-red-700">
                                                    <TrashIcon class="w-5 h-5" />
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';
import { TrashIcon, PencilSquareIcon } from '@heroicons/vue/24/solid';

const form = useForm({});
const props = defineProps({
    documentos: { type: Object }
});

const navigateToCreateDocumento = () => {
    return '/documentos/create';
}

// Función para formatear la fecha en "día mes año"
// Función para formatear la fecha en "día/mes/año"
const formatDate = (dateString) => {
    const date = new Date(dateString);
    const day = date.getDate().toString().padStart(2, '0');
    const month = (date.getMonth() + 1).toString().padStart(2, '0');
    const year = date.getFullYear();
    return `${day}/${month}/${year}`;
};

// Función para enviar el formulario para eliminar el documento
const submitForm = (documentoId) => {
    if (confirm('¿Estás seguro de que deseas eliminar este documento?')) {
        form.delete(`/documentos/${documentoId}`, {
            onSuccess: () => {
                console.log('Documento eliminado exitosamente');
                // Redirigir a la página de documentos o realizar otra acción deseada
            },
        });
    }
};
// Función para cambiar el estado de favorito del documento
const toggleFavorito = (documentoId, favorito) => {
    // Envía una solicitud PUT al servidor para actualizar el estado de favorito del documento
    form.put(`/documentos/${documentoId}/toggle-favorito`, {
        favorito: favorito,
    });
};
</script>
