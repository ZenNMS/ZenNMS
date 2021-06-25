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
  <span class="font-normal text-normal text-gray-700">Wireless Access Points</span>
  <span class="text-gray-300 px-2">
    <x-fontawesome.light.chevron-right class="w-4 h-4 text-gray-400"></x-fontawesome.light.chevron-right>
  </span>
  <span class="font-normal text-normal text-gray-400">Wireless Access Points list</span>
@endsection

@section('content')
<div class="grid grid-cols-1 gap-4 px-5">
  <!-- Begin::Column-1 -->
  <div id="column-1">
    <x-ui.atoms.card class="px-2">
      <table class="min-w-full divide-y divide-gray-200 text-gray-600">
        <thead class="bg-white">
          <tr>
            <x-html.table-head-column>Name</x-html.table-head-column>
            <x-html.table-head-column>IP Address</x-html.table-head-column>
            <x-html.table-head-column>Physical Address</x-html.table-head-column>
            <x-html.table-head-column>Location</x-html.table-head-column>
            <x-html.table-head-column>Admin status</x-html.table-head-column>
            <x-html.table-head-column>Model</x-html.table-head-column>
            <x-html.table-head-column>Uptime</x-html.table-head-column>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach($access_points as $wap)
          <tr class="px-2 hover:bg-gray-50">
            <x-html.table-body-column>
              <a class="group" href="{{ route('wap.show', $wap->id) }}">
                <div class="flex items-start space-x-1">
                  <div class="flex items-center rounded-m bg-gray-50 h-10 w-10 p-2" title="{{ $wap->name }}">
                    <x-fontawesome.duotone.wifi class="h-6 w-6 text-gray-500 {{ $wap->admin_status === 1 ? 'text-green-400' : 'text-danger-400' }}" />
                  </div>
                  <div class="flex flex-col -mt-1 px-4">
                    <div class="text-normal text-green-400 font-normal">
                      {{ $wap->name }}
                    </div>
                    <div class="text-gray-500 text-xs">
                      @if($wap->serial_number !== '')
                        <span class="font-semibold text-gray-400">S/N</span>: {{ $wap->serial_number }}
                      @endif
                    </div>
                  </div>
                </div>
              </a>
            </x-html.table-body-column>
            <x-html.table-body-column>
              {{ $wap->ip_address }}
            </x-html.table-body-column>
            <x-html.table-body-column>
              {{ $wap->physical_address }}
            </x-html.table-body-column>
            <x-html.table-body-column>
              {{ $wap->location }}
            </x-html.table-body-column>
            <x-html.table-body-column>
              <x-ui.atoms.label class="font-semibold" type="{{ $wap->admin_status === 1 ? 'success' : 'danger' }}">
                {{ $wap->admin_status === 1 ? 'Up' : 'Down' }}
              </x-ui.atoms.label>
            </x-html.table-body-column>
            <x-html.table-body-column>
              <div class="flex flex-col">
                <div>{{ $wap->model }}</div>
              </div>
            </x-html.table-body-column>
            <x-html.table-body-column>
              {{ $wap->uptime }}
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
