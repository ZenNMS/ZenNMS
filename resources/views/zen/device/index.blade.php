@extends('zen.app')

@section('page-header')

@endsection

@section('content')
<div class="grid grid-cols-1 gap-4 px-5">
  <!-- Begin::Column-1 -->
  <div id="column-1">
    <x-ui.atoms.card>
      <table class="min-w-full divide-y divide-gray-200 text-gray-600">
        <thead class="bg-white">
          <tr>
            <x-html.table-head-column>Device</x-html.table-head-column>
            <x-html.table-head-column>Vendor</x-html.table-head-column>
            <x-html.table-head-column>IP Address</x-html.table-head-column>
            <x-html.table-head-column>Type</x-html.table-head-column>
{{--            <x-html.table-head-column></x-html.table-head-column>--}}
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach($devices as $device)
          <tr class="hover:bg-gray-50 px-2">
            <x-html.table-body-column>
              <div class="flex flex-row space-x-4">
                <div class="rounded-sm bg-gray-100 p-2">
                  <img src="{{ asset('/img/vendors/24/'.$device->vendor_id.'.png') }}" alt="{{ $device->vendor->enterprise_name }} logo">
                </div>
                <div class="flex flex-col">
                  <div class="font-semibold text-green-500">
                    <a href="{{ route('device.show', $device->id) }}">{{ $device->hostname }}</a>
                  </div>
                  <div>

                  </div>
                </div>
              </div>
            </x-html.table-body-column>
            <x-html.table-body-column>{{ $device->vendor->enterprise_name }}</x-html.table-body-column>
            <x-html.table-body-column>{{ $device->ip_address }}</x-html.table-body-column>
            <x-html.table-body-column>
              @switch($device->type_id)
                @case(2)
                  <i class="fal fa-shield-check fa-fw mr-2"></i>
                  @break
                @case('IP Camera')
                  <i class="fal fa-cctv fa-fw mr-2"></i>
                  @break
                @case('Server')
                  <i class="fal fa-server fa-fw mr-2"></i>
                  @break
                @case('Printer')
                  <i class="fal fa-print fa-fw mr-2"></i>
                  @break
                @case(8)
                  <i class="fal fa-wifi fa-fw mr-2"></i>
                  @break
              @endswitch
              {{ $device->type->type }}
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
