<form class="space-y-5 md:w-1/2" wire:submit.prevent='crearVacante'>
    <div>

        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input id="titulo" type="text" wire:model="titulo" :value="old('titulo')" class="block w-full mt-1" placeholder="Titulo Vacante" />

        @error('titulo')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
        <!-- <x-input-error :messages="$errors->get('titulo')" class="mt-2" /> -->
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select id="salario" wire:model="salario" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600">
            <option value="0">Seleccione </option>
            @foreach ($salarios as $salario)
            <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach

        </select>
        @error('salario')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <x-select wire:model="categoria" id="categoria">
            <option value="0">Seleccione </option>
            @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </x-select>
        @error('categoria')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" class="block w-full mt-1" type="text" wire:model="empresa" :value="old('empresa')" placeholder="Nombre de la empresa" />
        @error('empresa')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
        <x-input-label for="ultimo_dia" :value="__('Último dia para postularse')" />
        <x-text-input id="ultimo_dia" class="block w-full mt-1" type="date" wire:model="ultimo_dia" :value="old('ultimo_dia')" />
        @error('ultimo_dia')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
        <x-input-label for="descripcion" :value="__('Descripcion Puesto')" />
        <textarea wire:model="descripcion" id="descripcion" placeholder="Descripcion general del puesto, experiencia" cols="30" rows="10" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"></textarea>
        @error('descripcion')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input accept="image/*" id="imagen" class="block w-full mt-1" type="file" wire:model="imagen" />


        <div class="my-5 w-80">
            @if ($imagen)
            Imagen:
            <img src="{{$imagen->temporaryUrl()}}">

            @endif
        </div>


        @error('imagen')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <x-primary-button class="justify-center w-full ">
        {{ __('Crear Vacante') }}
    </x-primary-button>

</form>
