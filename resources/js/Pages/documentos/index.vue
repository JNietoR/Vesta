<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Listado de Documentos</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <!-- Botón para ir a la vista de creación de documentos -->
                        <Link :href="navigateToCreateDocumento()"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear Documento
                        </Link>

                        <!-- Lista de documentos -->
                        <div class="mt-4">
                            <h3 class="text-lg font-semibold mb-2">Mis Documentos</h3>
                            <table>
                                <!-- Itera sobre los documentos y muestra cada uno -->
                                <th>Título</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                                <tr v-for="documento in documentos" :key="documento.id">
                                    <td>{{ documento.nombre }}</td>
                                    <td><Link :href="`/documentos/${documento.id}/edit`" class="text-blue-500 hover:underline"><PencilSquareIcon class="w-5 h-5"/></Link></td>
                                    <td>
                                        <form @submit.prevent="submitForm(documento.id)">
                                            <button type="submit" class="text-red-500 hover:text-red-700">
                                                <TrashIcon class="w-5 h-5" />
                                            </button>
                                        </form>
                                    </td>
                                </tr>
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
</script>
