<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <!-- Left side - Dashboard Title -->
            <h2 class="font-semibold text-xl text-gray-800">
                {{ __('API Gateway Dashboard') }}
            </h2>

            <!-- Right side - Navigation Buttons -->
            <div class="flex space-x-4">
                <a href="{{ route('dashboard') }}" class="px-4 bg-gray-100 text-gray-800 font-semibold py-2 rounded transition">
                    {{ __("Keys") }}
                </a>
                <button class="px-4 hover:bg-gray-100 text-gray-800 font-semibold py-2 rounded transition"
                    {{ __("Documentations") }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-col items-center gap-4">

                <!-- API Keys Header with Generate Button -->
                <div class="flex flex-row w-full md:w-4/5 m-1 p-6 text-gray-900 items-center justify-between bg-white rounded-lg">
                    <div class="flex flex-col py-2">
                        <h1 class="text-gray-800 font-bold text-xl">
                            {{ __("Your API Keys") }}
                        </h1>
                    </div>
                    <div class="flex space-x-4">
                        <button onclick="showCreateKeyModal()" class="px-4 hover:bg-blue-400 bg-blue-300 text-gray-800 font-semibold py-2 rounded transition">
                            {{ __("Generate A New Key") }}
                        </button>
                    </div>
                </div>

                <!-- Success Message -->
                @if (session('success'))
                <div class="w-full md:w-4/5 m-1 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('success') }}
                </div>
                @endif

                <!-- API Keys Table -->
                <div class="w-full md:w-4/5 m-1 bg-white rounded-lg shadow">
                    @if(isset($apiKeys) && count($apiKeys) > 0)
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Name') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Key') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Created') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Last Used') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Status') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Actions') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($apiKeys as $key)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">{{ $key->name ?? 'Unnamed Key' }}</div>
                                    <div class="text-sm text-gray-500">{{ Str::limit($key->description, 30) }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="text-sm text-gray-900">{{ substr($key->key, 0, 8) }}•••••••</span>
                                        <button onclick="copyToClipboard('{{ $key->key }}')" class="ml-2 text-gray-400 hover:text-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $key->created_at->format('M d, Y') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $key->last_used_at ? $key->last_used_at->format('M d, Y H:i') : 'Never' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $key->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                        {{ $key->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button onclick="showEditKeyModal('{{ $key->id }}', '{{ $key->name }}', '{{ $key->description }}', {{ $key->is_active ? 'true' : 'false' }})" class="text-indigo-600 hover:text-indigo-900 mr-3">
                                        Edit
                                    </button>
                                    <button onclick="confirmDeleteKey('{{ $key->id }}')" class="text-red-600 hover:text-red-900">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="p-6 text-center text-gray-500">
                        <p>{{ __('You don\'t have any API keys yet. Generate one to get started.') }}</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Create Key Modal -->
    <div id="createKeyModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-medium">{{ __('Generate New API Key') }}</h3>
                <button onclick="hideCreateKeyModal()" class="text-gray-400 hover:text-gray-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form action="{{ route('api-keys.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Key Name') }}</label>
                    <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="My API Key">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">{{ __('Description') }}</label>
                    <textarea name="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="What this key will be used for"></textarea>
                </div>
                <div class="mb-4">
                    <label for="expires_at" class="block text-sm font-medium text-gray-700">{{ __('Expiration (Optional)') }}</label>
                    <input type="date" name="expires_at" id="expires_at" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="hideCreateKeyModal()" class="mr-2 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Cancel') }}
                    </button>
                    <button type="submit" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Generate Key') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Key Modal -->
    <div id="editKeyModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-medium">{{ __('Edit API Key') }}</h3>
                <button onclick="hideEditKeyModal()" class="text-gray-400 hover:text-gray-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form id="editKeyForm" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="edit_name" class="block text-sm font-medium text-gray-700">{{ __('Key Name') }}</label>
                    <input type="text" name="name" id="edit_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="edit_description" class="block text-sm font-medium text-gray-700">{{ __('Description') }}</label>
                    <textarea name="description" id="edit_description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                </div>
                <div class="mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" name="is_active" id="edit_is_active" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Active') }}</span>
                    </label>
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="hideEditKeyModal()" class="mr-2 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Cancel') }}
                    </button>
                    <button type="submit" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Save Changes') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteConfirmModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
            <div class="mb-4">
                <h3 class="text-lg font-medium text-gray-900">{{ __('Confirm Deletion') }}</h3>
                <p class="mt-2 text-sm text-gray-500">
                    {{ __('Are you sure you want to delete this API key? This action cannot be undone.') }}
                </p>
            </div>
            <div class="flex justify-end">
                <button type="button" onclick="hideDeleteModal()" class="mr-2 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Cancel') }}
                </button>
                <form id="deleteKeyForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        {{ __('Delete') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript for modals and functionality -->
    <script>
        // Create Key Modal
        function showCreateKeyModal() {
            document.getElementById('createKeyModal').classList.remove('hidden');
        }

        function hideCreateKeyModal() {
            document.getElementById('createKeyModal').classList.add('hidden');
        }

        // Edit Key Modal
        function showEditKeyModal(id, name, description, isActive) {
            document.getElementById('edit_name').value = name;
            document.getElementById('edit_description').value = description;
            document.getElementById('edit_is_active').checked = isActive;
            document.getElementById('editKeyForm').action = `/api-keys/${id}`;
            document.getElementById('editKeyModal').classList.remove('hidden');
        }

        function hideEditKeyModal() {
            document.getElementById('editKeyModal').classList.add('hidden');
        }

        // Delete Key Modal
        function confirmDeleteKey(id) {
            document.getElementById('deleteKeyForm').action = `/api-keys/${id}`;
            document.getElementById('deleteConfirmModal').classList.remove('hidden');
        }

        function hideDeleteModal() {
            document.getElementById('deleteConfirmModal').classList.add('hidden');
        }

        // Copy to clipboard functionality
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                alert('API key copied to clipboard');
            }, function() {
                alert('Failed to copy API key');
            });
        }
    </script>
</x-app-layout>
