<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <!-- Left side - Dashboard Title -->
            <h2 class="font-semibold text-xl text-gray-800">
                {{ __('API Gateway Dashboard') }}
            </h2>

            <!-- Right side - Navigation Buttons -->
            <div class="flex space-x-4"> <!-- space-x-4 adds horizontal spacing between buttons -->
                <button class="px-4 text-gray-800 font-semibold py-2 rounded transition">
                    {{ __("Keys") }}
                </button>
                <a href="{{ route('documentations') }}" class="px-4 hover:bg-gray-100 text-gray-800 font-semibold py-2 rounded transition">
                    {{ __("Documentations") }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-col items-center gap-4"> <!-- Added gap-4 for spacing -->

                <!-- Content Field - 80% width -->
                <div class="flex flex-row w-full md:w-4/5 m-1 p-6 text-gray-900 items-center justify-between bg-white rounded-lg">
                    <div class="flex flex-col py-2">
                        <h1 class="text-gray-800 font-bold text-xl">
                            {{ __("Your API Keys: ") }}
                        </h1>
                    </div>
                    <div class="flex space-x-4"> <!-- space-x-4 adds horizontal spacing between buttons -->
                        <button class="px-4 hover:bg-blue-400 bg-blue-300 text-gray-800 font-semibold py-2 rounded transition">
                            {{ __("Generate A New Key") }}
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>