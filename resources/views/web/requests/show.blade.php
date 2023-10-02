<x-app-layout>
 <div tabindex="-1" aria-hidden="true"
  class="m-0 overflow-y-auto overflow-x-hidden right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full">
  <!-- Modal content -->
  <div class="relative p-4 bg-white h-[calc(100vh-8rem)] rounded-lg shadow dark:bg-gray-800 sm:p-5 overflow-y-auto">
   <!-- Modal header -->
   <div class="flex justify-between mb-4 rounded-t sm:mb-5 w-full">
    <div class="flex justify-start items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600 w-full">
     <a href="{{ URL::previous() }}" type="button"
      class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 mr-2 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
      <i class="bi bi-chevron-left"></i>
      <span class="sr-only">Close modal</span>
     </a>
     <h3 class="font-semibold text-gray-900 dark:text-white">
      Solicitudes
     </h3>
    </div>
    <div>

    </div>
   </div>
   <dl>
        <x-web.dataTerm>Folio</x-web.dataTerm>
        <x-web.dataDescription>{{ $request->folio }}</x-web.dataDescription>

        <x-web.dataTerm>Nombre</x-web.dataTerm>
        <x-web.dataDescription>{{ $request->name }}</x-web.dataDescription>

        <x-web.dataTerm>Fecha</x-web.dataTerm>
        <x-web.dataDescription>{{ $request->date }}</x-web.dataDescription>

        <x-web.dataTerm>Remitente</x-web.dataTerm>
        <x-web.dataDescription>{{ $request->sender }}</x-web.dataDescription>

        <x-web.dataTerm>Asunto</x-web.dataTerm>
        <x-web.dataDescription>{{ $request->subject }}</x-web.dataDescription>

        <x-web.dataTerm>Departamento asignado</x-web.dataTerm>
        <x-web.dataDescription>{{ $request->area->name }}</x-web.dataDescription>
   </dl>
   <div class="flex justify-between items-center">
    <div class="flex items-center space-x-3 sm:space-x-4">
     
    </div>
   </div>
  </div>
 </div>
 </div>
</x-app-layout>
