@props([
  // Contenido
  'title'       => 'Proyecto',
  'subtitle'    => null,           // p.ej. “tienda de ropa”
  'description' => null,           // copy principal (humano, breve)
  'features'    => [],             // bullets (características / relevante)
  'chips'       => [],             // etiquetas decorativas (p.ej. “Colección”, “MX”)

  // Imagen (usa tus helpers FullAsset)
  'img'         => null,           // original_path (p.ej. 'resources/images/projects/sylestudio-hero.jpg')
  'alt'         => '',

  // UI
  'accent'      => '#B572FF',      // color acento (varía por proyecto)
  'reverse'     => false,          // alternar composición: img izquierda, texto derecha
  'decor'       => 'none',         // 'belt' | 'mesh' | 'grid' | 'none'

  // CTAs
  'primary'     => null,           // ['label' => 'Visitar', 'href' => 'https://...']
  'secondary'   => null,           // ['label' => 'Caso de estudio', 'href' => route]

  // Accesibilidad / tamaños
  'sizes'       => '(min-width:1024px) 60vw, 100vw',
])

@php
  // Imagen responsiva (FullAsset helpers)
  $srcs = $img ? get_full_sources($img, [1600,2400,3200]) : ['avif'=>'','webp'=>'','fallback'=>asset('images/placeholder-large.jpg')];

  // Orden de columnas
  $textCol = $reverse ? 'lg:col-span-5 order-2 lg:order-2' : 'lg:col-span-5 order-1';
  $imgCol  = $reverse ? 'lg:col-span-7 order-1 lg:order-1' : 'lg:col-span-7 order-2';

  // Clases decorativas para el visual
  $visualDecor = match($decor) {
    'mesh' => 'after:absolute after:inset-0 after:pointer-events-none after:opacity-30
               after:[background-image:linear-gradient(rgba(255,255,255,.08)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.08)_1px,transparent_1px)]
               after:[background-size:24px_24px,24px_24px]',
    'grid' => 'after:absolute after:inset-0 after:pointer-events-none after:opacity-25
               after:[background-image:radial-gradient(circle_at_1px_1px,rgba(255,255,255,.10)_1px,transparent_1px)]
               after:[background-size:16px_16px]',
    default => ''
  };
@endphp

<article class="project group grid lg:grid-cols-12 gap-8 items-center py-12 border-t border-white/10"
         style="--accent: {{ $accent }}">
  {{-- TEXTO --}}
  <div class="{{ $textCol }} space-y-5" data-proj-reveal>
    <div class="flex items-center gap-3">
      @if($subtitle)
        <span class="inline-flex items-center px-2.5 py-1 rounded-md bg-[var(--accent)]/20 ring-1 ring-white/15 text-[12px]">
          {{ $subtitle }}
        </span>
      @endif
      <h3 class="text-xl font-semibold">{{ $title }}</h3>
    </div>

    @if($description)
      <p class="text-white/90">{{ $description }}</p>
    @endif

    @if(!empty($features))
      <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-gray-200">
        @foreach ($features as $feat)
          <li class="flex items-start gap-2">
            <span class="mt-1 inline-block size-1.5 rounded-full bg-[var(--accent)]"></span>
            {{ $feat }}
          </li>
        @endforeach
      </ul>
    @endif

    @if(!empty($chips))
      <div class="flex gap-2 flex-wrap pt-1">
        @foreach ($chips as $chip)
          <span class="px-2.5 py-1 rounded bg-black/30 ring-1 ring-white/10 text-[11px]">{{ $chip }}</span>
        @endforeach
      </div>
    @endif

    @if($primary || $secondary)
      <div class="flex gap-3 pt-1">
        @if($primary)
          <a href="{{ $primary['href'] ?? '#' }}" target="_blank" rel="noopener"
             class="inline-flex items-center gap-2 rounded-lg bg-white/10 px-4 py-2 text-sm font-semibold
                    hover:bg-white/15 ring-1 ring-white/15 transition-colors">
            {{ $primary['label'] ?? 'Abrir' }}
            <svg class="h-4 w-4"><use href="#icon-arrow-right"/></svg>
          </a>
        @endif
        @if($secondary)
          <a href="{{ $secondary['href'] ?? '#' }}"
             class="inline-flex items-center gap-2 rounded-lg bg-black/40 px-4 py-2 text-sm font-semibold
                    hover:bg-black/50 ring-1 ring-white/10 transition-colors">
            {{ $secondary['label'] ?? 'Más' }}
          </a>
        @endif
      </div>
    @endif
  </div>

  {{-- VISUAL --}}
  <figure class="{{ $imgCol }} relative" data-proj-visual>
    <div class="relative aspect-[16/10] w-full rounded-2xl overflow-hidden ring-1 ring-white/10 bg-black/30 {{ $visualDecor }}">
      @if($decor === 'belt')
        {{-- Cinta (colas/carga) arriba del visual --}}
        <svg data-queue-belt viewBox="0 0 800 100" class="absolute left-0 right-0 top-0 h-20 opacity-70 pointer-events-none">
          <defs>
            <linearGradient id="beltStroke" x1="0" x2="1">
              <stop offset="0" stop-color="#FFFFFF" stop-opacity="0.9"/>
              <stop offset="1" stop-color="{{ $accent }}" stop-opacity="0.9"/>
            </linearGradient>
          </defs>
          <path d="M-50 50 H850" stroke="url(#beltStroke)" stroke-width="3" stroke-linecap="round" vector-effect="non-scaling-stroke"/>
          <g data-belt-dots></g>
        </svg>
      @endif

      <picture class="absolute inset-0 w-full h-full">
        <source type="image/avif" srcset="{{ $srcs['avif'] }}" sizes="{{ $sizes }}">
        <source type="image/webp" srcset="{{ $srcs['webp'] }}" sizes="{{ $sizes }}">
        <img src="{{ $srcs['fallback'] }}"
             alt="{{ $alt }}"
             class="w-full h-full object-cover"
             width="2400" height="1500" loading="lazy" decoding="async">
      </picture>

      @if(!empty($chips))
        <div class="absolute left-0 bottom-0 right-0 p-3 flex gap-2 overflow-x-auto bg-gradient-to-t from-black/50 to-transparent">
          @foreach ($chips as $chip)
            <span class="px-2.5 py-1 rounded bg-black/60 text-[11px] ring-1 ring-white/10 shrink-0">{{ $chip }}</span>
          @endforeach
        </div>
      @endif
    </div>
  </figure>
</article>
