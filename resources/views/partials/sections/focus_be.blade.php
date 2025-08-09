<section class="bg-black text-white">
  <div class="mx-auto max-w-7xl px-6 sm:px-12 py-14 sm:py-20 lg:py-24 grid gap-10 items-center lg:grid-cols-12">
    <div class="lg:col-span-6 order-1 space-y-6 min-w-0" data-focus-reveal>
      <h3 class="text-xl font-semibold flex items-center gap-2">
        <svg class="h-5 w-5 text-purple-300"><use href="#icon-spirit"/></svg>
        Lo que hace que todo funcione
      </h3>

      <p class="text-gray-300">
        Que tus formularios lleguen, tus correos se envíen y tus cambios se guarden
        sin esperas. Silencioso por dentro, confiable por fuera.
      </p>

      <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-gray-300">
        <li class="flex items-start gap-2"><span class="mt-1 inline-block size-1.5 rounded-full bg-[var(--brand)]"></span>-<strong>Respuesta inmediata</strong></li>
        <li class="flex items-start gap-2"><span class="mt-1 inline-block size-1.5 rounded-full bg-[var(--brand)]"></span>-<strong>Actualización simple</strong></li>
        <li class="flex items-start gap-2"><span class="mt-1 inline-block size-1.5 rounded-full bg-[var(--brand)]"></span>-<strong>Sin esperas</strong></li>
        <li class="flex items-start gap-2"><span class="mt-1 inline-block size-1.5 rounded-full bg-[var(--brand)]"></span>-<strong>Protegido</strong></li>
      </ul>

      {{-- Pipeline (tu animación se mantiene) --}}
      <div data-pipeline class="relative rounded-xl bg-white/[.06] ring-1 ring-white/10 p-4">
        {{-- SVG igual que el que ya tienes en tu versión corregida --}}
        @include('partials.sections._pipeline-svg')
      </div>

      <div class="rounded-xl bg-white/5 p-4 text-sm text-gray-200">
        <div class="font-semibold">POST /contact</div>
        <div class="text-gray-400">Respuestas sin spam · 201 Created</div>
        <pre class="mt-2 text-xs text-gray-300 sm:hidden">
{ "name":"Eduardo",  "message":"Hola" }
        </pre>
        <pre class="mt-2 text-xs text-gray-300 hidden sm:block">
{ "name":"Eduardo",  "message":"Hola", "email":"contacto@eddndev.com" }
        </pre>
      </div>

      <div class="flex flex-wrap gap-2 whitespace-nowrap -mx-2 px-2">
        @foreach (['Confiable','Sin esperas','Editable','Seguro'] as $chip)
          <span class="px-2 py-1 rounded bg-white/5 text-xs shrink-0">{{ $chip }}</span>
        @endforeach
      </div>
    </div>

    <aside class="lg:col-span-6 order-2">
      <div class="relative aspect-square w-full rounded-2xl overflow-hidden mx-auto mt-10 sm:mt-12 max-w-[22rem] sm:max-w-none" data-panel-square>
        <div class="absolute inset-0" id="ledding-be" data-ledding data-scheme="purple" data-pattern="be" aria-hidden="true"></div>
      </div>
    </aside>
  </div>
</section>
