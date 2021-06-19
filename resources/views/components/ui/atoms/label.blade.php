@props([
  'value' => 0
])

<span {{ $attributes->merge(['class' => 'rounded-full text-xs py-0.5 px-2']) }} class="bg-green-100 text-green-600">{{ $value }}</span>
