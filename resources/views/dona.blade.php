<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="flex justify-center items-center h-screen">
    <div class="max-w-sm bg-white shadow-md rounded-md overflow-hidden">
        <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">¡Apoya nuestra Aplicación!</h2>
            <p class="text-sm text-gray-600 mb-4">Con tu donación, estás apoyando el desarrollo y mantenimiento de nuestra aplicación. ¡Gracias por tu generosidad!</p>
            <div class="flex justify-center"> <!-- Nuevo contenedor para centrar el botón -->
                <form action="/checkout" method="post">

                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md shadow-md">Dona</button>
                </form>
            </div>
        </div>
    </div>
</div>
