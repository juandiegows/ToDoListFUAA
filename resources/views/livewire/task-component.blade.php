<div>
    <x-slot name="header">
        <div class="flex gap-4 align-middle items-center">
            <a href="{{ route('dashboard') }}" class=" flex gap-2  px-4 py-2 align-middle items-center bg-blue-500 text-white rounded hover:bg-blue-600">
                <svg class="w-8 h-8" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill="#ffffff" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path>
                        <path fill="#ffffff" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path>
                    </g>
                </svg></a>

            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight items-center">
                {{ $listTask->name }}
            </h2>
        </div>

    </x-slot>

    <div class="flex">
        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="#ffffff" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M 42.6235 45.0027 L 43.9237 45.0027 C 48.4638 45.0027 50.7337 42.6887 50.7337 38.0826 L 50.7337 6.9201 C 50.7337 2.3141 48.4638 0 43.9237 0 L 22.6345 0 C 18.0945 0 15.8025 2.3141 15.8025 6.9201 L 15.8025 8.0000 L 18.6675 8.0000 C 21.7750 8.0000 24.2653 8.8815 26.7336 11.3499 L 39.2295 23.8898 C 41.7199 26.3802 42.6235 28.9366 42.6235 31.9339 Z M 27.9017 7.7796 C 26.9320 7.7796 26.4912 7.1405 26.4912 6.4794 L 26.4912 6.0165 C 26.4912 5.3333 26.9320 4.7162 27.9017 4.7162 L 38.6565 4.7162 C 39.6042 4.7162 40.0670 5.3333 40.0670 6.0165 L 40.0670 6.4794 C 40.0670 7.1405 39.6042 7.7796 38.6565 7.7796 Z M 11.5050 56 L 32.7943 56 C 37.3342 56 39.6262 53.6859 39.6262 49.0799 L 39.6262 31.3388 L 23.6703 31.3388 C 20.8273 31.3388 19.5050 29.9945 19.5050 27.1736 L 19.5050 10.9972 L 11.5050 10.9972 C 6.9651 10.9972 4.6731 13.3113 4.6731 17.9174 L 4.6731 49.0799 C 4.6731 53.7080 6.9651 56 11.5050 56 Z M 23.6483 28.3195 L 38.4582 28.3195 C 38.2378 27.4600 37.6427 26.6666 36.6510 25.6529 L 25.1910 13.9945 C 24.2213 13.0028 23.3617 12.4077 22.5243 12.1653 L 22.5243 27.1956 C 22.5243 27.9449 22.8989 28.3195 23.6483 28.3195 Z"></path>
                </g>
            </svg>
        </span>
        <input type="text" wire:model="data.name" wire:keydown.enter="save" class="rounded-none  bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese el nombre de la tarea">
        <span class="inline-flex items-center hover:cursor-pointer box-border px-3 text-sm text-gray-900 bg-gray-200 hover:bg-gray-300 border rounded-s-0 border-gray-300 border-s-0  dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600" wire:click="save">

            <svg class="w-8 h-8 hover:scale-75 text-gray-500 dark:text-gray-400" fill="#39990f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" xml:space="preserve" stroke="#39990f">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <g>
                        <g>
                            <path d="M42.6,71c-1.2,0-2.4-0.5-3.3-1.4L20.6,50.9c-0.8-0.8-0.8-2,0-2.8l3.7-3.7c0.8-0.8,2-0.8,2.8,0l15.5,15.4 l30.3-30.3c0.8-0.8,2-0.8,2.8,0l3.7,3.7c0.8,0.8,0.8,2,0,2.8L45.8,69.6C44.9,70.5,43.8,71,42.6,71z"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </span>
    </div>
    <x-input-error for="data.name" />

    <h2 class="text-white text-2xl mt-4">Tareas</h2>


    <div>
        {{ $tasks->links() }}
    </div>

    <div class="mt-4">
        @foreach ($tasks as $key => $listTask)
        @php
        $idName = $listTask['id'] . '-' . str_replace(' ', '-', $listTask['name']);
        @endphp
        @if (isset($dataDelete['id']) && $dataDelete['id'] ==$listTask->id )
        <div class="flex mt-2">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="#ffffff" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M 42.6235 45.0027 L 43.9237 45.0027 C 48.4638 45.0027 50.7337 42.6887 50.7337 38.0826 L 50.7337 6.9201 C 50.7337 2.3141 48.4638 0 43.9237 0 L 22.6345 0 C 18.0945 0 15.8025 2.3141 15.8025 6.9201 L 15.8025 8.0000 L 18.6675 8.0000 C 21.7750 8.0000 24.2653 8.8815 26.7336 11.3499 L 39.2295 23.8898 C 41.7199 26.3802 42.6235 28.9366 42.6235 31.9339 Z M 27.9017 7.7796 C 26.9320 7.7796 26.4912 7.1405 26.4912 6.4794 L 26.4912 6.0165 C 26.4912 5.3333 26.9320 4.7162 27.9017 4.7162 L 38.6565 4.7162 C 39.6042 4.7162 40.0670 5.3333 40.0670 6.0165 L 40.0670 6.4794 C 40.0670 7.1405 39.6042 7.7796 38.6565 7.7796 Z M 11.5050 56 L 32.7943 56 C 37.3342 56 39.6262 53.6859 39.6262 49.0799 L 39.6262 31.3388 L 23.6703 31.3388 C 20.8273 31.3388 19.5050 29.9945 19.5050 27.1736 L 19.5050 10.9972 L 11.5050 10.9972 C 6.9651 10.9972 4.6731 13.3113 4.6731 17.9174 L 4.6731 49.0799 C 4.6731 53.7080 6.9651 56 11.5050 56 Z M 23.6483 28.3195 L 38.4582 28.3195 C 38.2378 27.4600 37.6427 26.6666 36.6510 25.6529 L 25.1910 13.9945 C 24.2213 13.0028 23.3617 12.4077 22.5243 12.1653 L 22.5243 27.1956 C 22.5243 27.9449 22.8989 28.3195 23.6483 28.3195 Z"></path>
                    </g>
                </svg>
            </span>
            <label class="rounded-none  bg-red-600 border text-white focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white font-extrabold dark:focus:ring-blue-500 dark:focus:border-blue-500">¿Deseas eliminar esta lista -> {{ $dataDelete['name'] }}?</label>

            <span class="inline-flex items-center hover:cursor-pointer box-border px-3 text-sm text-gray-900 bg-gray-200 hover:bg-gray-300 border rounded-s-0 border-gray-300 border-s-0  dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600" wire:click="cancelDelete" title="Cancelar eliminacion">

                <svg class="w-4 h-4 hover:scale-75 text-gray-500 dark:text-gray-400" fill="#ff0505" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 460.775 460.775" xml:space="preserve" stroke="#ff0505">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55 c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55 c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505 c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55 l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719 c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z"></path>
                    </g>
                </svg>
            </span>

            <span class="inline-flex items-center hover:cursor-pointer box-border px-3 text-sm text-gray-900 bg-gray-200 hover:bg-gray-300 border rounded-s-0 border-gray-300 border-s-0  dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600" wire:click="destroy">

                <svg class="w-8 h-8 hover:scale-75 text-gray-500 dark:text-gray-400" fill="#39990f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" xml:space="preserve" stroke="#39990f">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <g>
                                <path d="M42.6,71c-1.2,0-2.4-0.5-3.3-1.4L20.6,50.9c-0.8-0.8-0.8-2,0-2.8l3.7-3.7c0.8-0.8,2-0.8,2.8,0l15.5,15.4 l30.3-30.3c0.8-0.8,2-0.8,2.8,0l3.7,3.7c0.8,0.8,0.8,2,0,2.8L45.8,69.6C44.9,70.5,43.8,71,42.6,71z"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </span>
        </div>

        @else
        <div class="flex mt-2">

            @if ($listTask->is_complete)
            <div class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <label class="relative flex cursor-pointer items-center rounded-full p-3" for="checkbox-2" data-ripple-dark="true">
                    <input checked type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-red-500 checked:bg-red-500 checked:before:bg-red-500 hover:before:opacity-10" wire:change="toggleCompletion({{ $listTask['id'] }})" />
                    <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-white opacity-0 transition-opacity peer-checked:opacity-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </label>
            </div>
            @else
            <div class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <label class="relative flex cursor-pointer items-center rounded-full p-3" for="checkbox-2" data-ripple-dark="true">
                    <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-red-500 checked:bg-red-500 checked:before:bg-red-500 hover:before:opacity-10" wire:change="toggleCompletion({{ $listTask['id'] }})"  />
                    <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-white opacity-0 transition-opacity peer-checked:opacity-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </label>
            </div>
            @endif

            @if (isset($dataUpdate['id']) && $dataUpdate['id'] ==$listTask->id )
            <input type="text" wire:model="dataUpdate.name" id="{{ $key }}" wire:keydown.enter="save" class="rounded-none  bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese el nombre de la lista">
            @else
            <input type="text" id="nuevo_{{ $key }}" value="{{ $listTask->name }}" readonly class="rounded-none {{  $listTask->is_complete ? ' line-through ': ''}}  bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese el nombre de la lista">
            @endif

            @if (isset($dataUpdate['id']) )
            @if ($dataUpdate['id'] ==$listTask->id )
            <span class="inline-flex items-center hover:cursor-pointer box-border px-3 text-sm text-gray-900 bg-gray-200 hover:bg-gray-300 border rounded-s-0 border-gray-300 border-s-0  dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600" wire:click="cancelEdit">

                <svg class="w-4 h-4 hover:scale-75 text-gray-500 dark:text-gray-400" fill="#ff0505" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 460.775 460.775" xml:space="preserve" stroke="#ff0505">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55 c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55 c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505 c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55 l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719 c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z"></path>
                    </g>
                </svg>
            </span>

            <span class="inline-flex items-center hover:cursor-pointer box-border px-3 text-sm text-gray-900 bg-gray-200 hover:bg-gray-300 border rounded-s-0 border-gray-300 border-s-0  dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600" wire:click="save">

                <svg class="w-8 h-8 hover:scale-75 text-gray-500 dark:text-gray-400" fill="#39990f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" xml:space="preserve" stroke="#39990f">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <g>
                                <path d="M42.6,71c-1.2,0-2.4-0.5-3.3-1.4L20.6,50.9c-0.8-0.8-0.8-2,0-2.8l3.7-3.7c0.8-0.8,2-0.8,2.8,0l15.5,15.4 l30.3-30.3c0.8-0.8,2-0.8,2.8,0l3.7,3.7c0.8,0.8,0.8,2,0,2.8L45.8,69.6C44.9,70.5,43.8,71,42.6,71z"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </span>
            @endif
            @else
            <span title="Clic para editar" wire:click="setEdit({{ $listTask }})" class="inline-flex items-center hover:cursor-pointer box-border px-3 text-sm text-gray-900 bg-gray-200 hover:bg-gray-300 border rounded-s-0 border-gray-300 border-s-0  dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <svg class="w-6 h-6 hover:scale-75 text-gray-500 dark:text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ededed">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="m3.99 16.854-1.314 3.504a.75.75 0 0 0 .966.965l3.503-1.314a3 3 0 0 0 1.068-.687L18.36 9.175s-.354-1.061-1.414-2.122c-1.06-1.06-2.122-1.414-2.122-1.414L4.677 15.786a3 3 0 0 0-.687 1.068zm12.249-12.63 1.383-1.383c.248-.248.579-.406.925-.348.487.08 1.232.322 1.934 1.025.703.703.945 1.447 1.025 1.934.058.346-.1.677-.348.925L19.774 7.76s-.353-1.06-1.414-2.12c-1.06-1.062-2.121-1.415-2.121-1.415z" fill="#ffffff"></path>
                    </g>
                </svg>
            </span>

            <span title="clic para eliminar la lista" class="inline-flex items-center hover:cursor-pointer box-border px-3 text-sm text-gray-900 bg-gray-200 hover:bg-gray-300 border rounded-s-0 border-gray-300 border-s-0  dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600" wire:click="setDelete({{ $listTask }})">
                <svg class="w-6 h-6 hover:scale-75 text-gray-500 dark:text-gray-400" fill="#d30303" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 456.686 456.686" xml:space="preserve" stroke="#d30303">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <g>
                                <path d="M363.541,120.847H93.16c-8.005,0-15.623,3.367-21.04,9.263c-5.389,5.896-8.052,13.798-7.363,21.761l24.767,278.836 c1.303,14.71,13.619,25.98,28.39,25.98h220.874c14.772,0,27.073-11.271,28.391-25.98L391.93,151.87 c0.705-7.963-1.975-15.864-7.363-21.761C379.165,124.214,371.547,120.847,363.541,120.847z M155.896,382.248 c-0.48,0.029-0.929,0.045-1.378,0.045c-9.308,0-17.18-7.169-17.884-16.597l-9.651-127.207 c-0.749-9.876,6.644-18.496,16.537-19.244c9.921-0.778,18.512,6.643,19.26,16.536l9.638,127.206 C173.181,372.879,165.773,381.499,155.896,382.248z M246.003,372.535c0,9.922-8.038,17.944-17.944,17.944 c-9.922,0-17.959-8.022-17.959-17.944V205.012c0-9.922,8.036-17.944,17.959-17.944c9.906,0,17.944,8.022,17.944,17.944V372.535z M320.052,365.696c-0.705,9.428-8.576,16.597-17.884,16.597c-0.449,0-0.898-0.016-1.378-0.045 c-9.877-0.749-17.285-9.369-16.521-19.261l9.638-127.206c0.749-9.894,9.398-17.346,19.262-16.536 c9.892,0.748,17.284,9.368,16.536,19.244L320.052,365.696z"></path>
                            </g>
                            <g>
                                <path d="M370.589,22.344h-52.887C314.889,9.578,303.544,0,289.912,0h-123.15c-13.619,0-24.964,9.578-27.791,22.344H86.097 c-16.941,0-30.649,13.723-30.649,30.648c0,16.927,13.708,30.649,30.649,30.649h284.493c16.941,0,30.649-13.723,30.649-30.649 C401.239,36.066,387.531,22.344,370.589,22.344z"></path>
                            </g>
                        </g>
                    </g>
                </svg>

            </span>

            @endif

        </div>
        @endif

        <x-input-error for="dataUpdate.name" />
        @endforeach
    </div>

    <div class="mt-2">
        {{ $tasks->links() }}
    </div>
</div>
