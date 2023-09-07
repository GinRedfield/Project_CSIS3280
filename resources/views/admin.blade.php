<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manage Users') }}
        </h2>
    </x-slot>

    <div class="my-12 max-w-7xl mx-auto overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        User ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        User Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Revoke Access
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $data)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $data->id }}
                    </th>
                    <td class="py-4 px-6">
                        {{ $data->name }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $data->email }}
                    </td>
                    <td class="py-4 px-6">
                        <form action="{{ route('users.destroy', $data->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="font-medium text-red-600 dark:text-red-300 hover:underline">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>