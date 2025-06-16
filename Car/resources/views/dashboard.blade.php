<!-- resources/views/dashboard.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center px-4 py-3">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Chào mừng bạn') }}
            </h2>
            <a
            href="{{ url('/cars') }}"
            >
                 <button style="
                    padding: 8px 16px;
                    border: 1px solid #ccc;
                    background-color: #f8f8f8;
                    color: #222;
                    border-radius: 5px;
                    font-weight: 500;
                    cursor: pointer;
                    transition: all 0.2s;">
                    🚗 Xem danh sách xe
                </button>
            </a>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="xehoi.jpg" alt="AUTO" class="w-full h-auto">
                </div>
            </div>
        </div>
    </x-slot>

</x-app-layout>