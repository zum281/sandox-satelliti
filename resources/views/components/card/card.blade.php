@props(['id'])

<div id="{{ $id }}" {{ $attributes->merge(['class' => 'card']) }}>
    <div class="grid-y">
        <div class="card__body cell">
            <x-card.info />
            <x-card.details />
        </div>

        <div class="card__footer cell">
            <button class="tab tab__info active" onclick='changeTab("info", "{{ $id }}")'>info</button>
            <span class="separator"></span>
            <button class="tab tab__map">mappa</button>
            <span class="separator"></span>
            <button class="tab tab__details" onclick='changeTab("details", "{{ $id }}")'>dettagli</button>
            <button class="cta">vedi</button>
        </div>
    </div>
</div>
