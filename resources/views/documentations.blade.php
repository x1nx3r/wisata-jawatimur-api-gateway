<x-app-layout>
<x-slot name="title">
{{ __('API Documentation - Wisata Pulau Jawa') }}
</x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white p-8 rounded-lg shadow-lg">
    <div class="text-center mb-12">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ __("Wisata Pulau Jawa API Documentation") }}</h1>
    <p class="text-lg text-gray-600">Complete guide to accessing tourism data across Java Island, Indonesia</p>
    <div class="mt-4 flex justify-center space-x-4">
    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-medium">Version 1.0.0</span>
    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">JWT Protected</span>
    <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm font-medium">REST API</span>
    </div>
    </div>

                <!-- Table of Contents -->
                <div class="mb-12 bg-gray-50 p-6 rounded-xl border">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">📚 Table of Contents</h2>
                <div class="grid md:grid-cols-2 gap-4">
                <div>
                <h3 class="font-semibold text-gray-700 mb-2">Getting Started</h3>
                <ul class="space-y-1 text-sm text-gray-600">
                <li><a href="#authentication" class="hover:text-blue-600">🔐 Authentication</a></li>
                <li><a href="#base-url" class="hover:text-blue-600">🌐 Base URL</a></li>
                <li><a href="#response-format" class="hover:text-blue-600">📄 Response Format</a></li>
                <li><a href="#error-handling" class="hover:text-blue-600">⚠️ Error Handling</a></li>
                </ul>
                </div>
                <div>
                <h3 class="font-semibold text-gray-700 mb-2">API Endpoints</h3>
                <ul class="space-y-1 text-sm text-gray-600">
                <li><a href="#provinsi-endpoints" class="hover:text-blue-600">🏛️ Provinsi Endpoints</a></li>
                <li><a href="#daerah-endpoints" class="hover:text-blue-600">🏘️ Daerah Endpoints</a></li>
                <li><a href="#wisata-endpoints" class="hover:text-blue-600">🏖️ Wisata Endpoints</a></li>
                <li><a href="#admin-endpoints" class="hover:text-blue-600">👑 Admin Endpoints</a></li>
                </ul>
                </div>
                </div>
                </div>

                <!-- Authentication Section -->
                <div id="authentication" class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">🔐 Authentication</h2>

                    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mb-6">
                    <div class="flex items-start">
                    <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                    </div>
                    <div class="ml-3">
                    <h3 class="text-sm font-medium text-yellow-800">Authentication Required</h3>
                    <p class="text-sm text-yellow-700 mt-1">All API endpoints require JWT authentication. Generate your API key from the dashboard to access protected routes.</p>
                    </div>
                    </div>
                    </div>

                    <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-gray-700">How to Authenticate</h3>
                    <p class="text-gray-600">Include your JWT token in the Authorization header of every request:</p>

                        <div class="bg-gray-800 p-4 rounded-lg">
                        <code class="text-green-400 font-mono text-sm">Authorization: Bearer YOUR_JWT_TOKEN</code>
                        </div>

                        <h3 class="text-lg font-semibold text-gray-700 mt-6">Permission Scopes</h3>
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="bg-green-50 border border-green-200 p-4 rounded-lg">
                        <h4 class="font-medium text-green-800">READ</h4>
                        <p class="text-sm text-green-600 mt-1">View data (GET requests)</p>
                        </div>
                        <div class="bg-blue-50 border border-blue-200 p-4 rounded-lg">
                        <h4 class="font-medium text-blue-800">WRITE</h4>
                        <p class="text-sm text-blue-600 mt-1">Create & update data</p>
                        </div>
                        <div class="bg-yellow-50 border border-yellow-200 p-4 rounded-lg">
                        <h4 class="font-medium text-yellow-800">DELETE</h4>
                        <p class="text-sm text-yellow-600 mt-1">Remove data</p>
                        </div>
                        <div class="bg-red-50 border border-red-200 p-4 rounded-lg">
                        <h4 class="font-medium text-red-800">ADMIN</h4>
                        <p class="text-sm text-red-600 mt-1">Full access</p>
                        </div>
                        </div>
                        </div>
                        </div>

                <!-- Base URL & Response Format -->
                <div id="base-url" class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">🌐 Base URL & Response Format</h2>

                    <div class="space-y-6">
                    <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Base URL</h3>
                    <div class="bg-gray-800 p-4 rounded-lg">
                    <code class="text-green-400 font-mono">{{ rtrim(config('app.url'), '/') }}/api</code>
                    </div>
                    </div>

                        <div id="response-format">
                        <h3 class="text-lg font-semibold text-gray-700 mb-2">Response Format</h3>
                        <p class="text-gray-600 mb-4">All responses are in JSON format with consistent structure:</p>

                            <div class="grid md:grid-cols-2 gap-4">
                            <div>
                            <h4 class="font-medium text-gray-700 mb-2">✅ Success Response</h4>
                            <pre class="bg-gray-800 text-green-400 p-4 rounded-lg text-sm"><code>{
                            "data": [...],
                            "status": "success",
                            "message": "Data retrieved successfully"
                            }</code></pre>
                            </div>
                            <div id="error-handling">
                            <h4 class="font-medium text-gray-700 mb-2">❌ Error Response</h4>
                            <pre class="bg-gray-800 text-red-400 p-4 rounded-lg text-sm"><code>{
                            "error": "Error type",
                            "message": "Detailed error message",
                            "status": 400
                            }</code></pre>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>

                <!-- Provinsi Endpoints -->
                <div id="provinsi-endpoints" class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">🏛️ Provinsi Endpoints</h2>

                    <div class="space-y-8">
                    <!-- Get All Provinsis -->
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                    <div class="flex items-center gap-3 mb-4">
                    <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">GET</span>
                    <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">READ</span>
                    <h3 class="text-xl font-semibold text-gray-800">Get All Provinsis</h3>
                    </div>

                            <div class="mb-4">
                            <p class="text-gray-600 mb-2">Endpoint:</p>
                            <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/provinsis</code>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Description:</p>
                            <p class="text-gray-600">Retrieve all provinces in the system.</p>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Example Response:</p>
                            <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>{
                            "data": [
                            {
                            "id": 1,
                            "nama_provinsi": "Jawa Timur",
                            "created_at": "2024-01-01T00:00:00.000000Z"
                            }
                            ]
                            }</code></pre>
                            </div>

                            <div>
                            <p class="font-medium text-gray-700 mb-2">Try it:</p>
                            <div class="bg-gray-800 p-4 rounded-lg overflow-x-auto">
                            <code class="text-green-400 font-mono text-sm">curl -H "Authorization: Bearer YOUR_TOKEN" {{ rtrim(config('app.url'), '/') }}/api/provinsis</code>
                            </div>
                            </div>
                            </div>

                        <!-- Get Specific Provinsi -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                        <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">GET</span>
                        <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">READ</span>
                        <h3 class="text-xl font-semibold text-gray-800">Get Specific Provinsi</h3>
                        </div>

                            <div class="mb-4">
                            <p class="text-gray-600 mb-2">Endpoint:</p>
                            <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/provinsis/{id}</code>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Parameters:</p>
                            <div class="bg-white p-3 rounded border">
                            <code class="text-blue-600">id</code> <span class="text-gray-500">(integer, required)</span> - Provinsi ID
                            </div>
                            </div>

                            <div>
                            <p class="font-medium text-gray-700 mb-2">Try it:</p>
                            <div class="bg-gray-800 p-4 rounded-lg overflow-x-auto">
                            <code class="text-green-400 font-mono text-sm">curl -H "Authorization: Bearer YOUR_TOKEN" {{ rtrim(config('app.url'), '/') }}/api/provinsis/1</code>
                            </div>
                            </div>
                            </div>

                        <!-- Create Provinsi -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                        <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 bg-blue-500 text-white rounded-full text-sm font-medium">POST</span>
                        <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-xs">WRITE</span>
                        <h3 class="text-xl font-semibold text-gray-800">Create Provinsi</h3>
                        </div>

                            <div class="mb-4">
                            <p class="text-gray-600 mb-2">Endpoint:</p>
                            <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">POST /api/provinsis</code>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Request Body:</p>
                            <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>{
                            "nama_provinsi": "Jawa Tengah"
                            }</code></pre>
                            </div>

                            <div>
                            <p class="font-medium text-gray-700 mb-2">Try it:</p>
                            <div class="bg-gray-800 p-4 rounded-lg overflow-x-auto">
                            <code class="text-green-400 font-mono text-sm">curl -X POST -H "Authorization: Bearer YOUR_TOKEN" -H "Content-Type: application/json" -d '{"nama_provinsi":"Jawa Tengah"}' {{ rtrim(config('app.url'), '/') }}/api/provinsis</code>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>

                <!-- Daerah Endpoints -->
                <div id="daerah-endpoints" class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">🏘️ Daerah Endpoints</h2>

                    <div class="space-y-8">
                    <!-- Get All Daerahs -->
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                    <div class="flex items-center gap-3 mb-4">
                    <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">GET</span>
                    <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">READ</span>
                    <h3 class="text-xl font-semibold text-gray-800">Get All Daerahs</h3>
                    </div>

                            <div class="mb-4">
                            <p class="text-gray-600 mb-2">Endpoint:</p>
                            <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/daerahs</code>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Description:</p>
                            <p class="text-gray-600">Retrieve all regions/districts in the system.</p>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Example Response:</p>
                            <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>{
                            "data": [
                            {
                            "id": 1,
                            "nama_daerah": "Bangkalan",
                            "id_provinsi": 1,
                            "provinsi": {
                            "id": 1,
                            "nama_provinsi": "Jawa Timur"
                            }
                            }
                            ]
                            }</code></pre>
                            </div>

                            <div>
                            <p class="font-medium text-gray-700 mb-2">Try it:</p>
                            <div class="bg-gray-800 p-4 rounded-lg overflow-x-auto">
                            <code class="text-green-400 font-mono text-sm">curl -H "Authorization: Bearer YOUR_TOKEN" {{ rtrim(config('app.url'), '/') }}/api/daerahs</code>
                            </div>
                            </div>
                            </div>

                        <!-- Get Daerahs by Provinsi -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                        <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">GET</span>
                        <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">READ</span>
                        <h3 class="text-xl font-semibold text-gray-800">Get Daerahs by Provinsi</h3>
                        </div>

                            <div class="mb-4">
                            <p class="text-gray-600 mb-2">Endpoint:</p>
                            <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/provinsis/{id}/daerahs</code>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Description:</p>
                            <p class="text-gray-600">Get all daerahs within a specific provinsi.</p>
                            </div>

                            <div>
                            <p class="font-medium text-gray-700 mb-2">Try it:</p>
                            <div class="bg-gray-800 p-4 rounded-lg overflow-x-auto">
                            <code class="text-green-400 font-mono text-sm">curl -H "Authorization: Bearer YOUR_TOKEN" {{ rtrim(config('app.url'), '/') }}/api/provinsis/1/daerahs</code>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>

                <!-- Wisata Endpoints -->
                <div id="wisata-endpoints" class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">🏖️ Wisata (Tourism) Endpoints</h2>

                    <div class="space-y-8">
                    <!-- Get All Wisatas -->
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                    <div class="flex items-center gap-3 mb-4">
                    <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">GET</span>
                    <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">READ</span>
                    <h3 class="text-xl font-semibold text-gray-800">Get All Wisatas</h3>
                    </div>

                            <div class="mb-4">
                            <p class="text-gray-600 mb-2">Endpoint:</p>
                            <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/wisatas</code>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Query Parameters:</p>
                            <div class="space-y-2">
                            <div class="bg-white p-3 rounded border">
                            <code class="text-blue-600">limit</code> <span class="text-gray-500">(integer, optional)</span> - Number of results per page (default: 15)
                            </div>
                            <div class="bg-white p-3 rounded border">
                            <code class="text-blue-600">page</code> <span class="text-gray-500">(integer, optional)</span> - Page number for pagination
                            </div>
                            </div>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Example Response:</p>
                            <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>{
                            "data": [
                            {
                            "id": 1,
                            "id_daerah": 1,
                            "nama": "Geger Hill",
                            "alamat": "Kesek, Kec. Labang, Kabupaten Bangkalan, Jawa Timur 69163",
                            "rating": 4.2,
                            "link_gmaps": "https://maps.app.goo.gl/tbgBonZiPJVN5wSZ6",
                            "daerah": {
                            "id": 1,
                            "nama_daerah": "Bangkalan"
                            }
                            }
                            ],
                            "meta": {
                            "current_page": 1,
                            "total": 150,
                            "per_page": 15
                            }
                            }</code></pre>
                            </div>

                            <div>
                            <p class="font-medium text-gray-700 mb-2">Try it:</p>
                            <div class="bg-gray-800 p-4 rounded-lg overflow-x-auto">
                            <code class="text-green-400 font-mono text-sm">curl -H "Authorization: Bearer YOUR_TOKEN" "{{ rtrim(config('app.url'), '/') }}/api/wisatas?limit=10&page=1"</code>
                            </div>
                            </div>
                            </div>

                        <!-- Search Wisatas -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                        <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">GET</span>
                        <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">READ</span>
                        <h3 class="text-xl font-semibold text-gray-800">Search Wisatas</h3>
                        </div>

                            <div class="mb-4">
                            <p class="text-gray-600 mb-2">Endpoint:</p>
                            <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/wisatas/search</code>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Query Parameters:</p>
                            <div class="space-y-2">
                            <div class="bg-white p-3 rounded border">
                            <code class="text-blue-600">q</code> <span class="text-gray-500">(string, required)</span> - Search query for wisata name
                            </div>
                            <div class="bg-white p-3 rounded border">
                            <code class="text-blue-600">daerah</code> <span class="text-gray-500">(string, optional)</span> - Filter by daerah name
                            </div>
                            <div class="bg-white p-3 rounded border">
                            <code class="text-blue-600">min_rating</code> <span class="text-gray-500">(float, optional)</span> - Minimum rating filter
                            </div>
                            </div>
                            </div>

                            <div>
                            <p class="font-medium text-gray-700 mb-2">Try it:</p>
                            <div class="bg-gray-800 p-4 rounded-lg overflow-x-auto">
                            <code class="text-green-400 font-mono text-sm">curl -H "Authorization: Bearer YOUR_TOKEN" "{{ rtrim(config('app.url'), '/') }}/api/wisatas/search?q=pantai&min_rating=4.0"</code>
                            </div>
                            </div>
                            </div>

                        <!-- Get Wisatas by Daerah -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                        <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">GET</span>
                        <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">READ</span>
                        <h3 class="text-xl font-semibold text-gray-800">Get Wisatas by Daerah</h3>
                        </div>

                            <div class="mb-4">
                            <p class="text-gray-600 mb-2">Endpoint:</p>
                            <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/wisatas/daerah/{id_daerah}</code>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Description:</p>
                            <p class="text-gray-600">Get all tourist attractions in a specific daerah/region.</p>
                            </div>

                            <div>
                            <p class="font-medium text-gray-700 mb-2">Try it:</p>
                            <div class="bg-gray-800 p-4 rounded-lg overflow-x-auto">
                            <code class="text-green-400 font-mono text-sm">curl -H "Authorization: Bearer YOUR_TOKEN" {{ rtrim(config('app.url'), '/') }}/api/wisatas/daerah/1</code>
                            </div>
                            </div>
                            </div>

                        <!-- Create Wisata -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                        <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 bg-blue-500 text-white rounded-full text-sm font-medium">POST</span>
                        <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-xs">WRITE</span>
                        <h3 class="text-xl font-semibold text-gray-800">Create Wisata</h3>
                        </div>

                            <div class="mb-4">
                            <p class="text-gray-600 mb-2">Endpoint:</p>
                            <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">POST /api/wisatas</code>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Request Body:</p>
                            <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>{
                            "id_daerah": 1,
                            "nama": "Pantai Indah Baru",
                            "alamat": "Jl. Pantai Indah No. 123, Bangkalan",
                            "rating": 4.5,
                            "link_gmaps": "https://maps.google.com/..."
                            }</code></pre>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Required Fields:</p>
                            <div class="space-y-2">
                            <div class="bg-white p-3 rounded border">
                            <code class="text-blue-600">id_daerah</code> <span class="text-red-500">*</span> <span class="text-gray-500">(integer)</span> - Daerah ID
                            </div>
                            <div class="bg-white p-3 rounded border">
                            <code class="text-blue-600">nama</code> <span class="text-red-500">*</span> <span class="text-gray-500">(string, max: 255)</span> - Wisata name
                            </div>
                            <div class="bg-white p-3 rounded border">
                            <code class="text-blue-600">alamat</code> <span class="text-gray-500">(string, optional)</span> - Address
                            </div>
                            <div class="bg-white p-3 rounded border">
                            <code class="text-blue-600">rating</code> <span class="text-gray-500">(float, 0-5)</span> - Rating score
                            </div>
                            </div>
                            </div>

                            <div>
                            <p class="font-medium text-gray-700 mb-2">Try it:</p>
                            <div class="bg-gray-800 p-4 rounded-lg overflow-x-auto">
                            <code class="text-green-400 font-mono text-sm">curl -X POST -H "Authorization: Bearer YOUR_TOKEN" -H "Content-Type: application/json" -d '{"id_daerah":1,"nama":"Wisata Baru","rating":4.0}' {{ rtrim(config('app.url'), '/') }}/api/wisatas</code>
                            </div>
                            </div>
                            </div>

                        <!-- Update Wisata -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                        <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 bg-orange-500 text-white rounded-full text-sm font-medium">PUT</span>
                        <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-xs">WRITE</span>
                        <h3 class="text-xl font-semibold text-gray-800">Update Wisata</h3>
                        </div>

                            <div class="mb-4">
                            <p class="text-gray-600 mb-2">Endpoint:</p>
                            <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">PUT /api/wisatas/{id}</code>
                            </div>

                            <div>
                            <p class="font-medium text-gray-700 mb-2">Try it:</p>
                            <div class="bg-gray-800 p-4 rounded-lg overflow-x-auto">
                            <code class="text-green-400 font-mono text-sm">curl -X PUT -H "Authorization: Bearer YOUR_TOKEN" -H "Content-Type: application/json" -d '{"nama":"Updated Name","rating":4.8}' {{ rtrim(config('app.url'), '/') }}/api/wisatas/1</code>
                            </div>
                            </div>
                            </div>

                        <!-- Delete Wisata -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                        <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 bg-red-500 text-white rounded-full text-sm font-medium">DELETE</span>
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs">DELETE</span>
                        <h3 class="text-xl font-semibold text-gray-800">Delete Wisata</h3>
                        </div>

                            <div class="mb-4">
                            <p class="text-gray-600 mb-2">Endpoint:</p>
                            <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">DELETE /api/wisatas/{id}</code>
                            </div>

                            <div class="mb-4">
                            <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                            <div class="flex">
                            <svg class="h-5 w-5 text-red-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800">Warning</h3>
                            <p class="text-sm text-red-700 mt-1">This action permanently deletes the wisata record and cannot be undone.</p>
                            </div>
                            </div>
                            </div>
                            </div>

                            <div>
                            <p class="font-medium text-gray-700 mb-2">Try it:</p>
                            <div class="bg-gray-800 p-4 rounded-lg overflow-x-auto">
                            <code class="text-green-400 font-mono text-sm">curl -X DELETE -H "Authorization: Bearer YOUR_TOKEN" {{ rtrim(config('app.url'), '/') }}/api/wisatas/1</code>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>

                <!-- Admin Endpoints -->
                <div id="admin-endpoints" class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">👑 Admin Endpoints</h2>

                    <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6">
                    <div class="flex">
                    <svg class="h-5 w-5 text-red-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                    <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">Admin Access Required</h3>
                    <p class="text-sm text-red-700 mt-1">These endpoints require ADMIN scope. Use with extreme caution in production environments.</p>
                    </div>
                    </div>
                    </div>

                    <div class="space-y-8">
                    <!-- Admin Stats -->
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                    <div class="flex items-center gap-3 mb-4">
                    <span class="px-3 py-1 bg-purple-500 text-white rounded-full text-sm font-medium">GET</span>
                    <span class="px-2 py-1 bg-red-100 text-red-700 rounded text-xs">ADMIN</span>
                    <h3 class="text-xl font-semibold text-gray-800">Admin Statistics</h3>
                    </div>

                            <div class="mb-4">
                            <p class="text-gray-600 mb-2">Endpoint:</p>
                            <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/admin/stats</code>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Example Response:</p>
                            <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>{
                            "total_provinsis": 1,
                            "total_daerahs": 38,
                            "total_wisatas": 150,
                            "total_users": 25,
                            "active_api_keys": 12,
                            "api_requests_today": 0,
                            "generated_at": "2024-01-01T12:00:00.000000Z"
                            }</code></pre>
                            </div>

                            <div>
                            <p class="font-medium text-gray-700 mb-2">Try it:</p>
                            <div class="bg-gray-800 p-4 rounded-lg overflow-x-auto">
                            <code class="text-green-400 font-mono text-sm">curl -H "Authorization: Bearer YOUR_ADMIN_TOKEN" {{ rtrim(config('app.url'), '/') }}/api/admin/stats</code>
                            </div>
                            </div>
                            </div>

                        <!-- Bulk Import -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                        <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 bg-blue-500 text-white rounded-full text-sm font-medium">POST</span>
                        <span class="px-2 py-1 bg-red-100 text-red-700 rounded text-xs">ADMIN</span>
                        <h3 class="text-xl font-semibold text-gray-800">Bulk Import Wisatas</h3>
                        </div>

                            <div class="mb-4">
                            <p class="text-gray-600 mb-2">Endpoint:</p>
                            <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">POST /api/admin/bulk-import/wisatas</code>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Request Body (JSON Array):</p>
                            <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>[
                            {
                            "id_daerah": 1,
                            "nama": "Wisata 1",
                            "alamat": "Alamat 1",
                            "rating": 4.0
                            },
                            {
                            "id_daerah": 2,
                            "nama": "Wisata 2",
                            "alamat": "Alamat 2",
                            "rating": 4.5
                            }
                            ]</code></pre>
                            </div>
                            </div>
                            </div>
                            </div>

                <!-- Utility Endpoints -->
                <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">🔧 Utility Endpoints</h2>

                    <div class="space-y-8">
                    <!-- Health Check -->
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                    <div class="flex items-center gap-3 mb-4">
                    <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">GET</span>
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs">PUBLIC</span>
                    <h3 class="text-xl font-semibold text-gray-800">Health Check</h3>
                    </div>

                            <div class="mb-4">
                            <p class="text-gray-600 mb-2">Endpoint:</p>
                            <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/health</code>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Description:</p>
                            <p class="text-gray-600">Check if the API service is running. No authentication required.</p>
                            </div>

                            <div>
                            <p class="font-medium text-gray-700 mb-2">Try it:</p>
                            <div class="bg-gray-800 p-4 rounded-lg overflow-x-auto">
                            <code class="text-green-400 font-mono text-sm">curl {{ rtrim(config('app.url'), '/') }}/api/health</code>
                            </div>
                            </div>
                            </div>

                        <!-- API Info -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                        <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">GET</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs">PUBLIC</span>
                        <h3 class="text-xl font-semibold text-gray-800">API Information</h3>
                        </div>

                            <div class="mb-4">
                            <p class="text-gray-600 mb-2">Endpoint:</p>
                            <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/info</code>
                            </div>

                            <div class="mb-4">
                            <p class="font-medium text-gray-700 mb-2">Description:</p>
                            <p class="text-gray-600">Get basic API information and available endpoints. No authentication required.</p>
                            </div>

                            <div>
                            <p class="font-medium text-gray-700 mb-2">Try it:</p>
                            <div class="bg-gray-800 p-4 rounded-lg overflow-x-auto">
                            <code class="text-green-400 font-mono text-sm">curl {{ rtrim(config('app.url'), '/') }}/api/info</code>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>

                <!-- Footer -->
                <div class="text-center pt-8 border-t">
                <p class="text-gray-600 mb-4">Need help? Check your API key permissions in the <a href="{{ route('dashboard') }}" class="text-blue-600 hover:text-blue-800">dashboard</a>.</p>
                <div class="flex justify-center space-x-6 text-sm text-gray-500">
                <span>Version 1.0.0</span>
                <span>•</span>
                <span>JWT Authentication</span>
                <span>•</span>
                <span>RESTful API</span>
                <span>Current Environment: <span class="font-medium">{{ config('app.env') }}</span></span>
                </div>
                </div>
                </div>
                </div>
                </div>
                </x-app-layout>
