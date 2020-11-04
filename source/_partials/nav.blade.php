@php $level = $level ?? 0 @endphp

<ul class="my-0 list-none">
  @foreach ($items as $label => $item)
    @include('_partials.menu-item')
  @endforeach
</ul>
