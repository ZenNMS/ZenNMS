@Props([
  'device'
])

<x-ui.atoms.card>
  <x-ui.atoms.card-header>
    <x-ui.atoms.card-title>
      Polling Details
    </x-ui.atoms.card-title>
  </x-ui.atoms.card-header>
  <x-ui.atoms.card-body>
    <dl class="w-full">
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Last status check
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->last_check }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Last check duration
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->check_duration }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Next status check
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->next_check }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Last discovery
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->last_discovery }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Next discovery
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->next_discovery }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Last poll
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->last_poll }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Last poll duration
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->poll_duration }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Next poll
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->next_poll }}
        </dd>
      </div>
    </dl>
  </x-ui.atoms.card-body>
</x-ui.atoms.card>
