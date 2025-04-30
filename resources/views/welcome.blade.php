<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">

    <div class="flex justify-between items-center px-6 py-4">
        <div>
            <img src="{{ asset('storage/img/CYBAC.png') }}" class="w-50">
        </div>
        <div class="flex space-x-4">
            <button class="w-40 text-size bg-MostazaCybac transition delay-150 duration-150 ease-in-out hover:-translate-y-1 hover:scale-110 rounded-2xl text-black px-4 py-2 text-lg cursor-pointer">
                Inicia sesión
            </button>
            <button class="bg-AzulCybac w-40 text-size text-white rounded-2xl transition delay-150 duration-150 ease-in-out hover:-translate-y-1 hover:scale-110 px-4 py-2 cursor-pointer">
                Regístrate
            </button>
        </div>
    </div>

    
   
    <div class="flex px-6 py-6 items-center space-x-6 flex-grow">
        <div class="w-1/2">
            <img src="{{ asset('storage/img/bannerproyectos.jpg') }}" class="w-full rounded-2xl">
        </div>
        <div class="w-1/2">
            <h1 class="text-lg mb-4">
                Este apartado es exclusivo para nuestros trabajadores de CYBAC,
                de modo que solo el personal autorizado puede dar uso de esta plataforma.
                Si estás interesado en saber más de nosotros, te invitamos a que accedas a nuestro sitio.
            </h1>
            <a href="https://grupocybac.com/index.php" target="_blank">
                <button type="" class="bg-AzulCybac text-white rounded-2xl px-4 py-2 transition delay-150 duration-150 ease-in-out hover:-translate-y-1 hover:scale-110 cursor-pointer">
                    Nosotros
                </button>
            </a>
        </div>
    </div>

 
    <div class="mt-auto">
        <img src="{{ asset('storage/img/banner.jpg') }}" class="w-full">
    </div>
       
</body>
</html>
