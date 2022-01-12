<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Posts App</title>
    
    
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
  </head>
  <body class="bg-gray-200 text-gray-850">

    <nav class="h-8 flex justify-end py-4 px-16">
        <a href="{{ route('posts.index') }}" class="border border-blue-600 rounded px-4 pt-1 h-10 bg-white text-blue-600 font-semibold
        mx-2">Listado</a>

        <a href="{{ route('posts.create') }}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 font-semibold mx-2 hover:bg-blue-600">Crear</a>

        <a href="{{ route('contactanos.index') }}" class="text-white rounded px-4 pt-1 h-10 bg-green-500 font-semibold mx-2 hover:bg-green-600">Contacto</a>

    </nav>

    <main class="p-16 flex justify-center">

        @yield('content')

    </main>
    



  </body>
</html>