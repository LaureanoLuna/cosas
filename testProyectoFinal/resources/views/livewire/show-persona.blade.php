<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenidos') }}
        </h2>
    </x-slot>

    <div class='max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8'>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div id="mensaje" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                
            </div>
            <div class="px-6 py-3 flex justify-between al ">
                <x-input class="w-25" wire:model='filtro' type='text' />
                @livewire('crear-persona')
            </div>

            @if ($personas->count()>0)
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            <span class="cursor-pointer" wire:click="order('id')">
                                ID
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="cursor-pointer" wire:click="order('nombre')">
                                Nombre
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="cursor-pointer" wire:click="order('correo')">
                                Correo
                            </span>
                        </th>

                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona )
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$persona->id}}
                        </th>
                        <td class="px-6 py-4">
                            {{$persona->nombre}}
                        </td>
                        <td class="px-6 py-4">
                            {{$persona->correo}}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>

                    @endforeach


                </tbody>
            </table>
            @else
            <div class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 px-6 py-3 text-white">
                <h3>
                    No se encuentran registros
                </h3>
            </div>

            @endif
        </div>
    </div>
</div>

