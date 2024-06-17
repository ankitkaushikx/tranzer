<x-app-layout>
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Transactions') }}
        </h2>
    </x-slot>
    <div class="p-1 ">
     {{$transactions->links()}}
     </div>
  @foreach ($transactions as $transaction )
 <x-transaction-card :transaction="$transaction" />
  @endforeach
</x-app-layout>