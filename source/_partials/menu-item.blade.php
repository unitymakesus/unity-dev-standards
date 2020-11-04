<li class="pl-4">
  @if ($url = is_string($item) ? $item : $item->url)
    {{-- Menu item with URL--}}
    <a href="{{ $page->url($url) }}" class="{{ 'lvl' . $level }} {{ $page->isActiveParent($item) ? 'lvl' . $level . '-active' : '' }} {{ $page->isActive($url) ? 'active font-bold text-unity-purple' : '' }} nav-menu__item" {{ $page->isActive($url) ? 'aria-current="page"' : '' }}>{{ $label }}</a>
  @else
    {{-- Menu item without URL--}}
    <p class="nav-menu__item text-gray-600 m-0">{{ $label }}</p>
  @endif
  @if (!is_string($item) && $item->children)
    {{-- Recursively handle children --}}
    @include('_partials.nav', ['items' => $item->children, 'level' => ++$level])
  @endif
</li>
