@php
$cell_classes = ['cell', 'small-12', 'medium-6', 'large-3'];
@endphp

<section class="grid-x grid-margin-x listing">
    <x-card.card id="listing-card-1" class="{{ implode(' ', $cell_classes) }}" />
    <x-ad class="{{ implode(' ', $cell_classes) }}" />
    @for ($i = 0; $i < 10; $i++)
        <x-card.card id="listing-card-{{ $i + 2 }}" class="{{ implode(' ', $cell_classes) }}" />
    @endfor

</section>
