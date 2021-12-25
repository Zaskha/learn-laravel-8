<div class="alert">
    {{-- header --}}
    <div class="alert-header">
        {{ $title }}
    </div>

    {{-- Children --}}
    {{ $slot }}

    {{-- Footer --}}
    <div class="alert-footer">
        {{ $footer }}
    </div>

</div>