<x-app-layout>
    <x-slot name="title">
        {{ __('API Documentation - Wisata Pulau Jawa') }}
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h1 class="text-3xl font-bold text-gray-800 mb-8 border-b pb-4">{{ __("API Endpoints Documentation") }}</h1>

                    <div class="space-y-12">
                        <!-- Endpoint 1: Get All Daerahs -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">GET</span>
                                <h2 class="text-xl font-semibold text-gray-800">Get All Daerahs</h2>
                            </div>
                            
                            <div class="mb-4">
                                <p class="text-gray-600 mb-2">Endpoint:</p>
                                <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/daerahs</code>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">Description:</p>
                                <p class="text-gray-600">Retrieve all daerahs in Jawa Timur.</p>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">Example Response:</p>
                                <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>{
        "data": [
            {
                "id": 1,
                "nama_daerah": "Bangkalan"
            },
            {
                "id": 2,
                "nama_daerah": "Banyuwangi"
            }
        ]
    }</code></pre>
                            </div>

                            <div>
                                <p class="font-medium text-gray-700 mb-2">Try it:</p>
                                <div class="bg-gray-800 p-4 rounded-lg">
                                    <code class="text-green-400 font-mono text-sm">curl -X GET http://127.0.0.1:8000/api/daerahs</code>
                                </div>
                            </div>
                        </div>

                        <!-- Endpoint 2: Get Wisatas by Daerah ID -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">GET</span>
                                <h2 class="text-xl font-semibold text-gray-800">Get Wisatas by Daerah ID</h2>
                            </div>

                            <div class="mb-4">
                                <p class="text-gray-600 mb-2">Endpoint:</p>
                                <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/wisatas/daerah/{id_daerah}</code>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">Description:</p>
                                <p class="text-gray-600">Get all wisatas in a specific daerah by daerah ID.</p>
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
                "link_gmaps": "https://maps.app.goo.gl/tbgBonZiPJVN5wSZ6"
            }
        ]
    }</code></pre>
                            </div>

                            <div>
                                <p class="font-medium text-gray-700 mb-2">Try it:</p>
                                <div class="bg-gray-800 p-4 rounded-lg">
                                    <code class="text-green-400 font-mono text-sm">curl -X GET http://127.0.0.1:8000/api/wisatas/daerah/1</code>
                                </div>
                            </div>
                        </div>

                        <!-- Endpoint 3: Search Wisatas by Daerah Name -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">GET</span>
                                <h2 class="text-xl font-semibold text-gray-800">Search Wisatas by Daerah Name</h2>
                            </div>
                            
                            <div class="mb-4">
                                <p class="text-gray-600 mb-2">Endpoint:</p>
                                <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/wisatas/cari-daerah?nama_daerah={nama_daerah}</code>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">Description:</p>
                                <p class="text-gray-600">Search wisatas by daerah name.</p>
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
                "link_gmaps": "https://maps.app.goo.gl/tbgBonZiPJVN5wSZ6"
            }
        ]
    }</code></pre>
                            </div>

                            <div>
                                <p class="font-medium text-gray-700 mb-2">Try it:</p>
                                <div class="bg-gray-800 p-4 rounded-lg">
                                    <code class="text-green-400 font-mono text-sm">curl -X GET "http://127.0.0.1:8000/api/wisatas/cari-daerah?nama_daerah=Bangkalan"</code>
                                </div>
                            </div>
                        </div>

                        <!-- Endpoint 4: Get Wisata by Daerah ID and Wisata ID -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">GET</span>
                                <h2 class="text-xl font-semibold text-gray-800">Get Wisata by Daerah ID and Wisata ID</h2>
                            </div>
                            
                            <div class="mb-4">
                                <p class="text-gray-600 mb-2">Endpoint:</p>
                                <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/wisatas/daerah/{id_daerah}/wisata/{id}</code>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">Description:</p>
                                <p class="text-gray-600">Get specific wisata by daerah ID and wisata ID.</p>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">Example Response:</p>
                                <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>{
        "data": {
            "id": 1,
            "id_daerah": 1,
            "nama": "Geger Hill",
            "alamat": "Kesek, Kec. Labang, Kabupaten Bangkalan, Jawa Timur 69163",
            "rating": 4.2,
            "link_gmaps": "https://maps.app.goo.gl/tbgBonZiPJVN5wSZ6"
        }
    }</code></pre>
                            </div>

                            <div>
                                <p class="font-medium text-gray-700 mb-2">Try it:</p>
                                <div class="bg-gray-800 p-4 rounded-lg">
                                    <code class="text-green-400 font-mono text-sm">curl -X GET http://127.0.0.1:8000/api/wisatas/daerah/1/wisata/1</code>
                                </div>
                            </div>
                        </div>

                        <!-- Endpoint 5: Get All Wisatas -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">GET</span>
                                <h2 class="text-xl font-semibold text-gray-800">Get All Wisatas</h2>
                            </div>
                            
                            <div class="mb-4">
                                <p class="text-gray-600 mb-2">Endpoint:</p>
                                <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/wisatas</code>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">Description:</p>
                                <p class="text-gray-600">Retrieve all wisatas in Jawa Timur.</p>
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
                "link_gmaps": "https://maps.app.goo.gl/tbgBonZiPJVN5wSZ6"
            }
        ]
    }</code></pre>
                            </div>

                            <div>
                                <p class="font-medium text-gray-700 mb-2">Try it:</p>
                                <div class="bg-gray-800 p-4 rounded-lg">
                                    <code class="text-green-400 font-mono text-sm">curl -X GET http://127.0.0.1:8000/api/wisatas</code>
                                </div>
                            </div>
                        </div>

                        <!-- Endpoint 6: Get All Provinsis -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm font-medium">GET</span>
                                <h2 class="text-xl font-semibold text-gray-800">Get All Provinsis</h2>
                            </div>
                            
                            <div class="mb-4">
                                <p class="text-gray-600 mb-2">Endpoint:</p>
                                <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/provinsis</code>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">Description:</p>
                                <p class="text-gray-600">Retrieve all provinsis.</p>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">Example Response:</p>
                                <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>{
        "data": [
            {
                "id": 1,
                "nama_provinsi": "Jawa Timur"
            }
        ]
    }</code></pre>
                            </div>

                            <div>
                                <p class="font-medium text-gray-700 mb-2">Try it:</p>
                                <div class="bg-gray-800 p-4 rounded-lg">
                                    <code class="text-green-400 font-mono text-sm">curl -X GET http://127.0.0.1:8000/api/provinsis</code>
                                </div>
                            </div>
                        </div>

                        <!-- Endpoint 7: Create Wisata -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-blue-500 text-white rounded-full text-sm font-medium">POST</span>
                                <h2 class="text-xl font-semibold text-gray-800">Create Wisata</h2>
                            </div>
                            
                            <div class="mb-4">
                                <p class="text-gray-600 mb-2">Endpoint:</p>
                                <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">POST /api/wisatas</code>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">Description:</p>
                                <p class="text-gray-600">Create a new wisata.</p>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">Request Body:</p>
                                <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>{
        "id_daerah": 1,
        "nama": "Wisata Baru",
        "alamat": "Alamat wisata",
        "rating": 4.5,
        "link_gmaps": "https://maps.google.com/..."
    }</code></pre>
                            </div>

                            <div>
                                <p class="font-medium text-gray-700 mb-2">Try it:</p>
                                <div class="bg-gray-800 p-4 rounded-lg">
                                    <code class="text-green-400 font-mono text-sm">curl -X POST http://127.0.0.1:8000/api/wisatas </code>
                                </div>
                            </div>
                        </div>

                        <!-- Endpoint 8: Delete Wisata -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-red-500 text-white rounded-full text-sm font-medium">DELETE</span>
                                <h2 class="text-xl font-semibold text-gray-800">Delete Wisata</h2>
                            </div>
                            
                            <div class="mb-4">
                                <p class="text-gray-600 mb-2">Endpoint:</p>
                                <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">DELETE /api/wisatas/{id}</code>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">Description:</p>
                                <p class="text-gray-600">Delete a specific wisata by ID.</p>
                            </div>

                            <div>
                                <p class="font-medium text-gray-700 mb-2">Try it:</p>
                                <div class="bg-gray-800 p-4 rounded-lg">
                                    <code class="text-green-400 font-mono text-sm">curl -X DELETE http://127.0.0.1:8000/api/wisatas/1</code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>