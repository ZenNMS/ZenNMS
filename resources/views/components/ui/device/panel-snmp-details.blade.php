@Props([
  'device'
])

<x-ui.atoms.card>
  <x-ui.atoms.card-header>
    <x-ui.atoms.card-title>
      SNMP Details
    </x-ui.atoms.card-title>
  </x-ui.atoms.card-header>
  <x-ui.atoms.card-body>
    <dl class="w-full">
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          sysName
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->sysName }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          sysDescription
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->sysDescr }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          sysContact
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->sysContact }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          sysLocation
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->sysLocation }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          sysUptime
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $device->sysUpTime }}
        </dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          sysServices
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <x-ui.molecules.device-services services="{{ $device->sysServices }}" />
        </dd>
      </div>
    </dl>
  </x-ui.atoms.card-body>
</x-ui.atoms.card>
