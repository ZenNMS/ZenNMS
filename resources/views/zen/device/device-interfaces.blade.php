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
      <x-ui.atoms.card class="mb-20">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-white">
            <x-html.table-head-column>Name</x-html.table-head-column>
            <x-html.table-head-column>Alias</x-html.table-head-column>
            <x-html.table-head-column>Interface Type</x-html.table-head-column>
            <x-html.table-head-column>Interface Speed /<br>MTU</x-html.table-head-column>
            <x-html.table-head-column>Physical Address</x-html.table-head-column>
            <x-html.table-head-column>Admin status</x-html.table-head-column>
            <x-html.table-head-column>Operational status</x-html.table-head-column>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach($interfaces as $interface)
            <tr>
              <x-html.table-body-column>
                <a href="{{ route('interface.show', $interface->id) }}">
                  {{ $interface->name }}
                </a>
              </x-html.table-body-column>
              <x-html.table-body-column>
                {{ $interface->alias }}
              </x-html.table-body-column>
              <x-html.table-body-column>
                {{ $interface->interfaceType->type }}
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
        </table>
      </x-ui.atoms.card>
    </div>
    <!-- End::Column-1 -->
  </div>
@endsection
