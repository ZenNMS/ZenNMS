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
      <x-ui.organisms.device.details-card :device="$device" />
    </div>
    <!-- End::Column-1 -->
    <!-- Begin::Column-2 -->
    <div id="col-2">
      @if($device->interfaces_count > 0)
      <x-ui.organisms.device.interface-status-card :interfaces="$interfaces" />
      @endif
    </div>
    <!-- End::Column-2 -->
    <!-- Begin::Column-3 -->
    <div id="col-3">
      <x-ui.atoms.card>
        <x-ui.atoms.card-body class="px-4 antialiased text-sm text-gray-400">
        <pre class="">
@json($device, JSON_PRETTY_PRINT)
        </pre>
        </x-ui.atoms.card-body>
      </x-ui.atoms.card>
    </div>
    <!-- End::Column-3 -->
  </div>

@endsection
