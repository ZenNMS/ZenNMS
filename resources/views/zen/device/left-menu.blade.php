@php
    $segments = $request->segments();
    $selected = $segments[array_key_last($segments)];
@endphp

<section class="px-5 mb-10">
  <div class="font-semibold text-gray-500 tracking-wider mb-3 pl-3">
    DEVICE DETAILS
  </div>
  <ul class="list-none text-gray-600 tracking-wider">
    <x-ui.organisms.aside-list-item
      active="{{ $selected === strval($device->id) }}"
      href="{{ route('device.show', $device->id) }}"
      title="Overview"
    >
      <x-fontawesome.duotone.fingerprint class="group-hover:text-green-400 h-5 w-5 {{ $selected === strval($device->id) ? 'text-green-400' : '' }}" />
    </x-ui.organisms.aside-list-item>

    @if($interfaces_count > 0)
    <x-ui.organisms.aside-list-item
      active="{{ $selected === 'interfaces' }}"
      href="{{ route('device.interfaces', $device->id) }}"
      title="Interfaces"
    >
      <x-fontawesome.duotone.ethernet class="group-hover:text-green-400 h-5 w-5 {{ $selected === 'interfaces' ? 'text-green-400' : '' }}" />
    </x-ui.organisms.aside-list-item>
    @endif

    @if($inventory_count > 0)
    <x-ui.organisms.aside-list-item
      active="{{ $selected === 'inventory' }}"
      href="{{ route('device.inventory', $device->id) }}"
      title="Inventory"
    >
      <x-fontawesome.duotone.sitemap class="group-hover:text-green-400 h-5 w-5 {{ $selected === 'inventory' ? 'text-green-400' : '' }}" />
    </x-ui.organisms.aside-list-item>
    @endif

    <x-ui.organisms.aside-list-item title="CPU & Memory" href="#">
      <x-fontawesome.duotone.microchip class="group-hover:text-green-400 h-5 w-5" />
    </x-ui.organisms.aside-list-item>
{{--    <x-ui.organisms.aside-list-item title="Battery" href="#">--}}
{{--      <x-fontawesome.duotone.car-battery class="group-hover:text-green-400 h-5 w-5" />--}}
{{--    </x-ui.organisms.aside-list-item>--}}
{{--    <x-ui.organisms.aside-list-item title="Input / Output" href="#">--}}
{{--      <x-fontawesome.duotone.plug class="group-hover:text-green-400 h-5 w-5" />--}}
{{--    </x-ui.organisms.aside-list-item>--}}
    <x-ui.organisms.aside-list-item title="Health" href="#">
      <x-fontawesome.duotone.heart-pulse class="group-hover:text-green-400 h-5 w-5" />
    </x-ui.organisms.aside-list-item>
{{--    <x-ui.organisms.aside-list-item title="Access Points" href="#">--}}
{{--      <x-fontawesome.duotone.wifi class="group-hover:text-green-400 h-5 w-5" />--}}
{{--    </x-ui.organisms.aside-list-item>--}}
{{--    <x-ui.organisms.aside-list-item title="Network Cameras" href="#">--}}
{{--      <x-fontawesome.duotone.camera-cctv class="group-hover:text-green-400 h-5 w-5" />--}}
{{--    </x-ui.organisms.aside-list-item>--}}
{{--    <x-ui.organisms.aside-list-item title="ONT" href="#">--}}
{{--      <x-fontawesome.duotone.router class="group-hover:text-green-400 h-5 w-5" />--}}
{{--    </x-ui.organisms.aside-list-item>--}}
{{--    <x-ui.organisms.aside-list-item title="Ink levels" href="#">--}}
{{--      <x-fontawesome.duotone.droplet class="group-hover:text-green-400 h-5 w-5" />--}}
{{--    </x-ui.organisms.aside-list-item>--}}
{{--    <x-ui.organisms.aside-list-item title="Storage" href="#">--}}
{{--      <x-fontawesome.duotone.hard-drive class="group-hover:text-green-400 h-5 w-5" />--}}
{{--    </x-ui.organisms.aside-list-item>--}}
{{--    <x-ui.organisms.aside-list-item title="Temperature" href="#">--}}
{{--      <x-fontawesome.duotone.temperature-three-quarters class="group-hover:text-green-400 h-5 w-5" />--}}
{{--    </x-ui.organisms.aside-list-item>--}}
{{--    <x-ui.organisms.aside-list-item title="Routing" href="#">--}}
{{--      <x-fontawesome.duotone.split class="group-hover:text-green-400 h-5 w-5" />--}}
{{--    </x-ui.organisms.aside-list-item>--}}

    @if($neighbours_count > 0)
    <x-ui.organisms.aside-list-item
      active="{{ $selected === 'neighbours' }}"
      href="{{ route('device.neighbours', $device->id) }}"
      title="Neighbours">
      <x-fontawesome.duotone.chart-network class="group-hover:text-green-400 h-5 w-5 {{ $selected === 'inventory' ? 'text-green-400' : '' }}" />
    </x-ui.organisms.aside-list-item>
    @endif

{{--    <x-ui.organisms.aside-list-item title="Vlans" href="#">--}}
{{--      <x-fontawesome.duotone.layer-group class="group-hover:text-green-400 h-5 w-5" />--}}
{{--    </x-ui.organisms.aside-list-item>--}}
{{--    <x-ui.organisms.aside-list-item title="Alerts" href="#">--}}
{{--      <x-fontawesome.duotone.triangle-exclamation class="group-hover:text-green-400 h-5 w-5" />--}}
{{--    </x-ui.organisms.aside-list-item>--}}
{{--    <x-ui.organisms.aside-list-item title="Events" href="#">--}}
{{--      <x-fontawesome.duotone.calendar-exclamation class="group-hover:text-green-400 h-5 w-5" />--}}
{{--    </x-ui.organisms.aside-list-item>--}}
{{--    <x-ui.organisms.aside-list-item title="Notes" href="#">--}}
{{--      <x-fontawesome.duotone.note class="group-hover:text-green-400 h-5 w-5" />--}}
{{--    </x-ui.organisms.aside-list-item>--}}
  </ul>
</section>
<section class="px-6">
  <div class="font-semibold text-gray-500 tracking-wider mb-3 pl-3">
    DEVICE MANAGEMENT
  </div>
  <ul class="list-none text-gray-600 tracking-wider">
    <x-ui.organisms.aside-list-item title="Edit node" href="{{ route('device.edit', 1) }}">
      <x-fontawesome.duotone.pen-line class="group-hover:text-green-400 h-5 w-5" />
    </x-ui.organisms.aside-list-item>
    <x-ui.organisms.aside-list-item title="Unmanage" href="#">
      <x-fontawesome.duotone.circle-pause class="group-hover:text-green-400 h-5 w-5" />
    </x-ui.organisms.aside-list-item>
    <x-ui.organisms.aside-list-item title="Mute alerts" href="#">
      <x-fontawesome.duotone.volume-slash class="group-hover:text-green-400 h-5 w-5" />
    </x-ui.organisms.aside-list-item>
    <x-ui.organisms.aside-list-item title="Rediscover" href="#">
      <x-fontawesome.duotone.rotate class="group-hover:text-green-400 h-5 w-5" />
    </x-ui.organisms.aside-list-item>
    <x-ui.organisms.aside-list-item title="Poll now" href="#">
      <x-fontawesome.duotone.circle-bolt class="group-hover:text-green-400 h-5 w-5" />
    </x-ui.organisms.aside-list-item>
    <x-ui.organisms.aside-list-item title="Delete node" href="{{ route('device.destroy', 1) }}">
      <x-fontawesome.duotone.trash-can class="group-hover:text-green-400 h-5 w-5" />
    </x-ui.organisms.aside-list-item>
  </ul>
</section>
