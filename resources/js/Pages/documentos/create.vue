<template>
    <AuthenticatedLayout>

        <Head title="Crear Documento" />

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <form @submit.prevent="submitForm">
                    <div>
                        <label for="nombre" class="block font-medium text-sm text-gray-700">Nombre del Documento</label>
                        <input type="text" name="nombre" id="nombre" v-model="form.nombre" required
                            class="mt-1 p-2 block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                        <InputError :message="form.errors.nombre" />
                    </div>

                    <!-- Campo oculto para almacenar el contenido de Quill -->
                    <input type="hidden" name="contenido" v-model="form.contenido">
                    <input type="hidden" name="user_id" v-model="form.userId">

                    <div class="mt-4">
                        <label for="contenido" class="block font-medium text-sm text-gray-700">Contenido del
                            Documento</label>
                        <div id="editor" class="min-h-96"></div>
                    </div>

                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Guardar
                        Documento</button>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import Quill from 'quill';

const form = useForm({
    nombre: '',
    contenido: '', // Este campo se actualizará automáticamente desde Quill
});

let quillEditor;

onMounted(() => {
    const toolbarOptions = [
        [{ 'size': ['small', false, 'large', 'huge'] }],
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
        [{ 'header': 1 }, { 'header': 2 }],
        ['bold', 'italic', 'underline', 'strike'],
        ['blockquote', 'code-block'],
        ['link'],
        [{ 'indent': '-1' }, { 'indent': '+1' }],
        [{ 'align': ['', 'center', 'right', 'justify'] }],
        [{ 'direction': 'rtl' }],
        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
        [{ 'color': [] }, { 'background': [] }],
        [{ 'font': [] }],
        ['image', 'video'],
        ['clean']
    ];

    quillEditor = new Quill('#editor', {
        modules: {
            toolbar: toolbarOptions,
        },
        theme: 'snow'
    });

    quillEditor.on('text-change', function (delta, oldDelta, source) {
        // Obtener el HTML del contenido de Quill
        const quillHtml = quillEditor.root.innerHTML;

        // Asignar el HTML al campo contenido en el formulario
        form.contenido = quillHtml;
    });
});

const submitForm = () => {
    //console.log('Contenido del formulario:', form.contenido);
    form.post(route('StoreDocumento'), {
        onSuccess: () => {
            console.log('Documento creado exitosamente');
            // Aquí puedes hacer algo después de que se cree el documento, como redirigir a otra página
        },
    });
};
</script>

<style>
@import url('https://cdn.quilljs.com/1.3.6/quill.snow.css');
</style>