@extends('layouts.app')

@section('title', 'edd n\' dev')

@section('content')
<div id="hero" class="relative min-h-screen w-full flex flex-col justify-end pb-12 lg:pb-24 overflow-hidden">
  <!-- Fondo Animado -->
  <div id="ledding-animation-container" class="absolute inset-0 z-0"></div>

  <!-- Vignette sutil para asegurar lectura -->
  <div id="hero-vignette"
       class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent pointer-events-none z-10">
  </div>

  <!-- Contenido Principal -->
  <div class="relative z-20 w-full px-6 sm:px-12 max-w-[1800px] mx-auto">
    <header class="flex flex-col items-start">
      <!-- Etiqueta superior -->
      <div class="flex items-center gap-3 mb-4 lg:mb-6 opacity-70">
        <div class="w-2 h-2 bg-purple-500 rounded-full animate-pulse"></div>
        <span class="font-mono text-sm tracking-widest uppercase text-gray-300">eddndev studio &bull; est. 2020</span>
      </div>

      <!-- Título Masivo -->
      <h1 class="font-black tracking-tighter text-white leading-[0.85] text-[clamp(3.5rem,11vw,12rem)] mix-blend-screen">
        ESTUDIO <br>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-purple-200">FULL STACK</span>
      </h1>

      <!-- Subtítulo y Descripción -->
      <div class="mt-8 lg:mt-12 grid grid-cols-1 lg:grid-cols-12 gap-8 w-full border-t border-white/10 pt-8">
        <div class="lg:col-span-5">
          <p class="text-lg lg:text-xl text-gray-300 font-light leading-relaxed max-w-xl">
            Fusionamos <span class="text-white font-medium">ingeniería de software</span> con diseño de alto impacto. 
            Creamos ecosistemas digitales escalables, rápidos y visualmente inmersivos.
          </p>
        </div>

        <!-- CTAs -->
        <div class="lg:col-span-7 flex flex-col sm:flex-row items-start sm:items-center gap-6 lg:justify-end">
           <a href="mailto:contacto@eddndev.com" data-cursor-text="INICIAR" class="group relative px-8 py-4 bg-white text-black font-bold rounded-full overflow-hidden transition-transform hover:scale-105">
              <span class="relative z-10 group-hover:text-purple-700 transition-colors">Iniciar Proyecto</span>
           </a>
           
           <a href="https://wa.me/5215622101391" target="_blank" data-cursor-text="CHAT" class="group flex items-center gap-2 text-white font-medium hover:text-purple-300 transition-colors">
              <span>Hablemos por WhatsApp</span>
              <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
           </a>
        </div>
      </div>
    </header>
  </div>
</div>



@include('partials.sections.focus')
@include('partials.sections.projects')
@include('partials.sections.focus_ux')
@include('partials.sections.focus_fe')
@include('partials.sections.focus_be')

@endsection

@push('scripts')
<!-- Scripts específicos de la vista si son necesarios -->
@endpush