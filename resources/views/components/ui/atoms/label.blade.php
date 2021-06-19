@props([
  'type' => 'success'
])

@php
$class = match($type) {
    'danger'  => 'bg-red-100 text-red-600',
    'default' => 'bg-gray-100 text-gray-600',
    'info'    => 'bg-blue-100 text-blue-600',
    'light'   => 'bg-gray-50 text-gray-500',
    'success' => 'bg-green-100 text-green-600',
    'warning' => 'bg-yellow-100 text-yellow-600',
}
@endphp

<span {{ $attributes->merge(['class' => 'rounded-full text-xs py-0.5 px-2 '.$class]) }}>
  {{ $slot }}
</span>
