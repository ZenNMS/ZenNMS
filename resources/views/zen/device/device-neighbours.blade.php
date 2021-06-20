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
        <table>
          <thead>
            <tr>
              <x-html.table-head-column>local port number</x-html.table-head-column>
              <x-html.table-head-column>index</x-html.table-head-column>
              <x-html.table-head-column>Chassis id subtype</x-html.table-head-column>
              <x-html.table-head-column>Chassis id</x-html.table-head-column>
              <x-html.table-head-column>Port id subtype</x-html.table-head-column>
              <x-html.table-head-column>Port id</x-html.table-head-column>
              <x-html.table-head-column>Port description</x-html.table-head-column>
              <x-html.table-head-column>Sys. name</x-html.table-head-column>
              <x-html.table-head-column>Sys. description</x-html.table-head-column>
            </tr>
          </thead>
          <tbody>
            @foreach($neighbours as $neighbour)
            <tr>
              <x-html.table-body-column>{{ $neighbour->local_port_number }}</x-html.table-body-column>
              <x-html.table-body-column>{{ $neighbour->index }}</x-html.table-body-column>
              <x-html.table-body-column>{{ $neighbour->chassis_id_subtype }}</x-html.table-body-column>
              <x-html.table-body-column>{{ $neighbour->chassis_id }}</x-html.table-body-column>
              <x-html.table-body-column>{{ $neighbour->port_id_subtype }}</x-html.table-body-column>
              <x-html.table-body-column>{{ $neighbour->port_id }}</x-html.table-body-column>
              <x-html.table-body-column>{{ $neighbour->port_description }}</x-html.table-body-column>
              <x-html.table-body-column>{{ $neighbour->sys_name }}</x-html.table-body-column>
              <x-html.table-body-column>{{ $neighbour->sys_description }}</x-html.table-body-column>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $neighbours->links() }}
      </x-ui.atoms.card>
    </div>
    <!-- End::Column-1 -->
  </div>
@endsection
