@props(['label', 'routeName', 'icon'])

@php
    $isActive = str_starts_with(
        request()
            ->route()
            ->getName(),
        $routeName,
    );
    
@endphp

<li class="nav-item">
    <a href="{{ route($routeName) }}" class="nav-link {{ $isActive ? 'active' : '' }}">
        <i class="nav-icon fas fa-{{ $icon }}"></i>
        <p>
            {{ $label }}
        </p>
    </a>
</li>
