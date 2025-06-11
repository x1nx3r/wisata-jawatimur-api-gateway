<x-app-layout>
    <x-slot name="title">
        {{ __('API Documentation - Wisata Pulau Jawa') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col items-center gap-4">

                <!-- API Keys Header with Generate Button -->
                <div class="flex flex-row w-full m-1 p-6 text-gray-900 items-center justify-between bg-white rounded-lg shadow">
                    <div class="flex flex-col py-2 min-w-0 flex-1">
                        <h1 class="text-gray-800 font-bold text-xl">
                            {{ __("Your JWT API Keys") }}
                        </h1>
                        <p class="text-sm text-gray-600">Manage your JWT API tokens for secure access</p>
                    </div>
                    <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4 ml-4">
                        <button onclick="showCreateKeyModal()" class="px-4 hover:bg-green-500 bg-green-400 text-gray-800 font-semibold py-2 rounded transition whitespace-nowrap">
                            {{ __("Generate New JWT Key") }}
                        </button>
                        @if(isset($apiKeys) && count($apiKeys) > 0)
                            <button onclick="confirmRevokeAll()" class="px-4 hover:bg-red-500 bg-red-400 text-gray-800 font-semibold py-2 rounded transition whitespace-nowrap">
                                {{ __("Revoke All") }}
                            </button>
                        @endif
                    </div>
                </div>

                <!-- Success Message -->
                @if (session('success'))
                    <div class="w-full m-1 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="w-full m-1 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- API Keys Table -->
                <div class="w-full m-1 bg-white rounded-lg shadow overflow-hidden">
                    @if(isset($apiKeys) && count($apiKeys) > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/6">
                                            {{ __('Name & Description') }}
                                        </th>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/8">
                                            {{ __('JWT ID') }}
                                        </th>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/6">
                                            {{ __('Scopes') }}
                                        </th>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/8">
                                            {{ __('Created') }}
                                        </th>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/6">
                                            {{ __('Last Used') }}
                                        </th>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/12">
                                            {{ __('Status') }}
                                        </th>
                                        <th scope="col" class="px-3 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider w-1/6">
                                            {{ __('Actions') }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($apiKeys as $key)
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-3 py-4 align-top">
                                                <div class="min-w-0">
                                                    <div class="text-sm font-medium text-gray-900 truncate" title="{{ $key->name ?? 'Unnamed Key' }}">
                                                        {{ Str::limit($key->name ?? 'Unnamed Key', 20) }}
                                                    </div>
                                                    @if($key->description)
                                                        <div class="text-xs text-gray-500 truncate" title="{{ $key->description }}">
                                                            {{ Str::limit($key->description, 30) }}
                                                        </div>
                                                    @endif
                                                    @if($key->expires_at)
                                                        <div class="text-xs text-orange-600 truncate">
                                                            Expires: {{ $key->expires_at->format('M d, Y') }}
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="px-3 py-4 align-top">
                                                <div class="flex items-center min-w-0">
                                                    <span class="text-xs text-gray-900 font-mono truncate flex-1" title="{{ $key->jti }}">
                                                        {{ $key->masked_jti }}
                                                    </span>
                                                    <button onclick="copyToClipboard('{{ $key->jti }}')" class="ml-1 text-gray-400 hover:text-gray-600 flex-shrink-0" title="Copy JTI">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="px-3 py-4 align-top">
                                                <div class="flex flex-wrap gap-1">
                                                    @if(is_array($key->scopes))
                                                        @foreach($key->scopes as $scope)
                                                            <span class="px-1.5 py-0.5 text-xs font-medium rounded-full whitespace-nowrap
                                                                {{ $scope === 'admin' ? 'bg-red-100 text-red-800' :
                                                                   ($scope === 'write' ? 'bg-blue-100 text-blue-800' :
                                                                   ($scope === 'delete' ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800')) }}">
                                                                {{ ucfirst($scope) }}
                                                            </span>
                                                        @endforeach
                                                    @else
                                                        <span class="px-1.5 py-0.5 text-xs font-medium rounded-full bg-gray-100 text-gray-800">None</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="px-3 py-4 text-xs text-gray-500 align-top">
                                                <div class="truncate">{{ $key->created_at->format('M d, Y') }}</div>
                                                <div class="text-xs text-gray-400 truncate">{{ $key->created_at->diffForHumans() }}</div>
                                            </td>
                                            <td class="px-3 py-4 text-xs text-gray-500 align-top">
                                                @if($key->last_used_at)
                                                    <div class="truncate">{{ $key->last_used_at->format('M d, Y H:i') }}</div>
                                                    <div class="text-xs text-gray-400 truncate">{{ $key->last_used_at->diffForHumans() }}</div>
                                                    @if($key->last_used_ip)
                                                        <div class="text-xs text-gray-400 truncate" title="{{ $key->last_used_ip }}">
                                                            IP: {{ Str::limit($key->last_used_ip, 12) }}
                                                        </div>
                                                    @endif
                                                @else
                                                    <span class="text-gray-400">Never used</span>
                                                @endif
                                            </td>
                                            <td class="px-3 py-4 align-top">
                                                @php
                                                    $status = $key->status;
                                                    $statusClass = match($status) {
                                                        'active' => 'bg-green-100 text-green-800',
                                                        'expired' => 'bg-yellow-100 text-yellow-800',
                                                        'revoked' => 'bg-red-100 text-red-800',
                                                        default => 'bg-gray-100 text-gray-800'
                                                    };
                                                @endphp
                                                <span class="px-2 py-1 text-xs leading-5 font-semibold rounded-full {{ $statusClass }} whitespace-nowrap">
                                                    {{ ucfirst($status) }}
                                                </span>
                                            </td>
                                            <td class="px-3 py-4 text-right text-xs font-medium align-top">
                                                <div class="flex flex-col space-y-1">
                                                    <!-- First row of buttons -->
                                                    <div class="flex space-x-1 justify-end">
                                                        <button onclick="showEditKeyModal('{{ $key->id }}', '{{ $key->name }}', '{{ $key->description }}', {{ json_encode($key->scopes) }})"
                                                                class="text-indigo-600 hover:text-indigo-900 text-xs whitespace-nowrap">
                                                            Edit
                                                        </button>
                                                        <button onclick="confirmResetToken('{{ $key->id }}', '{{ $key->name }}')"
                                                                class="text-orange-600 hover:text-orange-900 text-xs whitespace-nowrap"
                                                                title="Generate new JWT token with same settings">
                                                            Reset
                                                        </button>
                                                    </div>
                                                    <!-- Second row of buttons -->
                                                    <div class="flex justify-end">
                                                        <button onclick="confirmRevokeKey('{{ $key->id }}', '{{ $key->name }}')"
                                                                class="text-red-600 hover:text-red-900 text-xs whitespace-nowrap">
                                                            Revoke
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="p-6 text-center text-gray-500">
                            <div class="mb-4">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                            <p class="text-lg">{{ __('No JWT API keys found') }}</p>
                            <p class="text-sm">{{ __('Generate your first JWT token to start using the API securely.') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Create Key Modal -->
    <div id="createKeyModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden z-50 p-4">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg max-h-[90vh] overflow-y-auto">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-medium">{{ __('Generate New JWT API Key') }}</h3>
                <button onclick="hideCreateKeyModal()" class="text-gray-400 hover:text-gray-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form action="{{ route('api-keys.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Key Name') }} <span class="text-red-500">*</span></label>
                    <input type="text" name="name" id="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="My API Key" maxlength="255">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">{{ __('Description') }}</label>
                    <textarea name="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="What this key will be used for" maxlength="1000"></textarea>
                        <x-slot name="title">
                            {{ __('API Documentation - Wisata Pulau Jawa') }}
                        </x-slot>

                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="flex flex-col items-center gap-4">

                                    <!-- API Keys Header with Generate Button -->
                                    <div class="flex flex-row w-full m-1 p-6 text-gray-900 items-center justify-between bg-white rounded-lg shadow">
                                        <div class="flex flex-col py-2 min-w-0 flex-1">
                                            <h1 class="text-gray-800 font-bold text-xl">
                                                {{ __("Your JWT API Keys") }}
                                            </h1>
                                            <p class="text-sm text-gray-600">Manage your JWT API tokens for secure access</p>
                                        </div>
                                        <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4 ml-4">
                                            <button onclick="showCreateKeyModal()" class="px-4 hover:bg-green-500 bg-green-400 text-gray-800 font-semibold py-2 rounded transition whitespace-nowrap">
                                                {{ __("Generate New JWT Key") }}
                                            </button>
                                            @if(isset($apiKeys) && count($apiKeys) > 0)
                                                <button onclick="confirmRevokeAll()" class="px-4 hover:bg-red-500 bg-red-400 text-gray-800 font-semibold py-2 rounded transition whitespace-nowrap">
                                                    {{ __("Revoke All") }}
                                                </button>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Success Message -->
                                    @if (session('success'))
                                        <div class="w-full m-1 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <!-- Error Messages -->
                                    @if ($errors->any())
                                        <div class="w-full m-1 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                                            <ul class="list-disc list-inside">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <!-- API Keys Table -->
                                    <div class="w-full m-1 bg
0"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('Scopes (Permissions)') }} <span class="text-red-500">*</span></label>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="checkbox" name="scopes[]" value="read" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" checked>
                            <span class="ml-2 text-sm">
                                <span class="font-medium text-green-700">Read</span> - View wisata data
                            </span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="scopes[]" value="write" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <span class="ml-2 text-sm">
                                <span class="font-medium text-blue-700">Write</span> - Create and update wisata data
                            </span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="scopes[]" value="delete" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <span class="ml-2 text-sm">
                                <span class="font-medium text-yellow-700">Delete</span> - Remove wisata data
                            </span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="scopes[]" value="admin" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <span class="ml-2 text-sm">
                                <span class="font-medium text-red-700">Admin</span> - Full administrative access
                            </span>
                        </label>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="expires_at" class="block text-sm font-medium text-gray-700">{{ __('Expiration (Optional)') }}</label>
                    <input type="date" name="expires_at" id="expires_at" min="{{ date('Y-m-d', strtotime('+1 day')) }}" max="{{ date('Y-m-d', strtotime('+5 years')) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <p class="mt-1 text-sm text-gray-500">Leave empty for no expiration</p>
                </div>
                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="hideCreateKeyModal()" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400">
                        {{ __('Cancel') }}
                    </button>
                    <button type="submit" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-500 hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400">
                        {{ __('Generate JWT Key') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Token Display Modal (shown after creation/reset) -->
    @if(session('api_token'))
        <div id="tokenModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50 p-4">
            <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-4xl max-h-[90vh] overflow-y-auto">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-medium text-green-600">
                        @if(session('token_reset'))
                            {{ __('JWT Token Reset Successfully!') }}
                        @else
                            {{ __('JWT Token Generated Successfully!') }}
                        @endif
                    </h3>
                    <button onclick="hideTokenModal()" class="text-gray-400 hover:text-gray-500">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="bg-yellow-50 border border-yellow-200 rounded-md p-4 mb-4">
                    <div class="flex">
                        <svg class="h-5 w-5 text-yellow-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-yellow-800">Important!</h3>
                            <p class="text-sm text-yellow-700 mt-1">
                                @if(session('token_reset'))
                                    Your old token has been invalidated. Copy this new token now. You won't be able to see it again!
                                @else
                                    Copy this token now. You won't be able to see it again!
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Your JWT Token:</label>
                    <div class="flex items-center bg-gray-50 p-3 rounded-md border">
                        <input type="text" value="{{ session('api_token') }}" readonly class="flex-1 bg-transparent border-none text-sm font-mono text-gray-900 focus:outline-none overflow-hidden" id="generatedToken">
                        <button onclick="copyToClipboard('{{ session('api_token') }}')" class="ml-2 px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 flex-shrink-0">
                            Copy
                        </button>
                    </div>
                </div>
                <div class="bg-blue-50 border border-blue-200 rounded-md p-4 mb-4">
                    <h4 class="text-sm font-medium text-blue-800 mb-2">Usage Example:</h4>
                    <div class="bg-blue-100 rounded p-2 overflow-x-auto">
                        <code class="text-xs text-blue-700 whitespace-nowrap">
                            curl -H "Authorization: Bearer {{ Str::limit(session('api_token'), 50) }}..." {{ url('/api/provinsis') }}
                        </code>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button onclick="hideTokenModal()" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-500 hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400">
                        {{ __('I\'ve Copied the Token') }}
                    </button>
                </div>
            </div>
        </div>
    @endif

    <!-- Edit Key Modal -->
    <div id="editKeyModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden z-50 p-4">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg max-h-[90vh] overflow-y-auto">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-medium">{{ __('Edit JWT API Key') }}</h3>
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
                    <input type="text" name="name" id="edit_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" maxlength="255">
                </div>
                <div class="mb-4">
                    <label for="edit_description" class="block text-sm font-medium text-gray-700">{{ __('Description') }}</label>
                    <textarea name="description" id="edit_description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" maxlength="1000"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('Scopes (Permissions)') }}</label>
                    <div class="space-y-2" id="editScopesContainer">
                        <label class="flex items-center">
                            <input type="checkbox" name="scopes[]" value="read" id="edit_scope_read" class="rounded border-gray-300 text-indigo-600 shadow-sm">
                            <span class="ml-2 text-sm"><span class="font-medium text-green-700">Read</span> - View wisata data</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="scopes[]" value="write" id="edit_scope_write" class="rounded border-gray-300 text-indigo-600 shadow-sm">
                            <span class="ml-2 text-sm"><span class="font-medium text-blue-700">Write</span> - Create and update wisata data</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="scopes[]" value="delete" id="edit_scope_delete" class="rounded border-gray-300 text-indigo-600 shadow-sm">
                            <span class="ml-2 text-sm"><span class="font-medium text-yellow-700">Delete</span> - Remove wisata data</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="scopes[]" value="admin" id="edit_scope_admin" class="rounded border-gray-300 text-indigo-600 shadow-sm">
                            <span class="ml-2 text-sm"><span class="font-medium text-red-700">Admin</span> - Full administrative access</span>
                        </label>
                    </div>
                    <p class="mt-1 text-sm text-yellow-600">Note: Existing tokens will retain their original scopes until they expire.</p>
                </div>
                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="hideEditKeyModal()" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Cancel') }}
                    </button>
                    <button type="submit" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-500 hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Save Changes') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Reset Token Confirmation Modal -->
    <div id="resetTokenModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden z-50 p-4">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
            <div class="mb-4">
                <h3 class="text-lg font-medium text-gray-900">{{ __('Reset JWT Token') }}</h3>
                <p class="mt-2 text-sm text-gray-500" id="resetTokenMessage">
                    {{ __('Are you sure you want to reset this JWT token? This will generate a new token with the same settings and immediately invalidate the current token.') }}
                </p>
                <div class="mt-3 p-3 bg-yellow-50 border border-yellow-200 rounded-md">
                    <div class="flex">
                        <svg class="h-5 w-5 text-yellow-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <div class="ml-3">
                            <p class="text-sm text-yellow-700">The old token will stop working immediately. Make sure to update any applications using the current token.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end space-x-3">
                <button type="button" onclick="hideResetTokenModal()" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Cancel') }}
                </button>
                <form id="resetTokenForm" method="POST" class="inline">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                        {{ __('Reset Token') }}
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Revoke Confirmation Modal -->
    <div id="revokeConfirmModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden z-50 p-4">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
            <div class="mb-4">
                <h3 class="text-lg font-medium text-gray-900">{{ __('Confirm Revocation') }}</h3>
                <p class="mt-2 text-sm text-gray-500 break-words" id="revokeMessage">
                    {{ __('Are you sure you want to revoke this JWT API key? This action cannot be undone and will immediately invalidate the token.') }}
                </p>
            </div>
            <div class="flex justify-end space-x-3">
                <button type="button" onclick="hideRevokeModal()" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Cancel') }}
                </button>
                <form id="revokeKeyForm" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        {{ __('Revoke Token') }}
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Revoke All Confirmation Modal -->
    <div id="revokeAllModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden z-50 p-4">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
            <div class="mb-4">
                <h3 class="text-lg font-medium text-red-900">{{ __('Revoke All JWT Keys') }}</h3>
                <p class="mt-2 text-sm text-gray-500">
                    {{ __('Are you sure you want to revoke ALL your JWT API keys? This will immediately invalidate all your tokens and cannot be undone.') }}
                </p>
            </div>
            <div class="flex justify-end space-x-3">
                <button type="button" onclick="hideRevokeAllModal()" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">
                    {{ __('Cancel') }}
                </button>
                <form action="{{ route('api-keys.revoke-all') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        {{ __('Revoke All Tokens') }}
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

        // Token Display Modal
        function hideTokenModal() {
            document.getElementById('tokenModal').classList.add('hidden');
        }

        // Edit Key Modal
        function showEditKeyModal(id, name, description, scopes) {
            document.getElementById('edit_name').value = name || '';
            document.getElementById('edit_description').value = description || '';

            // Clear all scope checkboxes first
            document.querySelectorAll('#editScopesContainer input[type="checkbox"]').forEach(checkbox => {
                checkbox.checked = false;
            });

            // Check the appropriate scopes
            if (scopes && Array.isArray(scopes)) {
                scopes.forEach(scope => {
                    const checkbox = document.getElementById(`edit_scope_${scope}`);
                    if (checkbox) {
                        checkbox.checked = true;
                    }
                });
            }

            document.getElementById('editKeyForm').action = `/api-keys/${id}`;
            document.getElementById('editKeyModal').classList.remove('hidden');
        }

        function hideEditKeyModal() {
            document.getElementById('editKeyModal').classList.add('hidden');
        }

        // Reset Token Modal
        function confirmResetToken(id, name) {
            const message = `Are you sure you want to reset the JWT token for "${name || 'Unnamed Key'}"? This will generate a new token with the same settings and immediately invalidate the current token.`;
            document.getElementById('resetTokenMessage').textContent = message;
            document.getElementById('resetTokenForm').action = `/api-keys/${id}/reset-token`;
            document.getElementById('resetTokenModal').classList.remove('hidden');
        }

        function hideResetTokenModal() {
            document.getElementById('resetTokenModal').classList.add('hidden');
        }

        // Revoke Key Modal
        function confirmRevokeKey(id, name) {
            const message = `Are you sure you want to revoke the JWT API key "${name || 'Unnamed Key'}"? This action cannot be undone and will immediately invalidate the token.`;
            document.getElementById('revokeMessage').textContent = message;
            document.getElementById('revokeKeyForm').action = `/api-keys/${id}`;
            document.getElementById('revokeConfirmModal').classList.remove('hidden');
        }

        function hideRevokeModal() {
            document.getElementById('revokeConfirmModal').classList.add('hidden');
        }

        // Revoke All Modal
        function confirmRevokeAll() {
            document.getElementById('revokeAllModal').classList.remove('hidden');
        }

        function hideRevokeAllModal() {
            document.getElementById('revokeAllModal').classList.add('hidden');
        }

        // Copy to clipboard functionality
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                // Create a temporary success message
                const button = event.target.closest('button');
                const originalText = button.textContent;
                button.textContent = 'Copied!';
                button.classList.add('bg-green-500');
                setTimeout(() => {
                    button.textContent = originalText;
                    button.classList.remove('bg-green-500');
                }, 2000);
            }, function() {
                alert('Failed to copy to clipboard');
            });
        }

        // Auto-hide token modal after 30 seconds for security
        @if(session('api_token'))
            setTimeout(() => {
                const tokenModal = document.getElementById('tokenModal');
                if (tokenModal && !tokenModal.classList.contains('hidden')) {
                    hideTokenModal();
                }
            }, 30000);
        @endif
    </script>
</x-app-layout>
