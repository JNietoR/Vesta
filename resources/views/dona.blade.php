<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="flex flex-col justify-center items-center h-screen bg-gray-900 text-white">
    <div class="mx-auto"> <!-- Añadí un margen inferior para separar los elementos -->
        <img src="assets/logo/LogoBlanco.svg" class="h-72 w-72 rounded-full" alt="Logo">
    </div>

    <div class="max-w-sm bg-white shadow-md rounded-md overflow-hidden text-center p-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-2">Support Our App!</h2>
        <p class="text-sm text-gray-600 mb-4">With your donation, you are supporting the development and maintenance of our application. Thank you for your generosity!</p>
        <form action="/checkout" method="post" class="flex justify-center">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button type="submit" class="bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-4 rounded-md shadow-md">Donate</button>
        </form>
    </div>
    <div class="text-center my-12">
        <p>If you want to meet our team, you can do so through our social media and contact us directly.</p>
    </div>
    <button class="bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-4 rounded-full shadow-md mb-12">
        <a href="/Nosotros" class="max-w-24">Meet us</a>
    </button>
</div>
