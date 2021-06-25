<x-ui.atoms.card>
  <x-ui.atoms.card-body class="pb-0">
    <div class="flex flex-col w-full">
      <div class="border-b border-bottom-dark">
        <section>
          <div class="px-8 py-4 flex flex-col w-full">
            <div class="flex">
              <span class="w-20 mr-4">
                <img
                  alt="{{ $device->vendor->enterprise_name }} logo"
                  src="{{ asset('img/vendors/96/'.$device->vendor_id.'.png') }}"
                  height="64"
                  width="64">
              </span>
              <span class="tracking-wider">
                <h3 class="text-2xl mb-1">{{ $device->hostname }}</h3>
                <div class="text-xl mb-1">
                  OS6450-P24
                </div>
                <div class="flex">
                  <span>{{ $device->ip_address }}</span>
                </div>
              </span>
            </div>
          </div>
        </section>
      </div>
      <div class="border-b border-bottom-dark">
        <section class="py-3">
          <div class="ml-6 pb-3">
            <h3 class="font-semibold tracking-wider text-gray-600 uppercase">
              Device details
            </h3>
          </div>
          <dl class="w-full">
            <x-ui.molecules.description-list-item term="Vendor">
              {{ $device->vendor->enterprise_name }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="Model">
              Alcatel-Lucent OS6450-P24
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="Hostname">
              {{ $device->hostname }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="IP Address">
              {{ $device->ip_address }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="DHCP">
              {{ $device->is_dynamic_ip }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="DNS">
              {{ $device->dns }}
            </x-ui.molecules.description-list-item>
          </dl>
        </section>
      </div>
      <div class="border-b border-bottom-dark">
        <section class="py-3">
          <div class="ml-6 pb-3">
            <h3 class="font-semibold tracking-wider text-gray-600 uppercase">
              SNMP details
            </h3>
          </div>
          <dl class="w-full">
            <x-ui.molecules.description-list-item term="sysName">
              {{ $device->sysName }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="sysDescription">
              {{ $device->sysDescr }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="sysContact">
              {{ $device->sysContact }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="sysLocation">
              {{ $device->sysLocation }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="sysUptime">
              {{ $device->sysUpTime }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="sysServices">
              <x-ui.molecules.device-services services="{{ $device->sysServices }}" />
            </x-ui.molecules.description-list-item>
          </dl>
        </section>
      </div>
      <div class="">
        <section class="py-3">
          <div class="ml-6 pb-3">
            <h3 class="font-semibold tracking-wider text-gray-600 uppercase">
              Polling details
            </h3>
          </div>
          <dl class="w-full">
            <x-ui.molecules.description-list-item term="Last status check">
              {{ $device->last_check }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="Last check duration">
              {{ $device->check_duration }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="Next status check">
              {{ $device->next_check }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="Last discovery">
              {{ $device->last_discovery }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="Next discovery">
              {{ $device->next_discovery }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="Last poll">
              {{ $device->last_poll }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="Last poll duration">
              {{ $device->poll_duration }}
            </x-ui.molecules.description-list-item>
            <x-ui.molecules.description-list-item term="Next poll">
              {{ $device->next_poll }}
            </x-ui.molecules.description-list-item>
          </dl>
        </section>
      </div>
    </div>
  </x-ui.atoms.card-body>
</x-ui.atoms.card>
