{{-- ===================== UX / UI ===================== --}}
<section class="bg-black text-white">
  <div class="mx-auto max-w-7xl px-6 sm:px-12 py-14 sm:py-20 lg:py-24 grid gap-10 items-center lg:grid-cols-12 overflow-hidden">
    {{-- Contenido --}}
    <div id="uxui-block" class="lg:col-span-6 order-1 space-y-6 min-w-0" data-focus-reveal>
      <h3 class="text-xl font-semibold flex items-center gap-2">
        <svg class="h-5 w-5 text-purple-300"><use href="#icon-style"/></svg> Experiencias que venden
      </h3>

      <p class="text-gray-300">
        Más que estética, cada detalle, desde la tipografía hasta el contraste, está diseñado estratégicamente para convertir visitantes en clientes.
      </p>

      {{-- Tokens (mismo layout, textos más humanos) --}}
      <div data-ux-tokens class="flex flex-wrap gap-2 w-full">
        @foreach (['Ritmo: 8px','Esquinas: 16','Movimiento: 160ms','Profundidad: 2','Contraste: AA/AAA'] as $t)
          <span data-token class="px-2.5 py-1 rounded-full bg-white/10 text-gray-100 text-xs sm:text-sm ring-1 ring-white/15 max-w-full break-words">{{ $t }}</span>
        @endforeach
      </div>

      {{-- Escala tipográfica (señalando jerarquía) --}}
      <div data-type-scale class="space-y-2 min-w-0">
        <div class="text-3xl font-black tracking-tight">Titular · 32px/1.1</div>
        <div class="text-xl  font-bold  tracking-tight">Subtítulo · 20px/1.2</div>
        <div class="text-base font-medium text-gray-300">Texto base · 16px/1.6</div>
      </div>

      {{-- Swatches (misma estructura) --}}
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 min-w-0" data-swatches>
        <div data-swatch class="rounded-lg p-3 bg-white/5">
          <div class="h-12 rounded-md bg-white text-black flex items-center justify-center relative" role="img" aria-label="Fondo blanco, texto negro, contraste AAA">
            <span class="font-semibold tracking-wide">Aa</span>
            <span class="absolute right-2 bottom-1 text-[10px] text-gray-500 select-none">#FFFFFF</span>
          </div>
          <div class="mt-2 text-xs text-gray-400">Lectura nítida en fondos claros · <span class="font-semibold">21:1 AAA</span></div>
        </div>
        <div data-swatch class="rounded-lg p-3 bg-white/5">
          <div class="h-12 rounded-md bg-[#1A1A1A] text-white flex items-center justify-center relative" role="img" aria-label="Fondo #1A1A1A, texto blanco, contraste AAA">
            <span class="font-semibold tracking-wide">Aa</span>
            <span class="absolute right-2 bottom-1 text-[10px] text-gray-400 select-none">#1A1A1A</span>
          </div>
          <div class="mt-2 text-xs text-gray-400">Lectura cómoda en modo oscuro · <span class="font-semibold">12.1:1 AAA</span></div>
        </div>
      </div>

      {{-- Input demo (igual) --}}
      <form class="grid gap-2 max-w-sm w-full">
        <label for="ux-email" class="text-sm text-gray-400">Ejemplo de input con focus</label>
        <input id="ux-email" type="email" class="w-full rounded-lg bg-white/5 text-sm px-3 py-2 placeholder:text-gray-500 focus:outline-none focus:ring-2 focus:ring-[var(--brand)]" placeholder="tu@email.com" />
        <button type="button" class="inline-flex justify-center mt-2 rounded-lg bg-[var(--brand)] px-3 py-2 text-sm font-semibold hover:bg-[#7A14C9] transition-colors">
          Probar foco
        </button>
      </form>
    </div>

    {{-- Panel Ledding (sin cambios) --}}
    <aside class="lg:col-span-6 order-2">
      <div class="relative aspect-square w-full rounded-2xl overflow-hidden mx-auto mt-10 sm:mt-12 max-w-[22rem] sm:max-w-none" data-panel-square>
        <div class="absolute inset-0" id="ledding-ux" data-ledding data-scheme="purple" data-pattern="ux" aria-hidden="true"></div>
      </div>
    </aside>
  </div>
</section>
