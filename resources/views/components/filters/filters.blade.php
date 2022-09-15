    <h2 style="font-size: 1.5rem;">Filtri</h2>


    <x-filters.accordion title="Posizione">
        <input type="text" placeholder="Milano">
    </x-filters.accordion>
    <x-filters.accordion title="Prezzo">
        <x-slider />
    </x-filters.accordion>
    <x-filters.accordion title="Tipo">
        <div class="filter__type">
            <label>
                <input type="checkbox">
                <span>Monolocale</span>
                <span class="circle">6</span>
            </label>
            <label>
                <input type="checkbox">
                <span>Appartamento</span>
                <span class="circle">43</span>
            </label>
            <label>
                <input type="checkbox">
                <span>Stanza privata</span>
                <span class="circle">5</span>
            </label>
            <label>
                <input type="checkbox">
                <span>Stanza condivisa</span>
                <span class="circle">4</span>
            </label>
        </div>
    </x-filters.accordion>
    <x-filters.accordion title="Superficie">
        <div class="filter__type">
            <label>
                <input type="radio" name="superficie">
                <span>15 m<sup>2</sup> o più</span>
                <span class="circle">55</span>
            </label>
            <label>
                <input type="radio" name="superficie">
                <span>30 m<sup>2</sup> o più</span>
                <span class="circle">48</span>
            </label>
            <label>
                <input type="radio" name="superficie">
                <span>60 m<sup>2</sup> o più</span>
                <span class="circle">21</span>
            </label>
            <label>
                <input type="radio" name="superficie">
                <span>90 m<sup>2</sup> o più</span>
                <span class="circle">7</span>
            </label>
            <details>
                <summary>Specifica dimensioni</summary>
                <div class="apts__dimensions_select__container">
                    <label>
                        Dimensioni minime
                        <input type="number">
                    </label>
                    <label>
                        Dimensioni massime
                        <input type="number">
                    </label>
                </div>
            </details>
        </div>
    </x-filters.accordion>
