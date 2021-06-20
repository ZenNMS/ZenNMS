@extends('zen.app')

@section('page-header')
  <span class="font-semibold text-normal uppercase text-gray-700">
    <a href="{{ route('device.show', $device->id) }}">
      {{ $device->displayname ?? $device->hostname }}
    </a>
  </span>
  <span class="text-gray-300 px-2">
    <x-fontawesome.light.chevron-right class="w-4 h-4 text-gray-400"></x-fontawesome.light.chevron-right>
  </span>
  <span class="font-normal text-normal text-gray-700">Interfaces</span>
  <span class="text-gray-300 px-2">
    <x-fontawesome.light.chevron-right class="w-4 h-4 text-gray-400"></x-fontawesome.light.chevron-right>
  </span>
  <span class="font-normal text-normal text-gray-400">Interface list</span>
@endsection

@section('content')
  <div class="grid grid-cols-1 gap-4 px-5">
    <!-- Begin::Column-1 -->
    <div id="column-1">
      <x-ui.atoms.card class="px-2">
        <table class="min-w-full divide-y divide-gray-200 text-gray-600">
          <thead class="bg-white">
            <tr>
              <x-html.table-head-column>Interface Name</x-html.table-head-column>
              <x-html.table-head-column>Interface Alias</x-html.table-head-column>
              <x-html.table-head-column>Description</x-html.table-head-column>
              <x-html.table-head-column>Interface Speed /<br>MTU</x-html.table-head-column>
              <x-html.table-head-column>Physical Address</x-html.table-head-column>
              <x-html.table-head-column>Admin status</x-html.table-head-column>
              <x-html.table-head-column>Operational status</x-html.table-head-column>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach($interfaces as $interface)
            <tr class="px-2">
              <x-html.table-body-column>
                <div class="flex space-x-3">
                  <div class="flex shrink-0 items-center h-10 w-10 px-2 bg-gray-100 rounded-sm static" title="{{ $interface->interfaceType->type }}">
                    @php
                      $isActive = $interface->admin_status === 1 && $interface->operational_status === 1;
                    @endphp
                    @switch($interface->type_id)
                      @case(6)
                        <x-fontawesome.duotone.ethernet class="shrink-0 h-6 w-6 {{ $isActive ? 'text-green-500' : 'text-gray-400' }}">
                        </x-fontawesome.duotone.ethernet>
                        @break
                      @case(135)
                        <x-fontawesome.duotone.layer-2 class="shrink-0 h-6 w-6 {{ $isActive ? 'text-green-400' : 'text-gray-400' }}">
                        </x-fontawesome.duotone.layer-2>
                        @break
                      @case(136)
                        <x-fontawesome.duotone.layer-3 class="shrink-0 h-6 w-6 {{ $isActive ? 'text-green-400' : 'text-gray-400' }}">
                        </x-fontawesome.duotone.layer-3>
                        @break
                      @default
                    @endswitch
                  </div>
                  <div class="flex flex-col">
                    <div class="text-gray-500">
                      <a href="{{ route('interface.show', $interface->id) }}">
                        {{ $interface->name }}
                      </a>
                    </div>
                    <div class="text-sm text-gray-500">
                      <span class="text-gray-400 font-semibold">MAC: </span> {{ $interface->physical_address }}
                    </div>
                  </div>
                </div>
              </x-html.table-body-column>
              <x-html.table-body-column>
                {{ $interface->alias }}
              </x-html.table-body-column>
              <x-html.table-body-column>
                {{ $interface->description }}
              </x-html.table-body-column>
              <x-html.table-body-column>
                <div class="text-sm text-gray-900" title="Interface Speed">
                  {{ $interface->speed }} Mbps
                </div>
                <div class="text-sm text-gray-500" title="MTU">
                  {{ $interface->mtu }}
                </div>
              </x-html.table-body-column>
              <x-html.table-body-column>
                {{ $interface->physical_address }}
              </x-html.table-body-column>
              <x-html.table-body-column>
                <x-ui.molecules.interface-admin-status status="{{ $interface->admin_status }}" />
              </x-html.table-body-column>
              <x-html.table-body-column>
                <x-ui.molecules.interface-oper-status status="{{ $interface->operational_status }}" />
              </x-html.table-body-column>
            </tr>
          @endforeach
          </tbody>
          <tfooter>

          </tfooter>
        </table>
        <div class="py-4 px-10">
        {{ $interfaces->links() }}
        </div>
      </x-ui.atoms.card>
    </div>
    <!-- End::Column-1 -->
  </div>
@endsection
