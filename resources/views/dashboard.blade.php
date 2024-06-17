<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 text-gray-900 dark:text-gray-100">
                    {{-- Include the Livewire transaction form component --}}
                    <livewire:transaction-form />
                </div>
            </div>

            {{-- Today's Transactions Section --}}
            <div class="bg-slate-200 p-2">
                <div class="flex justify-between bg-yellow-500 rounded-md p-3">
                        <div class="text-md sm:text-md"> <!-- Larger size on larger screens, smaller on small screens -->
        Today's Transactions
    </div>
                    <div class="text-md flex">
                        <button class="btn flex items-center bg-white rounded-md p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v3h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h2V3zm2 7h10v7H5V10zm2 1a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2H7z" clip-rule="evenodd" />
                            </svg>
                            Download
                        </button>
                        <a href="" class="btn btn-border-green ml-2 self-center text-md flex-grow">View All</a>
                    </div>
                </div>

                {{-- Loop through transactions and display transaction cards --}}
                @foreach ($transactions as $transaction)
                    <x-transaction-card :transaction="$transaction" />
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
