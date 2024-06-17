<div>
  <form action="" method="post">
    {{-- Main Input --}}
    <div class="flex justify-between items-center">
      <div class="flex items-center border border-gray-300 rounded bg-slate-700 flex-grow">
        <span class="px-2 text-gray-100 ">₹</span>
        <input type="number" name="amount" id="amount" class="flex-grow p-2 focus:outline-none" placeholder="Amount" step="0.01">
      </div>
    </div>

    {{-- Details TextArea --}}
   <div class="mb-4 mt-1">
      <textarea name="details" id="details" rows="3" class="w-full p-2 border border-gray-300 rounded resize-y text-[1.1rem] focus:outline-none" placeholder="Add details..."></textarea>
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


