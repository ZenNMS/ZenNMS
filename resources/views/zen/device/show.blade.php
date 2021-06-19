@extends('zen.app')

@section('page-header')
  <span class="font-semibold text-bold uppercase text-gray-700">Devices</span>
  <span class="text-gray-300 px-2">
    <x-fontawesome.light.chevron-right class="w-4 h-4 text-gray-400" />
  </span>
  <span class="font-normal text-normal uppercase text-gray-700">
    {{ $device->displayname ?? $device->hostname }}
  </span>
  <span class="text-gray-300 px-2">
    <x-fontawesome.light.chevron-right class="w-4 h-4 text-gray-400" />
  </span>
  <span class="font-normal text-normal text-gray-400">Device details</span>
@endsection

@section('content')
  <div class="grid grid-cols-3 gap-4 px-5">
    <!-- Begin::Column-1 -->
    <div id="col-1">
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
                <h3 class="text-2xl mb-1">WTG-FWF51E-FW01</h3>
                <div class="text-xl">
                  Fortiwifi-51e
                </div>
                <div class="flex">
                  <span>
                    <x-ui.atoms.circle-unknown-status class="h-5 w-5 -mb-1" />
                  </span>
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
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      Vendor
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->vendor->enterprise_name }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      Model
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->sysDescr }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      Hostname
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->hostname }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      IP Address
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->ip_address }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      DHCP
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->is_dynamic_ip }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      DNS
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->dns }}
                    </dd>
                  </div>
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
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      sysName
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->sysName }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      sysDescription
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->sysDescr }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      sysContact
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->sysContact }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      sysLocation
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->sysLocation }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      sysUptime
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->sysUpTime }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      sysServices
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      <x-ui.molecules.device-services services="{{ $device->sysServices }}" />
                    </dd>
                  </div>
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
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      Last status check
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->last_check }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      Last check duration
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->check_duration }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      Next status check
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->next_check }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      Last discovery
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->last_discovery }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      Next discovery
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->next_discovery }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      Last poll
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->last_poll }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      Last poll duration
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->poll_duration }}
                    </dd>
                  </div>
                  <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                      Next poll
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $device->next_poll }}
                    </dd>
                  </div>
                </dl>
              </section>
            </div>
          </div>
        </x-ui.atoms.card-body>
      </x-ui.atoms.card>
{{--      <x-ui.device.panel-details :device="$device" />--}}
{{--      <x-ui.device.panel-snmp-details :device="$device" />--}}
{{--      <x-ui.device.panel-polling-details :device="$device" />--}}
{{--      <div class="bg-white shadow overflow-hidden mr-4">--}}
{{--        <div class="px-4 py-5 sm:px-6">--}}
{{--          <h3 class="text-lg leading-6 font-medium text-gray-900">--}}
{{--            Rack--}}
{{--          </h3>--}}
{{--          <p class="mt-1 max-w-2xl text-sm text-gray-500">--}}
{{--            Personal details and application.--}}
{{--          </p>--}}
{{--        </div>--}}
{{--        <div class="border-t border-gray-200 flex py-4 px-4">--}}
{{--          <form action="">--}}
{{--            <div class="col-span-6 sm:col-span-3">--}}
{{--              <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>--}}
{{--              <x-ui.atoms.input-text name="name"></x-ui.atoms.input-text>--}}
{{--            </div>--}}

{{--          </form>--}}
{{--        </div>--}}
{{--      </div>--}}
    </div>
    <!-- End::Column-1 -->
    <!-- Begin::Column-2 -->
    <div id="col-2">
      <div>
        <pre>
@json($device, JSON_PRETTY_PRINT)
        </pre>
      </div>

    </div>
    <!-- End::Column-2 -->
    <!-- Begin::Column-3 -->
    <div id="col-3">
      <x-ui.atoms.card>
        <x-ui.atoms.card-header>
          <x-ui.atoms.card-title>
            Rack Map
          </x-ui.atoms.card-title>
        </x-ui.atoms.card-header>
        <x-ui.atoms.card-body>
          <x-ui.organisms.rack order-by="desc" side="FRONT" units="22" />
          <x-ui.organisms.rack side="REAR" units="22" />
        </x-ui.atoms.card-body>
      </x-ui.atoms.card>
    </div>
    <!-- End::Column-3 -->
  </div>

@endsection
