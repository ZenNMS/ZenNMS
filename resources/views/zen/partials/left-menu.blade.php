@php
  $request = Request();
@endphp

<!-- Begin::LeftMenu -->
<div class="flex-shrink-0 overflow-y-auto w-72 bg-white border-r border-gray-200 pt-5">
{{--  @includeWhen($is_get_method && count($segments) === 1 && $is_valid_segment, 'zen.device.left-menu')--}}
  @includeWhen(in_array('device', $request->segments()), 'zen.device.left-menu')

  @includeWhen(in_array('devices', $request->segments()), 'zen.devices.left-menu')

</div>
<!-- Begin::LeftMenu -->
