<x-layout>

    <div class="btns-container show-for-small-only">
        <x-button color="purple">Order by</x-button>
        <x-button color="purple" icon="date" onclick="openModal('#calendar_modal')">Date</x-button>
        <x-button color="purple" onclick="openModal('#filters_modal')">Filters</x-button>
    </div>
    <div class="btns-container show-for-small-only">
        <x-button color="green" icon="map">Mappa</x-button>
        <x-button color="green">Crea notifica</x-button>
        <x-button color="green">Confronta</x-button>
    </div>

    <div>
        <x-sidebar />
        <x-listing />
    </div>



</x-layout>
