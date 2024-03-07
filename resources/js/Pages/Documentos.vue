<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import Quill from 'quill';

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

    const quill = new Quill('#editor', {
        modules: {
            syntax: false,
            toolbar: toolbarOptions,
        },
        theme: 'snow'
    });

    window.quill = quill;

    quill.on('text-change', function(delta, oldDelta, source) {
        document.getElementById("quill_html").value = quill.root.innerHTML;
    });
});
</script>

<template>
    <Head title="Documentos" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Documentos</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- Quill Editor -->
                    <div id="editor"></div>
                    <input type="hidden" id="quill_html" name="name" v-model="quillHtml"></input>
                    <!-- End Quill Editor -->
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style>
@import url('https://cdn.quilljs.com/1.3.6/quill.snow.css');
</style>

