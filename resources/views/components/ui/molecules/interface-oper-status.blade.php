@props([
  'status' => 1
])

@switch($status)
  @case(1)
    <x-ui.atoms.circle-up-status class="h-5 w-5" />
    @break
  @case(3)
    <x-ui.atoms.circle-testing-status class="h-5 w-5" />
    @break
  @case(4)
    <x-ui.atoms.circle-unknown-status class="h-5 w-5" />
    @break
  @case(6)
    <x-ui.atoms.circle-not-present-status class="h-5 w-5" />
    @break
  @default
    <x-ui.atoms.circle-down-status class="h-5 w-5" />
@endswitch
