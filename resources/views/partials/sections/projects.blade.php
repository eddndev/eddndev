{{-- PROYECTOS --}}
<section id="proyectos"
         class="relative isolate text-white"
         style="--bgA:#1a0b2b; --bgB:#6A0DAD;">
  {{-- Fondo: morado profundo → morado --}}
  <div class="absolute inset-0 -z-10 bg-gradient-to-b from-[var(--bgA)] to-[var(--bgB)]"></div>

  <div class="mx-auto max-w-7xl px-6 sm:px-12 py-20 sm:py-28">
    <header class="max-w-3xl">
      <h2 class="text-3xl sm:text-5xl font-black tracking-tight">Proyectos en producción</h2>
      <p class="mt-4 text-white/90">
        Cada proyecto resuelve un problema concreto. Aquí te muestro el reto, cómo lo abordé
        y qué cambió al final.
      </p>
    </header>

    {{-- ================== PROYECTO 1: SYLESTUDIO ================== --}}
    @php
      // Rutas (ajústalas a tus assets reales)
      $heroPath = 'resources/images/projects/sylestudio-hero.jpg';
      $srcs = get_full_sources($heroPath, [1600,2400,3200]);
    @endphp

    <article class="project group grid lg:grid-cols-12 gap-8 items-center mt-14 py-12 border-t border-white/10"
             style="--accent:#E3B3FF">
      {{-- Columna texto --}}
      <div class="lg:col-span-5 order-1 space-y-5" data-proj-reveal>
        <div class="flex items-center gap-3">
          {{-- Logo si lo tienes: <x-logo src="resources/images/brand/Syle.svg" size="sm" alt="Sylestudio"/> --}}
          <div class="h-8 w-8 rounded-md bg-[var(--accent)]/25 ring-1 ring-white/15 flex items-center justify-center">
            <svg class="w-5 h-5 text-[var(--accent)]"><use href="#icon-bag"/></svg>
          </div>
          <h3 class="text-xl font-semibold">Sylestudio — tienda de ropa</h3>
        </div>

        <p class="text-white/90">
          Lanzamientos con picos de tráfico y muchas imágenes de producto. El objetivo:
          que todo cargue fluido, incluso en el “rush” de nuevas colecciones.
        </p>

        {{-- Reto / Acción / Resultado (decorado con “cinta de colas”) --}}
        <div class="relative rounded-xl bg-white/5 ring-1 ring-white/10 p-4 overflow-hidden">
          {{-- Cinta transportadora (colas) --}}
          <svg data-queue-belt viewBox="0 0 800 100" class="absolute left-0 right-0 top-0 h-20 opacity-70">
            <defs>
              <linearGradient id="beltStroke" x1="0" x2="1">
                <stop offset="0" stop-color="#FFFFFF" stop-opacity="0.9"/>
                <stop offset="1" stop-color="#E3B3FF" stop-opacity="0.9"/>
              </linearGradient>
            </defs>
            <path d="M-50 50 H850" stroke="url(#beltStroke)" stroke-width="3" stroke-linecap="round" />
            <!-- Los “paquetes” se animan en JS -->
            <g data-belt-dots></g>
          </svg>

          <dl class="relative grid gap-3 sm:grid-cols-3">
            <div class="p-3 rounded-lg bg-black/30 ring-1 ring-white/10">
              <dt class="text-xs text-gray-400">Reto</dt>
              <dd class="mt-1 text-sm text-gray-100">
                Colas saturadas en lanzamientos + imágenes pesadas.
              </dd>
            </div>
            <div class="p-3 rounded-lg bg-black/30 ring-1 ring-white/10">
              <dt class="text-xs text-gray-400">Cómo lo resolví</dt>
              <dd class="mt-1 text-sm text-gray-100">
                Procesado previo y en segundo plano; imágenes optimizadas; entrega gradual.
              </dd>
            </div>
            <div class="p-3 rounded-lg bg-black/30 ring-1 ring-white/10">
              <dt class="text-xs text-gray-400">Resultado</dt>
              <dd class="mt-1 text-sm text-gray-100">
                Lanzamientos estables y carga ágil en catálogo y detalle.
              </dd>
            </div>
          </dl>
        </div>

        {{-- Métricas (humanas) --}}
        <ul class="grid grid-cols-2 gap-3 max-w-md">
          <li class="rounded-lg bg-white/5 p-3">
            <div class="text-xs text-gray-400">Carga percibida</div>
            <div class="text-2xl font-bold">rápida</div>
          </li>
          <li class="rounded-lg bg-white/5 p-3">
            <div class="text-xs text-gray-400">Estabilidad</div>
            <div class="text-2xl font-bold">sin saltos</div>
          </li>
          <li class="rounded-lg bg-white/5 p-3">
            <div class="text-xs text-gray-400">Imágenes</div>
            <div class="text-2xl font-bold">optimizadas</div>
          </li>
          <li class="rounded-lg bg-white/5 p-3">
            <div class="text-xs text-gray-400">Picos</div>
            <div class="text-2xl font-bold">controlados</div>
          </li>
        </ul>

        <div class="flex gap-3 pt-2">
          <a href="https://sylestudio.com" target="_blank" rel="noopener"
             class="inline-flex items-center gap-2 rounded-lg bg-white/10 px-4 py-2 text-sm font-semibold
                    hover:bg-white/15 ring-1 ring-white/15 transition-colors">
            Visitar sitio <svg class="h-4 w-4"><use href="#icon-arrow-right"/></svg>
          </a>
          <a href="/"
             class="inline-flex items-center gap-2 rounded-lg bg-black/40 px-4 py-2 text-sm font-semibold
                    hover:bg-black/50 ring-1 ring-white/10 transition-colors">
            Caso de estudio
          </a>
        </div>
      </div>

      {{-- Columna visual (imagen + decoraciones sutiles) --}}
      <figure class="lg:col-span-7 order-2 relative" data-proj-visual>
        <div class="relative aspect-[16/10] w-full rounded-2xl overflow-hidden ring-1 ring-white/10 bg-black/30">
          <picture class="absolute inset-0 w-full h-full">
            <source type="image/avif" srcset="{{ $srcs['avif'] }}" sizes="(min-width:1024px) 60vw, 100vw">
            <source type="image/webp" srcset="{{ $srcs['webp'] }}" sizes="(min-width:1024px) 60vw, 100vw">
            <img src="{{ $srcs['fallback'] }}"
                 alt="Catálogo de productos de Sylestudio"
                 class="w-full h-full object-cover"
                 width="2400" height="1500" loading="lazy" decoding="async">
          </picture>

          {{-- Franja “etiquetas” como de colección (decorativo) --}}
          <div class="absolute left-0 bottom-0 right-0 p-3 flex gap-2 overflow-x-auto bg-gradient-to-t from-black/50 to-transparent">
            @foreach (['Nueva colección','Edición limitada','Hecho en MX'] as $chip)
              <span class="px-2.5 py-1 rounded bg-black/60 text-[11px] ring-1 ring-white/10 shrink-0">{{ $chip }}</span>
            @endforeach
          </div>
        </div>
      </figure>
    </article>

    {{-- ================== PROYECTO 2: LEDDING OSS ================== --}}
    @php
      $ossPath = 'resources/images/projects/ledding-showcase.jpg';
      $ossSrcs = get_full_sources($ossPath, [1600,2400,3200]);
    @endphp

    <article class="project group grid lg:grid-cols-12 gap-8 items-center mt-8 py-12 border-t border-white/10"
             style="--accent:#B572FF">
      {{-- Visual primero para alternar composición --}}
      <figure class="lg:col-span-7 order-2 lg:order-1 relative" data-proj-visual>
        <div class="relative aspect-[16/10] w-full rounded-2xl overflow-hidden ring-1 ring-white/10 bg-black/30">
          <picture class="absolute inset-0 w-full h-full">
            <source type="image/avif" srcset="{{ $ossSrcs['avif'] }}" sizes="(min-width:1024px) 60vw, 100vw">
            <source type="image/webp" srcset="{{ $ossSrcs['webp'] }}" sizes="(min-width:1024px) 60vw, 100vw">
            <img src="{{ $ossSrcs['fallback'] }}"
                 alt="Ledding: librería de animaciones con grids de LEDs"
                 class="w-full h-full object-cover"
                 width="2400" height="1500" loading="lazy" decoding="async">
          </picture>

          {{-- Malla fina para “tech vibes” --}}
          <div class="absolute inset-0 pointer-events-none opacity-30"
               style="background-image:linear-gradient(rgba(255,255,255,.08) 1px, transparent 1px),
                                      linear-gradient(90deg, rgba(255,255,255,.08) 1px, transparent 1px);
                      background-size: 24px 24px, 24px 24px;"></div>
        </div>
      </figure>

      <div class="lg:col-span-5 order-1 lg:order-2 space-y-5" data-proj-reveal>
        <div class="flex items-center gap-3">
          <div class="h-8 w-8 rounded-md bg-[var(--accent)]/25 ring-1 ring-white/15 flex items-center justify-center">
            <svg class="w-5 h-5 text-[var(--accent)]"><use href="#icon-style"/></svg>
          </div>
          <h3 class="text-xl font-semibold">Ledding — producto OSS</h3>
        </div>

        <p class="text-white/90">
          Animaciones con grillas de “LEDs” que no cuestan rendimiento y se integran fácil.
          Ideal para dar vida al sitio sin distraer.
        </p>

        <div class="rounded-xl bg-white/5 ring-1 ring-white/10 p-4">
          <dl class="grid gap-3 sm:grid-cols-3">
            <div class="p-3 rounded-lg bg-black/30 ring-1 ring-white/10">
              <dt class="text-xs text-gray-400">Reto</dt>
              <dd class="mt-1 text-sm text-gray-100">Efectos expresivos con peso mínimo.</dd>
            </div>
            <div class="p-3 rounded-lg bg-black/30 ring-1 ring-white/10">
              <dt class="text-xs text-gray-400">Cómo</dt>
              <dd class="mt-1 text-sm text-gray-100">Layouts de matriz, estados discretos y control por scroll.</dd>
            </div>
            <div class="p-3 rounded-lg bg-black/30 ring-1 ring-white/10">
              <dt class="text-xs text-gray-400">Resultado</dt>
              <dd class="mt-1 text-sm text-gray-100">Identidad viva, tiempos estables.</dd>
            </div>
          </dl>
        </div>

        <div class="flex gap-3 pt-2">
          <a href="/"
             class="inline-flex items-center gap-2 rounded-lg bg-white/10 px-4 py-2 text-sm font-semibold
                    hover:bg-white/15 ring-1 ring-white/15 transition-colors">
            Ver mini-landing
            <svg class="h-4 w-4"><use href="#icon-arrow-right"/></svg>
          </a>
          <a href="/"
             class="inline-flex items-center gap-2 rounded-lg bg-black/40 px-4 py-2 text-sm font-semibold
                    hover:bg-black/50 ring-1 ring-white/10 transition-colors">
            Caso de estudio
          </a>
        </div>
      </div>
    </article>

    {{-- CTA final opcional --}}
    <div class="mt-14">
      <a href="#contacto"
         class="inline-flex items-center gap-2 rounded-lg bg-white/10 px-4 py-2 text-sm font-semibold
                hover:bg-white/15 ring-1 ring-white/15 transition-colors">
        ¿Hacemos tu proyecto?
        <svg class="h-4 w-4"><use href="#icon-arrow-right"/></svg>
      </a>
    </div>
  </div>
</section>
