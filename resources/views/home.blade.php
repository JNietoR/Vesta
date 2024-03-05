<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vesta</title>

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body class="antialiased">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- div del editor quill y input oculto con su contenido para bbdd -->
    <div id="editor">
    </div>
    <input type="hidden" id="quill_html" name="name"></input>

    <!--Script para manejar el editor Quill y campo oculto para base de datos -->
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            var toolbarOptions = [
                [{
                    'size': ['small', false, 'large', 'huge']
                }],
                [{
                    'header': [1, 2, 3, 4, 5, 6, false]
                }],
                [{
                    'header': 1
                }, {
                    'header': 2
                }],
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                ['link'],
                [{
                    'indent': '-1'
                }, {
                    'indent': '+1'
                }],
                [{
                    'align': ['', 'center', 'right', 'justify']

                }],
                [{
                    'direction': 'rtl'
                }],
                [{
                    'list': 'ordered'
                }, {
                    'list': 'bullet'
                }],
                [{
                    'color': []
                }, {
                    'background': []
                }],
                [{
                    'font': []
                }],
                ['image', 'video'],

                ['clean']
            ];

            var quill = new Quill('#editor', {
                modules: {
                    syntax: false,
                    toolbar: toolbarOptions,
                },
                theme: 'snow'
            });

            window.quill = quill

            quill.on('text-change', function(delta, oldDelta, source) {
                document.getElementById("quill_html").value = quill.root.innerHTML;
            });

        });
    </script>

</body>

</html>
