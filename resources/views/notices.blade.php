<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Message Board') }}
        </h2>
    </x-slot>
    
    <div class="mx-auto max-w-7xl overflow-x-auto relative mt-3 mb-1">
            <a href="{{ route('notices.create') }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Leave a Message</a>
            <!-- <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button> -->
    </div>

    <div class="max-w-7xl mx-auto overflow-x-auto relative shadow-md sm:rounded-lg">
        
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Important
                    </th>
                    @if(Auth::user()->hasRole('admin'))
                    <th scope="col" class="py-3 px-6">
                        Created By
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Pin
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                    @endif
                </tr>
            </thead>
            <tbody>
            @foreach($notices as $data)
            @if($data->pin)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $data->content }}
                    </th>
                    @if(Auth::user()->hasRole('admin'))
                    <td class="py-4 px-6">
                        {{ $data->create_by }}
                    </td>
                    <!-- click and pin! -->
                    <td class="flex items-center py-4 px-6 space-x-3">
                        <form action="{{ route('notices.update', $data->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <button class="font-medium text-blue-600 dark:text-blue-300 hover:underline">Unpin</button>
                        </form>
                    </td>
                    <td class="py-4 px-6 space-x-3">
                        <form action="{{ route('notices.destroy', $data->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="font-medium text-red-600 dark:text-red-300 hover:underline">Delete</button>
                        </form>
                    </td>
                    @endif
                </tr>
            @endif
            @endforeach
            </tbody>
        </table>
        
    </div>

    <div class="mt-7 max-w-7xl mx-auto overflow-x-auto relative shadow-md sm:rounded-lg">
        
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Note
                    </th>
                    @if(Auth::user()->hasRole('admin'))
                    <th scope="col" class="py-3 px-6">
                        Created By
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Pin
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($notices as $data)
                @if(!$data->pin)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $data->content }}
                    </th>
                    @if(Auth::user()->hasRole('admin'))
                    <td class="py-4 px-6">
                        {{ $data->create_by }}
                    </td>
                    <!-- click and pin! -->
                    <td class="flex items-center py-4 px-6 space-x-3">
                        <form action="{{ route('notices.update', $data->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <button class="font-medium text-blue-600 dark:text-blue-300 hover:underline">Pin</button>
                        </form>
                    </td>
                    <td class="py-4 px-6 space-x-3">
                        <form action="{{ route('notices.destroy', $data->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="font-medium text-red-600 dark:text-red-300 hover:underline">Delete</button>
                        </form>
                    </td>
                    @endif
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
        
    </div>
</x-app-layout>
