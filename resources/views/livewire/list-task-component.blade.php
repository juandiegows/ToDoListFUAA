<div>
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
        <input type="text" wire:model="data.name" wire:keydown.enter="save" class="rounded-none  bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese el nombre de la lista">
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

    <h2 class="text-white text-2xl mt-4">Listas</h2>

    <div>
        {{ $listTasks->links() }}
    </div>

    <div class="mt-4">
        @foreach ($listTasks as $key => $listTask)
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
            <input type="text" value="{{ $listTask->name }}" readonly class="rounded-none  bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese el nombre de la lista">

            <span title="Clic para editar" class="inline-flex items-center hover:cursor-pointer box-border px-3 text-sm text-gray-900 bg-gray-200 hover:bg-gray-300 border rounded-s-0 border-gray-300 border-s-0  dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <svg class="w-6 h-6 hover:scale-75 text-gray-500 dark:text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ededed">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="m3.99 16.854-1.314 3.504a.75.75 0 0 0 .966.965l3.503-1.314a3 3 0 0 0 1.068-.687L18.36 9.175s-.354-1.061-1.414-2.122c-1.06-1.06-2.122-1.414-2.122-1.414L4.677 15.786a3 3 0 0 0-.687 1.068zm12.249-12.63 1.383-1.383c.248-.248.579-.406.925-.348.487.08 1.232.322 1.934 1.025.703.703.945 1.447 1.025 1.934.058.346-.1.677-.348.925L19.774 7.76s-.353-1.06-1.414-2.12c-1.06-1.062-2.121-1.415-2.121-1.415z" fill="#ffffff"></path>
                    </g>
                </svg>
            </span>

            <span title="clic para eliminar la lista" class="inline-flex items-center hover:cursor-pointer box-border px-3 text-sm text-gray-900 bg-gray-200 hover:bg-gray-300 border rounded-s-0 border-gray-300 border-s-0  dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
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

            <span title="Ver las tareas de la lista" class="inline-flex items-center hover:cursor-pointer box-border px-3 text-sm text-gray-900 bg-gray-200 hover:bg-gray-300 border rounded-s-0 border-gray-300 border-s-0  dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <svg class="w-8 h-8  text-gray-500 dark:text-gray-400" fill="#ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 92 92" enable-background="new 0 0 92 92" xml:space="preserve" stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path id="XMLID_512_" d="M82.8,48.8l-24.9,25c-0.8,0.8-1.8,1.2-2.8,1.2c-1,0-2-0.4-2.8-1.2c-1.6-1.6-1.6-4.1,0-5.7L70.4,50H12 c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4h58.4L52.2,23.8c-1.6-1.6-1.6-4.1,0-5.7c1.6-1.6,4.1-1.6,5.7,0l24.9,25 C84.4,44.7,84.4,47.3,82.8,48.8z"></path>
                    </g>
                </svg>

            </span>
        </div>
        @endforeach
    </div>

    <div class="mt-2">
        {{ $listTasks->links() }}
    </div>
</div>
