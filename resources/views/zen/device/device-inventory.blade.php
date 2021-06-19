@extends('zen.app')

@section('page-header')
  <span class="font-semibold text-normal uppercase text-gray-700">
    <a href="{{ route('device.show', $device->id) }}">
      {{ $device->displayname ?? $device->hostname }}
    </a>
  </span>
  <span class="text-gray-300 px-2">
    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="chevron-right" class="w-4 h-4 text-gray-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
      <path fill="currentColor" d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"></path>
    </svg>
  </span>
  <span class="font-normal text-normal text-gray-700">Inventory</span>
  <span class="text-gray-300 px-2">
    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="chevron-right" class="w-4 h-4 text-gray-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
      <path fill="currentColor" d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"></path>
    </svg>
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
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Entity</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Index</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contained in</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Parent rel pos</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hardware Rev.</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Firmware Rev.</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Software Rev.</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Manufacturer name</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Model name</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Replaceable</th>
        </thead>
        <tbody class="mt-4">
        @foreach($deviceEntities as $entity)
          <tr class="p-2 hover:bg-gray-50 hover:rounded-sm {{ !$loop->last ? 'border-b border-gray-100' : '' }} ">
            <td class="px-4 py-4 whitespace-nowrap">
              <x-ui.molecules.entity-class
                class-type="{{ $entity->class }}"
                class-name="{{ $entity->class() }}"
                name="{{ $entity->name }}"
                serial-number="{{ $entity->serial_num }}">
              </x-ui.molecules.entity-class>
            </td>
            <td class="px-4 py-4 whitespace-nowrap">{{ $entity->descr }}</td>
            <td class="px-4 py-4 whitespace-nowrap">{{ $entity->ent_physical_index }}</td>
            <td class="px-4 py-4 whitespace-nowrap">{{ $entity->contained_in }}</td>
            <td class="px-4 py-4 whitespace-nowrap">{{ $entity->parent_rel_pos }}</td>
            <td class="px-4 py-4 whitespace-nowrap">{{ $entity->hardware_rev }}</td>
            <td class="px-4 py-4 whitespace-nowrap">{{ $entity->firmware_rev }}</td>
            <td class="px-4 py-4 whitespace-nowrap">{{ $entity->software_rev }}</td>
            <td class="px-4 py-4 whitespace-nowrap">{{ $entity->mfg_name }}</td>
            <td class="px-4 py-4 whitespace-nowrap">{{ $entity->model_name }}</td>
            <td class="px-4 py-4 whitespace-nowrap">
              @if($entity->is_fru === 1)
                <x-ui.atoms.label type="success">YES</x-ui.atoms.label>
              @else
                <x-ui.atoms.label type="default">NO</x-ui.atoms.label>
              @endif
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </x-ui.atoms.card>
  </div>
  <!-- End::Column-1 -->
</div>
@endsection
