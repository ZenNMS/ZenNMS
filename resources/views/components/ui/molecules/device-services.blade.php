@props([
  'services'
])

@php
  $services_bin = str_pad(decbin($services), 7, '0');
  $services_rev = strrev($services_bin);
  $services_arr = str_split($services_rev, 1);

  $layers = [];

  for($i = 0; $i <= count($services_arr) - 1; $i++) {
     $layers[$i+1] = $services_arr[$i] === '1';
  }

  $layers;

  $enabled_layer = 'bg-green-100 text-green-500';
  $disabled_layer = 'bg-gray-100 text-gray-400';
@endphp

<span class="rounded-full text-center text-xs mr-1 px-2 py-0.5 {{ $layers[1] === true ? $enabled_layer : $disabled_layer }}">1</span>
<span class="rounded-full text-center text-xs mr-1 px-2 py-0.5 {{ $layers[2] === true ? $enabled_layer : $disabled_layer }}">2</span>
<span class="rounded-full text-center text-xs mr-1 px-2 py-0.5 {{ $layers[3] === true ? $enabled_layer : $disabled_layer }}">3</span>
<span class="rounded-full text-center text-xs mr-1 px-2 py-0.5 {{ $layers[4] === true ? $enabled_layer : $disabled_layer }}">4</span>
<span class="rounded-full text-center text-xs mr-1 px-2 py-0.5 {{ $layers[5] === true ? $enabled_layer : $disabled_layer }}">5</span>
<span class="rounded-full text-center text-xs mr-1 px-2 py-0.5 {{ $layers[6] === true ? $enabled_layer : $disabled_layer }}">6</span>
<span class="rounded-full text-center text-xs mr-0 px-2 py-0.5 {{ $layers[7] === true ? $enabled_layer : $disabled_layer }}">7</span>
