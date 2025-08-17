@props([
    // Contenido de la Oferta
    'title' => 'Paquete de Lanzamiento',
    'price' => null,
    'price_currency' => 'MXN',
    'description' => null,
    'inclusions' => [],
    'bonus_title' => null,
    'bonus_description' => null,

    // CTA Principal
    'cta' => null, // ['label' => 'Agendar', 'href' => '#contacto']

    // Imagen de Ejemplo
    'img' => null,
    'alt' => '',
    'sizes' => '(min-width:1024px) 50vw, 100vw',

    // UI
    'accent' => '#B572FF',
    'reverse' => false,
])

@php
    // Mantenemos tu excelente sistema de imágenes responsivas
    $srcs = $img ? get_full_sources($img, [800, 1200, 1600]) : ['avif' => '', 'webp' => '', 'fallback' => asset('images/placeholder-large.jpg')];

    // Orden de columnas
    $textCol = $reverse ? 'lg:col-span-6 order-2 lg:order-2' : 'lg:col-span-6 order-1';
    $imgCol  = $reverse ? 'lg:col-span-6 order-1 lg:order-1' : 'lg:col-span-6 order-2';
@endphp

<article class="group grid lg:grid-cols-12 gap-12 lg:gap-16 items-center py-12"
         style="--accent: {{ $accent }}">
    
    {{-- COLUMNA DE TEXTO --}}
    <div class="{{ $textCol }} space-y-8">
        <div class="space-y-4">
            <h2 class="text-3xl sm:text-5xl font-black tracking-tight">{{ $title }}</h2>
            @if($description)
                <p class="text-gray-300 text-lg">{{ $description }}</p>
            @endif
        </div>

        @if(!empty($inclusions))
            <ul class="space-y-4 text-gray-200">
                @foreach($inclusions as $item)
                    <li class="flex items-start gap-3">
                        <svg class="h-6 w-6 shrink-0 text-[var(--accent)]"><use href="#{{ $item['icon'] ?? 'icon-plus' }}"/></svg>
                        <span>{!! $item['text'] !!}</span>
                    </li>
                @endforeach
            </ul>
        @endif

        @if($bonus_title)
            <div class="rounded-xl border border-[var(--accent)]/50 bg-white/5 p-5">
                <h3 class="font-bold text-lg flex items-center gap-2">
                    <svg class="h-6 w-6 text-[var(--accent)]/80"><use href="#icon-star"/></svg>
                    {{ $bonus_title }}
                </h3>
                @if($bonus_description)
                    <p class="mt-2 text-gray-300">{{ $bonus_description }}</p>
                @endif
            </div>
        @endif

        <div class="pt-4">
            @if($price)
                <div class="text-4xl font-black tracking-tight">{{ $price }} <span class="text-base font-medium text-gray-400">{{ $price_currency }}</span></div>
                <p class="mt-2 text-sm text-gray-400">
                    Este paquete es ideal para lanzar tu idea. ¿Tu proyecto necesita más? Contáctame para una cotización a medida.
                </p>
            @endif
            @if($cta)
                <a href="{{ $cta['href'] ?? '#' }}" onclick="fbq('track', 'Contact');"
                   target="_blank" rel="noopener"
                   class="inline-flex items-center justify-center mt-6 bg-purple-600 hover:bg-purple-500 text-white font-semibold py-3 px-8 rounded-lg transition-colors text-base">
                   {{ $cta['label'] ?? 'Comenzar' }}
                </a>
            @endif
        </div>
    </div>

    {{-- COLUMNA VISUAL --}}
    <figure class="{{ $imgCol }} relative">
        <div class="relative aspect-[4/3] w-full rounded-2xl overflow-hidden ring-1 ring-white/10 bg-black/30">
            <picture class="absolute inset-0 w-full h-full">
                <source type="image/avif" srcset="{{ $srcs['avif'] }}" sizes="{{ $sizes }}">
                <source type="image/webp" srcset="{{ $srcs['webp'] }}" sizes="{{ $sizes }}">
                <img src="{{ $srcs['fallback'] }}"
                     alt="{{ $alt }}"
                     class="w-full h-full object-cover object-top"
                     width="1600" height="1200" loading="lazy" decoding="async">
            </picture>
        </div>
        <p class="mt-3 text-center text-xs text-gray-500">
            Ejemplo de sitio.
        </p>
    </figure>
</article>