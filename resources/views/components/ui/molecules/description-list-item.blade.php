@props([
  'term' => '',
])

<x-html.description-list-term>
  {{ $term }}
</x-html.description-list-term>
<x-html.description-list-definition class="mt-1 sm:mt-0 sm:col-span-2">
  {{ $slot }}
</x-html.description-list-definition>
