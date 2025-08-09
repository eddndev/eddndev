{{-- Header morado intenso --}}
<section id="focus" style="--brand:#6A0DAD" class="relative z-20 isolate bg-[var(--brand)] text-white">
  <div class="mx-auto max-w-7xl px-6 sm:px-12 py-20 sm:py-28">
    <span class="pointer-events-none select-none absolute inset-x-0 top-8 -z-10
                 text-[22vw] leading-none font-black text-black/15 tracking-tight">DISEÑO</span>

    <h2 class="text-3xl sm:text-5xl font-black tracking-tight">Claridad &amp; Movimiento</h2>
    <p class="mt-4 max-w-2xl text-white/90">
      Diseño interfaces nítidas y las construyo con <strong>HTML + Blade</strong> sobre <strong>Laravel</strong>,
      cuidando performance y animación con <strong>GSAP</strong> y <strong>Ledding</strong>.
    </p>
  </div>
</section>

@include('partials.sections.focus_ux')
@include('partials.sections.focus_fe')
@include('partials.sections.focus_be')

<section id="focus-outro" style="--brand:#6A0DAD" class="relative -z-30 isolate bg-[var(--brand)] text-white">
  <div class="mx-auto max-w-7xl px-6 sm:px-12 py-16 sm:py-24">
    <span class="pointer-events-none select-none absolute inset-x-0 top-8 -z-10
                 text-right text-[22vw] leading-none font-black text-black/15 tracking-tight">
      CÓDIGO
    </span>

    <div class="ml-auto text-right max-w-3xl">
      <h2 class="text-3xl sm:text-5xl font-black tracking-tight">
        ¿Listo para ver resultados?
      </h2>
      <p class="mt-4 text-white/90">
        Aquí termina la parte de enfoque. Al continuar, verás proyectos reales y cómo se ejecutaron.
      </p>

      <a href="#proyectos"
         class="inline-flex items-center gap-2 mt-6 rounded-lg bg-white/10 px-4 py-2 text-sm font-semibold
                hover:bg-white/15 ring-1 ring-white/15 transition-colors">
        Ver proyectos
        <svg class="h-4 w-4" aria-hidden="true"><use href="#icon-arrow-right"/></svg>
      </a>
    </div>
  </div>
</section>

{{-- Siguiente sección que queremos que parezca que sale desde debajo del outro --}}
<section class="h-screen bg-purple-500 z-100">
  <div class="mx-auto max-w-7xl px-6 sm:px-12 py-16 sm:py-24">
    <h2 class="text-3xl sm:text-5xl font-black tracking-tight">¿Listo para ver resultados?</h2>
  </div>
</section>