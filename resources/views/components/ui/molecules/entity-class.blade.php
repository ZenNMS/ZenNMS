@props([
  'classType' => 1,
  'className' => 'Other',
  'name' => '',
  'serialNumber' => '',
])

<div class="flex items-start space-x-1">
  <div class="flex items-center rounded-m bg-gray-100 h-10 w-10 p-2" title="{{ $className }}">
    @switch($classType)
      @case(2)
      Unknown
      @break
      @case(3)
      <x-fontawesome.duotone.chassis class="h-6 w-6 text-gray-600" />
      @break
      @case(4)
      Backplane
      @break
      @case(5)
      <x-fontawesome.duotone.container class="h-6 w-6" />
      @break
      @case(6)
      <x-fontawesome.duotone.plug class="h-6 w-6 text-gray-600" />
      @break
      @case(7)
      <x-fontawesome.duotone.fan class="h-6 w-6" />
      @break
      @case(8)
      <x-fontawesome.duotone.sensor class="h-6 w-6" />
      @break
      @case(9)
      <x-fontawesome.duotone.memory class="h-6 w-6 text-gray-600" />
      @break
      @case(10)
      <x-fontawesome.duotone.ethernet class="h-6 w-6" />
      @break
      @case(11)
      <x-fontawesome.duotone.server class="h-6 w-6" />
      @break
      @case(12)
      <x-fontawesome.duotone.microchip class="h-6 w-6" />
      @break
      @case(13)
      <x-fontawesome.duotone.bolt class="h-6 w-6" />
      @break
      @case(14)
      <x-fontawesome.duotone.car-battery class="h-6 w-6" />
      @default
      {{--                      <x-fontawesome.duotone. class="h-6 w-6" />--}}
    @endswitch
  </div>
  <div class="flex flex-col -mt-1 px-4">
    <div class="text-normal">
      {{ $name }}
    </div>
    <div class="text-gray-500 text-xs">
      @if($serialNumber !== '')
        <span class="font-semibold text-gray-400">S/N</span>: {{ $serialNumber }}
      @endif
    </div>
  </div>
</div>
