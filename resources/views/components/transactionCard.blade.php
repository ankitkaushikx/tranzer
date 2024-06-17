@props(['transaction'])

<div class="card rounded-md p-2 relative {{ $transaction->type === 'buy' ? 'bg-red-400' : 'bg-green-400' }} mb-1 flex flex-col m-2">

    {{-- 1st Floor --}}
    <div class="flex justify-between relative  text-lg">
        <div>
           {{$transaction->id}}
        </div>
       
        <div>
           {{$transaction->created_at}}
        </div>
     
    </div>

    {{-- Second Floor --}}
    <div class="flex justify-between mt-2 relative ">
        <div class="font-bold text-lg"> <!-- Larger and bold text for time -->
            04:05 AM <!-- Time -->
        </div>
        <div class="font-bold text-lg bg-white rounded-md p-1  text-right"> <!-- Larger and bold text for amount -->
           {{$transaction->amount}}
        </div>
    </div>
</div>
