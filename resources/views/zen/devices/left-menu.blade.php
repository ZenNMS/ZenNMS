<section class="px-5 mb-10">
  <div class="font-semibold text-gray-500 tracking-wider mb-5">
    FILTER
  </div>
  <form action="{{ route('device.index') }}" method="post">
    @csrf
    <div class="mb-4 text-sm">
      <label class="block mb-1 font-normal text-gray-500 tracking-wider" for="hostname">Hostname</label>
      <input class="w-full h-8 px-2 text-gray-700 placeholder-gray-600 border rounded-md focus:shadow-outline"
             id="hostname"
             name="hostname"
             type="text"
             placeholder="Hostname"/>
    </div>
    <div class="mb-4 text-sm">
      <label class="block mb-1 font-normal text-gray-500 tracking-wider mb-1" for="vendor">Vendor</label>
      <input class="w-full h-8 px-2 text-gray-700 placeholder-gray-600 border rounded-md focus:shadow-outline"
             id="vendor"
             name="vendor"
             type="text"
             placeholder="Vendor"/>
    </div>
    <div class="mb-4 text-sm">
      <label class="block mb-1 font-normal text-gray-500 tracking-wider mb-1" for="ip_address">IP Address</label>
      <input class="w-full h-8 px-2 text-gray-700 placeholder-gray-600 border rounded-md focus:shadow-outline"
             id="ip_address"
             name="ip_address"
             type="text"
             placeholder="IP Addresss"/>
    </div>
    <button
      class="mt-4 w-full inline-flex items-center place-content-center h-10 px-5 text-green-900 transition-colors duration-150 bg-green-400 rounded-md focus:shadow-outline hover:bg-green-700 hover:text-white"
      type="submit">
      <div class="block flex items-center space-x-2">
        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="magnifying-glass" class="h-5 w-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor" d="M507.3 484.7l-141.5-141.5C397 306.8 415.1 259.7 415.1 208c0-114.9-93.13-208-208-208S-.0002 93.13-.0002 208S93.12 416 207.1 416c51.68 0 98.85-18.96 135.2-50.15l141.5 141.5C487.8 510.4 491.9 512 496 512s8.188-1.562 11.31-4.688C513.6 501.1 513.6 490.9 507.3 484.7zM208 384C110.1 384 32 305 32 208S110.1 32 208 32S384 110.1 384 208S305 384 208 384z"></path>
        </svg>
        <span>Search</span>
      </div>
    </button>
  </form>
</section>
