@props([
  'term' => '',
])

<div class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
  <x-html.description-list-term>
    {{ $term }}
  </x-html.description-list-term>
  <x-html.description-list-definition class="mt-1 sm:mt-0 sm:col-span-2">
    {{ $slot }}
  </x-html.description-list-definition>
</div>
