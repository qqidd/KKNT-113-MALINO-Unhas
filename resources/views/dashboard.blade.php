<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-6">
                <div class="p-6 bg-white shadow-md rounded-lg">
                    <h3 class="text-lg font-bold">Total Users</h3>
                    <p class="text-gray-600">1,234 Users</p>
                </div>
                <div class="p-6 bg-white shadow-md rounded-lg">
                    <h3 class="text-lg font-bold">Revenue</h3>
                    <p class="text-gray-600">$12,345</p>
                </div>
                <div class="p-6 bg-white shadow-md rounded-lg">
                    <h3 class="text-lg font-bold">Orders</h3>
                    <p class="text-gray-600">567 Orders</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>