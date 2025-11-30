{{-- ===================== UX / UI ===================== --}}
<section class="bg-black text-white border-t border-white/10 relative overflow-hidden">
  <!-- Structural Grid -->
  <div class="absolute inset-0 pointer-events-none select-none max-w-[1800px] mx-auto px-6 sm:px-12">
      <div class="hidden lg:block absolute left-[41.666667%] top-0 bottom-0 w-px bg-white/10 origin-top transform scale-y-0" data-line-vertical></div>
      <!-- Crosshair top -->
      <div class="hidden lg:block absolute left-[41.666667%] top-0 -translate-x-1/2 -translate-y-1/2 text-purple-500">
          <svg width="15" height="15" viewBox="0 0 15 15" fill="none"><path d="M7.5 0V15M0 7.5H15" stroke="currentColor" stroke-width="1"/></svg>
      </div>
  </div>

  <div class="mx-auto max-w-[1800px] px-6 sm:px-12 py-24 lg:py-32 grid gap-16 items-center lg:grid-cols-12 relative z-10">
    
    {{-- Contenido (Texto) --}}
    <div id="uxui-block" class="lg:col-span-5 order-1 lg:order-1 space-y-8">
      <div class="space-y-4 relative">
        <div class="text-xs font-mono text-purple-400 tracking-widest mb-2 reveal-text">
            [ 01 · DESIGN ]
        </div>
        <h3 class="text-3xl font-bold tracking-tight text-white reveal-text">
          Diseño Sistémico
        </h3>
        <p class="text-gray-400 text-lg leading-relaxed reveal-text">
          No "pintamos" pantallas. Creamos <strong class="text-white font-medium">sistemas de diseño</strong> escalables. 
          Cada componente, desde la tipografía hasta los micro-movimientos, obedece a una lógica atómica que garantiza coherencia visual y facilidad de uso.
        </p>
      </div>

      {{-- Visual Hierarchy Abstract --}}
      <div class="grid gap-6 border-l border-white/10 pl-6 reveal-text">
        <div class="space-y-1">
          <div class="text-xs font-mono text-purple-400 uppercase tracking-widest">Nivel 1 · Claridad</div>
          <div class="text-white font-medium">Arquitectura de Información</div>
        </div>
        <div class="space-y-1">
           <div class="text-xs font-mono text-purple-400 uppercase tracking-widest">Nivel 2 · Emoción</div>
           <div class="text-white font-medium">Interacciones & Motion</div>
        </div>
      </div>
    </div>

    {{-- Panel Ledding (Visual) --}}
    <aside class="lg:col-span-7 order-2 lg:order-2 w-full flex justify-end lg:pl-12" data-side="right">
      <div class="relative w-full max-w-2xl aspect-[4/3] rounded-lg bg-[#0A0A0A] border border-white/10 overflow-hidden group" data-panel-reveal>
         <!-- Header falso de ventana -->
         <div class="absolute top-0 left-0 w-full h-8 bg-white/5 border-b border-white/5 flex items-center px-3 gap-2 z-10">
            <div class="w-2.5 h-2.5 rounded-full bg-white/20"></div>
            <div class="w-2.5 h-2.5 rounded-full bg-white/20"></div>
         </div>
         
         <!-- Ledding Container -->
         <div class="absolute inset-0 pt-8" id="ledding-ux" data-ledding data-pattern="ui"></div>
         
         <!-- Overlay sutil -->
         <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent pointer-events-none"></div>
      </div>
    </aside>
  </div>
</section>
