@props(['type' => 'sold', 'isDated' => true])

<div class="card rounded-md p-2 relative {{ $type === 'buy' ? 'bg-red-400' : 'bg-green-400' }} mb-1 flex flex-col m-2">

    {{-- 1st Floor --}}
    <div class="flex justify-between relative  text-lg">
        <div>
           A63476347 <!-- Unique ID -->
        </div>
        @if($isDated)
        <div>
            12-12-2024 <!-- Date -->
        </div>
        @endif
    </div>

    {{-- Second Floor --}}
    <div class="flex justify-between mt-2 relative ">
        <div class="font-bold text-lg"> <!-- Larger and bold text for time -->
            04:05 AM <!-- Time -->
        </div>
        <div class="font-bold text-lg bg-white rounded-md p-1  text-right"> <!-- Larger and bold text for amount -->
            XXXXXXXxxxx <!-- Amount -->
        </div>
    </div>
</div>
