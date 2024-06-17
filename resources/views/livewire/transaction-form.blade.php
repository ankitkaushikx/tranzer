<div>
  <form action="{{route('transactions.store')}}" method="post">
    @csrf
    {{-- Main Input --}}
    <div class="flex justify-between items-center flex-wrap">
      <div class="flex  items-center border border-gray-300 rounded bg-slate-700 w-100 flex-grow">
        <span class="px-2 text-gray-100 ">₹</span>
        <input type="number" name="amount" id="amount" class="flex-grow p-2 focus:outline-none @error('amount') ring-red-500 @enderror" placeholder="Amount" step="0.01">
      </div>
      @error('amount')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Details TextArea --}}
   <div class="mb-4 mt-1">
      <textarea name="detail" id="detail" rows="3" class="w-full p-2 border border-gray-300 rounded resize-y text-[1.1rem] focus:outline-none  @error('detail') ring-red-500 @enderror" placeholder="Add details..."></textarea>
      @error('detail')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    {{-- Transaction Type Selector and / Submit Button --}}
 <div class="flex items-center mb-4">
  <div class="flex items-center mr-4">
    <label class="inline-flex items-center bg-red-500 text-white px-2 py-1 rounded">
      <input type="radio" name="type" value="buy" class="form-radio text-black">
      <span class="ml-2">Buy</span>
    </label>
  </div>
  <div class="flex items-center mr-4">
    <label class="inline-flex items-center bg-green-500 text-white px-2 py-1 rounded">
      <input type="radio" name="type" value="sell" class="form-radio text-black " checked>
      <span class="ml-2">Sell</span>
    </label>
  </div>
  <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 active:bg-blue-700 focus:outline-none flex-grow">
    Submit
  </button>
</div>


  </form>
</div>


