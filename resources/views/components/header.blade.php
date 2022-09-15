<header>
    <input class="location__input show-for-small-only" type="text" name="location" id="location" placeholder="Milano">
    <button class="hamburger show-for-small-only" onClick="openModal('#menu__modal')">
        <img src="{{ asset('storage/list.svg') }}" width="24px" alt="hamburger icon" aria-label="open menu">
    </button>
    <div class="hide-for-small-only">
        <button>Order by</button>
        <button>Foto</button>
        <button>Mappa</button>
    </div>
</header>
