@Props([
'device'
])

<x-ui.atoms.card>
  <x-ui.atoms.card-header>
    <x-ui.atoms.card-title>
      Device Details
    </x-ui.atoms.card-title>
  </x-ui.atoms.card-header>
  <x-ui.atoms.card-body>
    <dl class="w-full">
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Vendor
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->vendor_id }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Model
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->sysDescr }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Hostname
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->hostname }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          IP Address
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->ip_address }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          DHCP
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->is_dynamic_ip }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          DNS
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->dns }}
        </dd>
      </div>
    </dl>
  </x-ui.atoms.card-body>
</x-ui.atoms.card>
