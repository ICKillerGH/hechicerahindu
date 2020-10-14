<div
    x-data="{ currentTab: '{{ $selectedTab }}' }"
>
    <div>
        @if (isset($tabs))
            {{ $tabs }}
        @endif
    </div>

    <div x-cloak>
        @if (isset($content))
            {{ $content }}
        @endif
    </div>
</div>
