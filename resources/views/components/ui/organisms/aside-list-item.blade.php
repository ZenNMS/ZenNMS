@props([
  'href' => '#',
  'title',
  'active' => false,
])

<!-- Begin::ListItem -->
<li class="rounded-sm group hover:bg-gray-100 {{ $active ? 'bg-gray-50' : '' }} px-3 py-2">
  <a class="flex items-center justify-start" href="{{ $href }}" aria-label="{{ $title }}">
    <span class="w-8 mr-2">
      {{ $slot }}
    </span>
    <span class="{{ $active ? 'font-bold' : '' }}">{{ $title }}</span>
  </a>
</li>
<!-- End::ListItem -->
