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
  <span class="font-normal text-normal text-gray-700">Inventory</span>
  <span class="text-gray-300 px-2">
    <x-fontawesome.light.chevron-right class="w-4 h-4 text-gray-400" />
  </span>
  <span class="font-normal text-normal text-gray-400">Entities list</span>
@endsection

@section('content')
<div class="grid grid-cols-1 gap-4 px-5">
  <!-- Begin::Column-1 -->
  <div id="column-1">
    <x-ui.atoms.card class="px-2">
      <table class="min-w-full divide-y divide-gray-200 mb-2">
        <thead class="bg-white">
          <x-html.table-head-column>Entity</x-html.table-head-column>
          <x-html.table-head-column>Description</x-html.table-head-column>
          <x-html.table-head-column>Index</x-html.table-head-column>
          <x-html.table-head-column>Contained in</x-html.table-head-column>
          <x-html.table-head-column>Parent rel pos</x-html.table-head-column>
          <x-html.table-head-column>Hardware Rev.</x-html.table-head-column>
          <x-html.table-head-column>Firmware Rev.</x-html.table-head-column>
          <x-html.table-head-column>Software Rev.</x-html.table-head-column>
          <x-html.table-head-column>Manufacturer name</x-html.table-head-column>
          <x-html.table-head-column>Model name</x-html.table-head-column>
          <x-html.table-head-column>Replaceable</x-html.table-head-column>
        </thead>
        <tbody class="mt-4">
        @foreach($deviceEntities as $entity)
          <tr class="p-2 hover:bg-gray-50 hover:rounded-sm {{ !$loop->last ? 'border-b border-gray-100' : '' }} ">
            <x-html.table-body-column>
              <x-ui.molecules.entity-class class-type="{{ $entity->class }}"
                                           class-name="{{ $entity->class() }}"
                                           name="{{ $entity->name ?? $entity->model_name }}"
                                           serial-number="{{ $entity->serial_num }}">
              </x-ui.molecules.entity-class>
            </x-html.table-body-column>
            <x-html.table-body-column class="align-top">{{ $entity->descr }}</x-html.table-body-column>
            <x-html.table-body-column class="align-top">{{ $entity->ent_physical_index }}</x-html.table-body-column>
            <x-html.table-body-column class="align-top">{{ $entity->contained_in }}</x-html.table-body-column>
            <x-html.table-body-column class="align-top">{{ $entity->parent_rel_pos }}</x-html.table-body-column>
            <x-html.table-body-column class="align-top">{{ $entity->hardware_rev }}</x-html.table-body-column>
            <x-html.table-body-column class="align-top">{{ $entity->firmware_rev }}</x-html.table-body-column>
            <x-html.table-body-column class="align-top">{{ $entity->software_rev }}</x-html.table-body-column>
            <x-html.table-body-column class="align-top">{{ $entity->mfg_name }}</x-html.table-body-column>
            <x-html.table-body-column class="align-top">{{ $entity->model_name }}</x-html.table-body-column>
            <x-html.table-body-column>
              @if($entity->is_fru === 1)
                <x-ui.atoms.label type="success">YES</x-ui.atoms.label>
              @else
                <x-ui.atoms.label type="default">NO</x-ui.atoms.label>
              @endif
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
