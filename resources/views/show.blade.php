<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Tickets #{{ $ticket->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form class="mx-auto max-w-7xl p-6" method="POST" action="{{ url('/tickets/'.$ticket->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="py-2">
                        <label for="summary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Summary</label>
                        <input type="text" name="summary" value="{{ $ticket->summary }}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="py-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                        <textarea name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">{{ $ticket->description }}</textarea>
                    </div>
                    <div class="py-2">     
                        <label class="inline-flex relative items-center cursor-pointer">
                            @if($ticket->status == 'Pending')
                            <input id="toggle" name="status" type="checkbox" value="Toggle" class="sr-only peer" checked>
                            @else
                            <input id="toggle" name="status" type="checkbox" value="Toggle" class="sr-only peer">
                            @endif
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span id="toggleText" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Open</span>
                        </label>
                    </div>
                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Process</button>
                </form>
            </div>
        </div>
    </div>
    

</x-app-layout>