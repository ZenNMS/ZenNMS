@props([
  'href' => '#',
  'title' => '',
])
<a {{ $attributes->merge([
    'class' => 'flex items-center text-gray-500 rounded-sm group hover:bg-gray-100 mb-3 px-2 h-12 w-12',
    'title' => $title
    ]) }}
   href="{{ $href }}">
  {{ $slot }}
</a>
