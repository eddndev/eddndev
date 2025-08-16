<section class="bg-black text-white">
  <div class="mx-auto max-w-7xl px-6 sm:px-12 py-14 sm:py-20 lg:py-24 grid gap-10 items-center lg:grid-cols-12">
    <aside class="lg:col-span-6 order-2 lg:order-1">
      <div class="relative aspect-square w-full rounded-2xl overflow-hidden mx-auto mt-10 sm:mt-12 max-w-[22rem] sm:max-w-none" data-panel-square>
        <div class="absolute inset-0" id="ledding-fe" data-ledding data-scheme="purple" data-pattern="fe" aria-hidden="true"></div>
      </div>
    </aside>

    <div class="lg:col-span-6 order-1 lg:order-2 space-y-6" data-focus-reveal>
      <h3 class="text-xl font-semibold flex items-center gap-2">
        <svg class="h-5 w-5 text-purple-300"><use href="#icon-strength"/></svg>
        Rendimiento que <strong>Impulsa tu Negocio</strong>
      </h3>

      <p class="text-gray-300">
        En internet, cada segundo cuenta. Un sitio lento pierde clientes y posicionamiento en Google. Por eso, optimizamos cada línea de código para garantizar una velocidad de carga excepcional. Con la entrega en 72 horas, no solo obtienes un sitio rápido, sino una ventaja competitiva inmediata.
      </p>

      <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-gray-300">
        <li class="flex items-start gap-2"><span class="mt-1 inline-block size-1.5 rounded-full bg-[var(--brand)]"></span>-<strong>Ágil</strong></li>
        <li class="flex items-start gap-2"><span class="mt-1 inline-block size-1.5 rounded-full bg-[var(--brand)]"></span>-<strong>Fácil de usar</strong></li>
        <li class="flex items-start gap-2"><span class="mt-1 inline-block size-1.5 rounded-full bg-[var(--brand)]"></span>-<strong>Consistente</strong></li>
        <li class="flex items-start gap-2"><span class="mt-1 inline-block size-1.5 rounded-full bg-[var(--brand)]"></span>-<strong>Encontrable</strong></li>
      </ul>

      {{-- Métricas con etiquetas en lenguaje llano --}}
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-3" data-metrics>
        <div data-metric class="rounded-lg bg-white/5 p-3">
          <div class="text-xs text-gray-400">Carga</div>
          <div class="text-2xl font-bold" data-metric-val="2.1">2.1s</div>
        </div>
        <div data-metric class="rounded-lg bg-white/5 p-3">
          <div class="text-xs text-gray-400">Estabilidad</div>
          <div class="text-2xl font-bold" data-metric-val="0.02">0.02</div>
        </div>
        <div data-metric class="rounded-lg bg-white/5 p-3">
          <div class="text-xs text-gray-400">Peso</div>
          <div class="text-2xl font-bold" data-metric-val="68">68KB</div>
        </div>
        <div data-metric class="rounded-lg bg-white/5 p-3">
          <div class="text-xs text-gray-400">Fluidez</div>
          <div class="text-2xl font-bold" data-metric-val="60">60</div>
        </div>
      </div>

      {{-- Snippet se queda oculto en xs como ya lo tenías --}}
      <div class="rounded-xl bg-black/60 p-4 hidden md:block">
        <pre class="text-xs text-gray-300 overflow-x-auto leading-relaxed">
&lt;picture&gt;
  &lt;source type="image/avif" srcset="... 800w, ... 1200w" sizes="100vw"&gt;
  &lt;source type="image/webp" srcset="... 800w, ... 1200w" sizes="100vw"&gt;
  &lt;img src="{{ get_image('resources/images/hero.jpg') }}"
       width="1600" height="900" loading="lazy" decoding="async" /&gt;
&lt;/picture&gt;
        </pre>
      </div>
    </div>
  </div>
</section>
