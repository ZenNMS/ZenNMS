@extends('zen.app')

@section('page-header')
  <span class="font-semibold text-xl text-gray-700">
    <a href="{{ route('device.show', $device->id) }}">{{ $device->displayname ?? $device->hostname }}</a>
  </span>
  <span class="text-gray-300 px-2">
    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="chevron-right" class="w-4 h-4 text-gray-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
      <path fill="currentColor" d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"></path>
    </svg>
  </span>
  <span class="font-normal text-xl text-gray-700">{{ strtoupper($interface->name) }}</span>
  <span class="text-gray-300 px-2">
    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="chevron-right" class="w-4 h-4 text-gray-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
      <path fill="currentColor" d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"></path>
    </svg>
  </span>
  <span class="font-normal text-xl text-gray-400">Interface details</span>
@endsection

@section('content')
  <div class="grid grid-cols-3 gap-4 px-5">
    <!-- Begin::Column-1 -->
    <div id="column-1">
      <x-ui.atoms.card>
        <x-ui.atoms.card-header>
          <x-ui.atoms.card-title>
            Interface Details
          </x-ui.atoms.card-title>
        </x-ui.atoms.card-header>
        <x-ui.atoms.card-body>
          <dl class="w-full">
            <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Name
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $interface->name }}
              </dd>
            </div>
            <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Alias
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $interface->alias }}
              </dd>
            </div>
            <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Description
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $interface->description }}
              </dd>
            </div>
            <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                MAC Address
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $interface->physical_address }}
              </dd>
            </div>
            <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Interface type
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <abbr title="{{ $interface->interfaceType->description }}">
                  {{ $interface->interfaceType->type }}
                </abbr>
              </dd>
            </div>
            <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Speed
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $interface->speed }}
              </dd>
            </div>
            <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                MTU
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $interface->mtu }}
              </dd>
            </div>
            <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Admin status
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <span class="px-2 py-0.5 inline-flex text-xs font-semibold rounded-full {{ $interface->admin_status === 1 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                  {{ ucfirst($interface->interfaceAdminStatus->status) }}
                </span>
              </dd>
            </div>
            <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Operational status
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <span class="px-2 py-0.5 inline-flex text-xs font-semibold rounded-full {{ $interface->operational_status === 1 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                  {{ ucfirst($interface->interfaceOperationalStatus->status) }}
                </span>
              </dd>
            </div>
            <div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Link trap status
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <span class="px-2 py-0.5 inline-flex text-xs font-semibold rounded-full {{ $interface->link_up_down_trap ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                  {{ $interface->link_up_down_trap ? 'Enabled' : 'Disabled' }}
                </span>
              </dd>
            </div>
          </dl>
        </x-ui.atoms.card-body>
      </x-ui.atoms.card>
    </div>
    <!-- End::Column-1 -->
    <!-- Begin::Column-2 -->
    <div id="column-2">
      <x-ui.atoms.card>
        <x-ui.atoms.card-header>
          <x-ui.atoms.card-title>
            Interface Availability
          </x-ui.atoms.card-title>
        </x-ui.atoms.card-header>
        <x-ui.atoms.card-body>

        </x-ui.atoms.card-body>
      </x-ui.atoms.card>
    </div>
    <!-- End::Column-2 -->
    <!-- Begin::Column-3 -->
    <div id="column-3">
      <x-ui.atoms.card>
        <x-ui.atoms.card-header>
          <x-ui.atoms.card-title>
            Interface Model
          </x-ui.atoms.card-title>
        </x-ui.atoms.card-header>
        <x-ui.atoms.card-body class="p-10">
          <pre>@json($interface, JSON_PRETTY_PRINT)</pre>
        </x-ui.atoms.card-body>
      </x-ui.atoms.card>
    </div>
    <!-- End::Column-3 -->
  </div>
@endsection
