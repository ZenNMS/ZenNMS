@extends('zen.app')

@section('page-header')
  <span class="font-semibold text-normal uppercase text-gray-700">
    <a href="{{ route('device.show', $device->id) }}">
      {{ $device->displayname ?? $device->hostname }}
    </a>
  </span>
  <span class="text-gray-300 px-2">
    <x-fontawesome.light.chevron-right class="w-4 h-4 text-gray-400" />
  </span>
  <span class="font-normal text-normal text-gray-700">Neighbours</span>
  <span class="text-gray-300 px-2">
    <x-fontawesome.light.chevron-right class="w-4 h-4 text-gray-400" />
  </span>
  <span class="font-normal text-normal text-gray-400">Neighbours list</span>
@endsection

@section('content')
  <div class="grid grid-cols-1 gap-4 px-5">
    <!-- Begin::Column-1 -->
    <div id="column-1">
      <x-ui.atoms.card>
        <x-ui.atoms.card-body class="px-2 pb-2">
          <table class="w-full table-fixed divide-y divide-gray-200 text-gray-600">
            <thead class="">
              <tr>
                <x-html.table-head-column class="">local port number</x-html.table-head-column>
                <x-html.table-head-column class="">index</x-html.table-head-column>
                <x-html.table-head-column class="">Chassis id subtype</x-html.table-head-column>
                <x-html.table-head-column class="">Chassis id</x-html.table-head-column>
                <x-html.table-head-column class="">Port id subtype</x-html.table-head-column>
                <x-html.table-head-column class="">Port id</x-html.table-head-column>
                <x-html.table-head-column class="">Port description</x-html.table-head-column>
                <x-html.table-head-column class="">Sys. name</x-html.table-head-column>
                <x-html.table-head-column class="w-4/12">Sys. description</x-html.table-head-column>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach($neighbours as $neighbour)
              <tr class="hover:bg-gray-100">
                <x-html.table-body-column class="whitespace-nowrap align-top">{{ $neighbour->local_port_number }}</x-html.table-body-column>
                <x-html.table-body-column class="whitespace-nowrap align-top">{{ $neighbour->index }}</x-html.table-body-column>
                <x-html.table-body-column class="whitespace-nowrap align-top">{{ $neighbour->chassis_id_subtype }}</x-html.table-body-column>
                <x-html.table-body-column class="whitespace-nowrap align-top">{{ $neighbour->chassis_id }}</x-html.table-body-column>
                <x-html.table-body-column class="whitespace-nowrap align-top">{{ $neighbour->port_id_subtype }}</x-html.table-body-column>
                <x-html.table-body-column class="whitespace-nowrap align-top">{{ $neighbour->port_id }}</x-html.table-body-column>
                <x-html.table-body-column class="whitespace-nowrap align-top">{{ $neighbour->port_description }}</x-html.table-body-column>
                <x-html.table-body-column class="whitespace-nowrap align-top">{{ $neighbour->sys_name }}</x-html.table-body-column>
                <x-html.table-body-column class="whitespace-normal break-words">{{ $neighbour->sys_description }}</x-html.table-body-column>
              </tr>
              @endforeach
            </tbody>
          </table>
        </x-ui.atoms.card-body>
        {{ $neighbours->links() }}
      </x-ui.atoms.card>
    </div>
    <!-- End::Column-1 -->
  </div>
@endsection
