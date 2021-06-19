@extends('zen.app')

@section('page-header')
  <span class="font-semibold text-2xl text-gray-700">Interfaces</span>
  <span class="text-gray-300 px-4">|</span>
  <span class="font-normal text-xl text-gray-400">Interfaces list</span>
@endsection

@section('content')
  <div class="grid grid-cols-1 gap-4 px-5">
    <!-- Begin::Column-1 -->
    <div id="column-1">
      <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-white">
{{--              <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                id--}}
{{--              </td>--}}
{{--              <td scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                device_id--}}
{{--              </td>--}}
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                alias
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Interface type
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Interface speed / MTU
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                physical_address
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Admin status
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                operational status
              </th>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach($interfaces as $interface)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <a href="{{ route('interface.show', $interface->id) }}">
                    {{ $interface->name }}
                  </a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  {{ $interface->alias }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  {{ $interface->interfaceType->type }}
                </td>
                <td class="px-6 py-2 whitespace-nowrap">
                  <div class="text-sm text-gray-900" title="Interface Speed">
                    {{ $interface->speed }} Mbps
                  </div>
                  <div class="text-sm text-gray-500" title="MTU">
                    {{ $interface->mtu }}
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  {{ $interface->physical_address }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <x-ui.molecules.interface-admin-status status="{{ $interface->admin_status }}" />
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <x-ui.molecules.interface-oper-status status="{{ $interface->operational_status }}" />
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
{{--          <pre>--}}
{{--            @json($interfaces, JSON_PRETTY_PRINT)--}}
{{--          </pre>--}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End::Column-1 -->
  </div>
@endsection
