@props([
  'side' => 'FRONT',
  'orderBy' => 'asc',
  'units' => 24,
])
<div class="w-80">
  <h3 class="mb-3 pl-8 text-center text-xl font-semibold text-gray-600 tracking-wider">{{ $side }}</h3>
  <div class="flex space-x-2">
    <ul class="w-8 border-2 border-transparent d-inline ">
    @if($orderBy === 'asc')
      @for($i = 1; $i <= $units; $i++)
        <li class="h-7 border-1 border-white pt-0.5 text-right text-gray-400">{{ $i }}</li>
      @endfor
    @else
      @for($i = $units; $i >= 1; $i--)
        <li class="h-7 border-1 border-white pt-0.5 text-right text-gray-400">{{ $i }}</li>
      @endfor
    @endif
    </ul>
    <ul class="w-72 border-2 border-black">
      @for($i = 1; $i <= $units; $i++)
        <li class="h-7 border border-gray-200 hover:bg-gray-100"></li>
      @endfor
    </ul>
  </div>
</div>
