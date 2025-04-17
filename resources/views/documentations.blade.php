<x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h1 class="text-3xl font-bold text-gray-800 mb-8 border-b pb-4">{{ __("API Endpoints Documentation") }}</h1>
    
                    <div class="space-y-12">
                        <!-- Endpoint 1 -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm">GET</span>
                                <h2 class="text-xl font-semibold text-gray-800">{{ __("Get All Daerahs") }}</h2>
                            </div>
                            
                            <div class="mb-4">
                                <p class="text-gray-600 mb-2">{{ __("Endpoint:") }}</p>
                                <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/daerahs</code>
                            </div>
    
                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">{{ __("Description:") }}</p>
                                <p class="text-gray-600">{{ __("Retrieve all daerahs in Jawa Timur.") }}</p>
                            </div>
    
                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">{{ __("Example Response:") }}</p>
                                <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto">
    {
        "data": [
            {
                "id": 1,
                "nama_daerah": "Surabaya",
                "created_at": "2024-04-16T12:00:00.000000Z",
                "updated_at": "2024-04-16T12:00:00.000000Z"
            },
            {
                "id": 2,
                "nama_daerah": "Malang",
                "created_at": "2024-04-16T12:00:00.000000Z",
                "updated_at": "2024-04-16T12:00:00.000000Z"
            }
        ]
    }</pre>
                            </div>
    
                            <div>
                                <p class="font-medium text-gray-700 mb-2">{{ __("Try it:") }}</p>
                                <div class="bg-gray-800 p-4 rounded-lg">
                                    <code class="text-green-400 font-mono">curl -X GET http://127.0.0.1:8000/api/daerahs</code>
                                </div>
                            </div>
                        </div>
    
                        <!-- Endpoint 2 -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm">GET</span>
                                <h2 class="text-xl font-semibold text-gray-800">{{ __("Get Wisatas by Daerah ID") }}</h2>
                            </div>
    
                            <div class="mb-4">
                                <p class="text-gray-600 mb-2">{{ __("Endpoint:") }}</p>
                                <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/wisatas/daerah/{id_daerah}</code>
                            </div>
    
                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">{{ __("Example Response:") }}</p>
                                <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto">
    {
        "data": [
            {
                "id": 1,
                "nama_wisata": "Pantai Kenjeran",
                "deskripsi": "Pantai indah di Surabaya",
                "alamat": "Jl. Kenjeran No. 1",
                "id_daerah": 1,
                "created_at": "2024-04-16T12:00:00.000000Z",
                "updated_at": "2024-04-16T12:00:00.000000Z"
            }
        ]
    }</pre>
                            </div>
                        </div>
    
                        <!-- Endpoint 3 -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm">GET</span>
                                <h2 class="text-xl font-semibold text-gray-800">{{ __("Search Wisatas by Daerah Name") }}</h2>
                            </div>
                            
                            <div class="mb-4">
                                <p class="text-gray-600 mb-2">{{ __("Endpoint:") }}</p>
                                <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/wisatas/cari-daerah?nama_daerah={nama_daerah}</code>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">{{ __("Description:") }}</p>
                                <p class="text-gray-600">{{ __("Search wisatas by daerah name.") }}</p>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">{{ __("Example Response:") }}</p>
                                <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto">
    {
        "data": [
            {
                "id": 1,
                "nama_wisata": "Pantai Kenjeran",
                "deskripsi": "Pantai indah di Surabaya",
                "alamat": "Jl. Kenjeran No. 1",
                "id_daerah": 1
            },
            {
                "id": 2,
                "nama_wisata": "Taman Bungkul",
                "deskripsi": "Taman kota di Surabaya",
                "alamat": "Jl. Taman Bungkul",
                "id_daerah": 1
            }
        ]
    }</pre>
                            </div>

                            <div>
                                <p class="font-medium text-gray-700 mb-2">{{ __("Try it:") }}</p>
                                <div class="bg-gray-800 p-4 rounded-lg">
                                    <code class="text-green-400 font-mono">curl -X GET "http://127.0.0.1:8000/api/wisatas/cari-daerah?nama_daerah=Surabaya"</code>
                                </div>
                            </div>
                        </div>

                        <!-- Endpoint 4 -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm">GET</span>
                                <h2 class="text-xl font-semibold text-gray-800">{{ __("Get Wisata by Daerah ID and Wisata ID") }}</h2>
                            </div>
                            
                            <div class="mb-4">
                                <p class="text-gray-600 mb-2">{{ __("Endpoint:") }}</p>
                                <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/wisatas/daerah/{id_daerah}/wisata/{id}</code>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">{{ __("Description:") }}</p>
                                <p class="text-gray-600">{{ __("Get specific wisata by daerah ID and wisata ID.") }}</p>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">{{ __("Example Response:") }}</p>
                                <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto">
    {
        "data": {
            "id": 1,
            "nama_wisata": "Pantai Kenjeran",
            "deskripsi": "Pantai indah di Surabaya",
            "alamat": "Jl. Kenjeran No. 1",
            "id_daerah": 1,
            "created_at": "2024-04-16T12:00:00.000000Z",
            "updated_at": "2024-04-16T12:00:00.000000Z"
        }
    }</pre>
                            </div>

                            <div>
                                <p class="font-medium text-gray-700 mb-2">{{ __("Try it:") }}</p>
                                <div class="bg-gray-800 p-4 rounded-lg">
                                    <code class="text-green-400 font-mono">curl -X GET http://127.0.0.1:8000/api/wisatas/daerah/1/wisata/1</code>
                                </div>
                            </div>
                        </div>

                        <!-- Endpoint 5 -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-green-500 text-white rounded-full text-sm">GET</span>
                                <h2 class="text-xl font-semibold text-gray-800">{{ __("Get All Wisatas") }}</h2>
                            </div>
                            
                            <div class="mb-4">
                                <p class="text-gray-600 mb-2">{{ __("Endpoint:") }}</p>
                                <code class="block bg-gray-800 text-green-400 px-4 py-2 rounded-lg font-mono">GET /api/wisatas</code>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">{{ __("Description:") }}</p>
                                <p class="text-gray-600">{{ __("Retrieve all wisatas in Jawa Timur.") }}</p>
                            </div>

                            <div class="mb-4">
                                <p class="font-medium text-gray-700 mb-2">{{ __("Example Response:") }}</p>
                                <pre class="bg-gray-800 text-green-400 p-4 rounded-lg overflow-x-auto">
    {
        "data": [
            {
                "id": 1,
                "nama_wisata": "Pantai Kenjeran",
                "deskripsi": "Pantai indah di Surabaya",
                "alamat": "Jl. Kenjeran No. 1",
                "id_daerah": 1
            },
            {
                "id": 2,
                "nama_wisata": "Taman Bungkul",
                "deskripsi": "Taman kota di Surabaya",
                "alamat": "Jl. Taman Bungkul",
                "id_daerah": 1
            }
        ]
    }</pre>
                            </div>

                            <div>
                                <p class="font-medium text-gray-700 mb-2">{{ __("Try it:") }}</p>
                                <div class="bg-gray-800 p-4 rounded-lg">
                                    <code class="text-green-400 font-mono">curl -X GET http://127.0.0.1:8000/api/wisatas</code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>