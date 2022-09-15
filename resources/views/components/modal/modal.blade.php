@props(['id'])

<div class="modal hidden" id="{{ $id }}" style="display: none">
    <div class="modal__content">{{ $slot }}</div>

    <button class="close" aria-expanded="false" id="menu-close" onclick="closeModal('#{{ $id }}')">
        <img src="{{ asset('storage/x.svg') }}" width="24px" alt="close icon" aria-label="close menu">
        <span class="visually-hidden">Close</span>
    </button>
</div>
