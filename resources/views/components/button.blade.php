@props(['color', 'icon', 'onclick' => null])


<button class="btn-{{ $color }}" onclick="{{ $onclick }}">
    @isset($icon)
        <i class="icon icon__{{ $icon }}"></i>
    @endisset
    {{ $slot }}
</button>
