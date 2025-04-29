

<aside class="fixed top-0 left-0 bottom-0 flex flex-col gap-2 w-16 bg-indigo-600 transition-all duration-300 hover:w-44 overflow-hidden">
    <div class="relative flex items-center gap-4 h-18 bg-black/25 p-4">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="h-6 rotate-180 ml-2">
        <h1 class="absolute left-10 text-sm whitespace-nowrap opacity-0 transition-opacity duration-200 sidebar:hover:opacity-100 font-normal text-white">Violet AI</h1>
    </div>
    <nav class="p-2 space-y-2">
        <x-molecules.molecules_Cybac class="relative flex items-center gap-4 h-11 rounded-md text-white/75 hover:bg-black/20 hover:text-white p-4"  text="Usuarios">
           
        </x-molecules.molecules_Cybac>

        <x-molecules.molecules_newOrden class="relative flex items-center gap-4 h-11 rounded-md text-white/75 hover:bg-black/20 hover:text-white p-4" text="Nueva Orden">
         
        </x-molecules.molecules_newOrden>

        <x-molecules.molecules_lookOrden class="relative flex items-center gap-4 h-11 rounded-md text-white/75 hover:bg-black/20 hover:text-white p-4"  text="Ver orden">
            
        </x-molecules.molecules_lookOrden>

        <x-molecules.molecules_listOrder class="relative flex items-center gap-4 h-11 rounded-md text-white/75 hover:bg-black/20 hover:text-white p-4"  text="Lista de ordenes">
         
        </x-molecules.molecules_listOrder>

        <x-molecules.molecules_closeOrder class="relative flex items-center gap-4 h-11 rounded-md text-white/75 hover:bg-black/20 hover:text-white p-4"  text="Ordenes cerradas">
        
        </x-molecules.molecules_closeOrder>

        <x-molecules.molecules_service class="relative flex items-center gap-4 h-11 rounded-md text-white/75 hover:bg-black/20 hover:text-white p-4" text="Servicio">
          
        </x-molecules.molecules_service>

        <x-molecules.molecules_technicalSupport class="relative flex items-center gap-4 h-11 rounded-md text-white/75 hover:bg-black/20 hover:text-white p-4" text="Soporte Tecnico">
        </x-molecules.molecules_technicalSupport>

        <x-molecules.molecules_user class="relative flex items-center gap-4 h-11 rounded-md text-white/75 hover:bg-black/20 hover:text-white p-4" text="k">
            
        </x-molecules.molecules_user>
    </nav>
</aside>

<style>
    .sidebar:hover p {
        opacity: 1;
        transition-delay: 0.2s; /* Añade un pequeño retraso para la animación */
    }
</style>