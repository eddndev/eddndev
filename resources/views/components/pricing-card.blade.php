@props([
    'plan_name' => '',
    'subtitle' => '',
    'price' => '',
    'features' => [],
    'cta_label' => 'Elegir Plan',
    'cta_href' => '#contacto',
    'highlight' => false, // Para destacar un plan
])

@php
    $cardClasses = $highlight
        ? 'bg-white/5 ring-2 ring-purple-500' // Estilo para la tarjeta destacada
        : 'bg-white/5 ring-1 ring-white/10'; // Estilo normal
@endphp

<div class="{{ $cardClasses }} rounded-2xl p-6 sm:p-8 flex flex-col w-full max-w-sm mx-auto min-w-0 overflow-hidden">
    @if($highlight)
        <div class="text-center mb-4">
            <span class="inline-flex items-center px-3 py-1 rounded-full bg-purple-600 text-xs font-semibold text-white">
                Más Popular
            </span>
        </div>
    @endif

    <div class="text-center">
        <h3 class="text-2xl font-black tracking-tight">{{ $plan_name }}</h3>
        <p class="mt-1 text-sm text-gray-400">{{ $subtitle }}</p>
    </div>

    <div class="mt-6 text-center">
        <span class="text-4xl sm:text-5xl font-black tracking-tight">${{ number_format($price, 0, '.', ',') }}</span>
        <span class="text-base font-medium text-gray-400">MXN</span>
    </div>

    <ul class="mt-8 space-y-4 text-gray-300 flex-grow">
        @foreach($features as $feature)
            <li class="flex items-start gap-3">
                <svg class="h-2 w-2 shrink-0 text-purple-400"><use href="#icon-check-circle"/></svg>
                <span class="break-words text-pretty">{!! $feature !!}</span>
            </li>
        @endforeach
    </ul>

    <div class="mt-8">
        <a href="{{ $cta_href }}" target="_blank" rel="noopener noreferrer"
           class="inline-flex items-center justify-center w-full rounded-lg py-3 text-sm font-semibold transition-colors
                  {{ $highlight ? 'bg-purple-600 hover:bg-purple-500 text-white' : 'bg-white/10 hover:bg-white/15 ring-1 ring-white/15 text-white' }}">
            {{ $cta_label }}
        </a>
    </div>
</div>