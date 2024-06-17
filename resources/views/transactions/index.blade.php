<x-app-layout>
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Transactions') }}
        </h2>
    </x-slot>
  @foreach ($transactions as $transaction )
    <li>{{$transaction}}</li>
  @endforeach
</x-app-layout>