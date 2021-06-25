<x-ui.atoms.card>
  <x-ui.atoms.card-header>
    <x-ui.atoms.card-title>
      Interface status
    </x-ui.atoms.card-title>
  </x-ui.atoms.card-header>
  <x-ui.atoms.card-body class="px-4 py-2">
    <div class="h-12 w-full flex flex-row space-x-2">
      <div class="w-full h-12 px-2 flex items-center space-x-2">
        <div class="bg-gray-100 rounded-sm h-8 w-10 flex items-center">
          <x-fontawesome.duotone.ethernet class="text-green-400 m-auto h-7 w-7"></x-fontawesome.duotone.ethernet>
        </div>
        <div class="text-4xl text-green-400 -mt-1 font-bold">
          {{ $interfaces->up }}
        </div>
        <div class="antialiased font-normal text-sm text-gray-400 tracking-wider uppercase">
          <div>Interfaces</div>
          <div class="-mt-1">UP</div>
        </div>
      </div>
      <div class="w-full h-12 px-2 flex items-center space-x-2">
        <div class="bg-gray-100 rounded-sm h-8 w-10 flex items-center">
          <x-fontawesome.duotone.ethernet class="text-red-400 m-auto h-7 w-7"></x-fontawesome.duotone.ethernet>
        </div>
        <div class="text-4xl text-red-400 -mt-1 font-bold">
          {{ $interfaces->down }}
        </div>
        <div class="antialiased font-normal text-sm text-gray-400 tracking-wider uppercase">
          <div>Interfaces</div>
          <div class="-mt-1">DOWN</div>
        </div>
      </div>
      <div class="w-full h-12 px-2 flex items-center space-x-2">
        <div class="bg-gray-100 rounded-sm h-8 w-10 flex items-center">
          <x-fontawesome.duotone.ethernet class="text-gray-400 m-auto h-7 w-7"></x-fontawesome.duotone.ethernet>
        </div>
        <div class="text-4xl text-gray-400 -mt-1 font-bold">
          {{ $interfaces->unknown }}
        </div>
        <div class="antialiased font-normal text-sm text-gray-400 tracking-wider uppercase">
          <div>Interfaces</div>
          <div class="-mt-1">UNKNOWN</div>
        </div>
      </div>
    </div>
  </x-ui.atoms.card-body>
</x-ui.atoms.card>
