
 
<aside class="fixed top-0 left-0 bottom-0 flex flex-col gap-2 w-16 bg-AzulSidebar transition-all duration-300 hover:w-44 overflow-hidden">
    <div class="relative flex items-center  h-18  p-4">
        <img src="{{ asset ('storage/img/cybacRecord.png') }}" alt="Logo" class="h-7  ">

        <p class="absolute left-17 text-2xl whitespace-nowrap opacity-75 transition-opacity duration-200 sidebar:hover:opacity-100 text-black ">CYBAC</p>
    </div>
    <nav class="p-2 space-y-2 ">
    
        <x-molecules.molecules_newOrden class="relative flex items-center gap-4 h-11 rounded-md text-black/75 hover:bg-black/20 hover:text-black cursor-pointer " text="Nueva Orden">
         
        </x-molecules.molecules_newOrden>

        <x-molecules.molecules_lookOrden class="relative flex items-center gap-4 h-11 rounded-md text-black/75 hover:bg-black/20 hover:text-black  cursor-pointer "  text="Ver orden">
            
        </x-molecules.molecules_lookOrden>

        <x-molecules.molecules_listOrder class="relative flex items-center gap-4 h-11 rounded-md text-black/75 hover:bg-black/20 hover:text-black  cursor-pointer"  text="Lista de ordenes">
         
        </x-molecules.molecules_listOrder>

        <x-molecules.molecules_closeOrder class="relative flex items-center gap-4 h-11 rounded-md text-black/75 hover:bg-black/20 hover:text-black cursor-pointer"  text="Ordenes cerradas">
        
        </x-molecules.molecules_closeOrder>

        <x-molecules.molecules_service class="relative flex items-center gap-4 h-11 rounded-md text-black/75 hover:bg-black/20 hover:text-black cursor-pointer" text="Servicio">
          
        </x-molecules.molecules_service>

        <x-molecules.molecules_technicalSupport class="relative flex items-center gap-4 h-11 rounded-md text-black/75 hover:bg-black/20 hover:text-black  cursor-pointer" text="Soporte Tecnico">
            
        </x-molecules.molecules_technicalSupport>

        <x-molecules.molecules_user class="relative flex items-center gap-4 h-11 rounded-md text-black/75 hover:bg-black/20 hover:text-black p-4 cursor-pointer" text="k">
            
        </x-molecules.molecules_user>
    </nav>
</aside>

<style>
    .sidebar:hover p {
        opacity: 1;
        transition-delay: 0.2s; /* Añade un pequeño retraso para la animación */
    }
</style>