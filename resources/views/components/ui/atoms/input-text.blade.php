@props([
  'name' => '',
  'placeholder' => '',
])

<input {{ $attributes->merge([
    'class' => 'mt-1 focus:ring focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md'
    ]) }}
       id="{{ $name }}"
       name="{{ $name }}"
       placeholder="{{ $placeholder }}"
       type="text">


