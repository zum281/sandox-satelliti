@props(['title'])

<details class="accordion">
    <summary class="accordion__summary">
        <h3 style="font-size: 1.25rem;">{{ $title }}</h3>
    </summary>
    {{ $slot }}
</details>
