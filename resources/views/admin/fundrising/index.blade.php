<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="flex justify-end">
            <a href="{{ route('admin.fundrising.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Add Fundrising</a>
        </div>
        <!-- Fundrising List Table -->
        <div class="mt-4">
            <div class="w-full overflow-hidden rounded-lg shadow">
                <div class="w-full overflow-x-auto">
                <table class="table-fixed w-full">
                    <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="w-2/8 px-4 py-3">Title</th>
                        <th class="w-1/6 px-4 py-3">Action</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($fundrisings as $id => $title)
                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            {{ $title }}
                        </td>
                        <td class="px-4 py-3 text-xs">
                            <a href="#" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded">Edit</a>
                            <a href="{{ route('admin.fundrising.destroy', $id)}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</a>
                        </td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>
                </div>
                <div class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <!-- Pagination -->
                {{-- {{ $users->links() }} --}}
                </div>
            </div>
        </div>
        <!-- ./Fundrising List Table -->
    </div>
</x-app-layout>