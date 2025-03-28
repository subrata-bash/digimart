<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button
                    style="background: green; color: white; padding: 10px; border-radius: 5px; cursor: pointer;"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    Logout
                </button>
            </form>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in as Super Admin") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
