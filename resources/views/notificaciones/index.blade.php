<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="my-10 text-2xl font-bold text-center"> Mis notificaciones</h1>
                    <div class="divide-y divide-gray-200">
                        @forelse ($notificaciones as $notificacion)

                        <div class="p-5 lg:flex lg:justify-between lg:items-center">
                            <div>
                                <p>Tienes un nuevo candidato en:
                                    <span class="font-bold">{{ $notificacion->data['nombre_vacante'] }}</span>
                                </p>
                                <p>
                                    <span class="font-bold">{{ $notificacion->created_at->diffForHumans() }}</span>
                                </p>
                            </div>
                            <div class="mt-5 lg:mt-0">
                                <a class="bg-indigo-500 p-3 text-sm uppercase font-bold text-white rounded-lg" href="{{ route('candidatos.index',$notificacion->data['id_vacante']) }}">Ver candidatos</a>
                            </div>
                        </div>
                        @empty
                        <p class="text-center text-gray-600">
                            No hay notificaciones nuevas
                        </p>
                        @endforelse
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
