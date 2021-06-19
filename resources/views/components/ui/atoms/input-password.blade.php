@props([
  'name' => ''
])

<input {{ $attributes->merge(['class' => 'mt-1 focus:ring-indigo-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md']) }}
       autocomplete="given-name"
       id="{{ $name }}"
       name="{{ $name }}"
       type="password">
