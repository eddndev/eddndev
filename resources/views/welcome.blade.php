@extends('layouts.app')

@section('title', 'edd n\' dev')

@section('content')
<div id="hero" class="relative min-h-screen overflow-hidden flex items-center justify-center lg:justify-start">
  <div id="ledding-animation-container" class="absolute inset-0 z-0"></div>

  <div id="hero-vignette"
       class="absolute inset-0 bg-[radial-gradient(ellipse_at_right,_transparent_30%,_#000_80%)] pointer-events-none z-10">
  </div>

  <div class="w-full pt-8 lg:pt-10 pb-16 lg:pb-20">
    <div class="mx-auto max-w-7xl px-6 sm:px-12">
      <section class="relative z-20 flex flex-col justify-center w-full lg:max-w-[56%] xl:max-w-[720px] text-center lg:text-left">
        <div style="--title: clamp(4.7rem, 8vw, 7rem);">
          <h1 class="sr-only">Lanzamiento de página web profesional</h1>

          <h2 id="hello"
              class="font-extrabold tracking-tight text-[calc(var(--title)*0.48)] leading-[0.95]">
            Tu marca en línea
          </h2>

          <h2 id="name"
              class="font-black tracking-tight hero-text-gradient text-[length:var(--title)] leading-[0.9] -mt-1">
            lista para despegar        
          </h2>
        </div>

        <div class="mt-4 lg:mt-6 p-4 lg:p-6 rounded-2xl bg-black/20 border border-white/10 backdrop-blur-sm">
          <!-- Descripción breve -->
          <p data-hero-intro
             class="max-w-xl text-md lg:text-lg text-gray-200 mx-auto lg:mx-0 leading-relaxed">
            Contrata durante el lanzamiento y participas automáticamente para ganar
            <strong>5 años de servicio técnico</strong>. Primer año <strong>GRATIS</strong>
            (dominio, hosting, correo y SSL). Entrega en <strong>72 h</strong>.
          </p>

          <!-- Precio destacado -->
          <div class="mt-3">
            <span class="inline-flex items-baseline px-3 py-2 rounded-lg bg-purple-600/20 text-purple-100 ring-1 ring-purple-500/40">
              <span class="text-xs font-semibold uppercase tracking-wide opacity-80 mr-2">Desde</span>
              <span class="text-2xl lg:text-3xl font-black">$2,999 MXN</span>
            </span>
          </div>

          <!-- Componentes del paquete -->
          <div class="mt-4 lg:mt-5 flex flex-wrap gap-2 justify-center lg:justify-start text-base font-semibold">
            <span data-badge class="px-3 py-2 rounded-full bg-white/5 ring-1 ring-white/10">🌐 Dominio <b class="text-purple-400">GRATIS</b> 1er año</span>
            <span data-badge class="px-3 py-2 rounded-full bg-white/5 ring-1 ring-white/10">💻 Hosting <b class="text-purple-400">GRATIS</b> 1er año</span>
            <span data-badge class="px-3 py-2 rounded-full bg-white/5 ring-1 ring-white/10">📧 Correo profesional <b class="text-purple-400">GRATIS</b></span>
            <span data-badge class="px-3 py-2 rounded-full bg-white/5 ring-1 ring-white/10">🔒 Certificado SSL incluido</span>
            <span data-badge class="px-3 py-2 rounded-full bg-white/5 ring-1 ring-white/10 opacity-80">⚡ Entrega rápida (72 h)</span>
          </div>

          <!-- Vigencia -->
          <p class="mt-3 text-xs text-gray-400">
            Vigencia: hasta agosto de 2025. Aplican <a href="#bases" class="underline">bases y condiciones</a>.
          </p>
        </div>

        <!-- CTAs para web -->
        <div class="mt-6 lg:mt-8 flex items-center gap-4 justify-center lg:justify-start">
          <a data-cta href="#paquetes"
             class="inline-flex items-center justify-center bg-purple-600 hover:bg-purple-500 text-white font-semibold py-3 px-6 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-purple-400 ring-offset-2 ring-offset-black">
            Ver paquetes
          </a>

          <a data-cta href="https://wa.me/5215622101391?text=%C2%A1Hola!%20Me%20gustar%C3%ADa%20cotizar%20un%20proyecto%20web%20a%20medida." target="_blank" rel="noopener"
             class="inline-flex items-center justify-center group font-semibold py-3 px-6 rounded-lg text-purple-200 bg-white/0 border border-purple-400/40 hover:bg-purple-600/90 hover:text-white hover:border-transparent transition-colors focus:outline-none focus:ring-2 focus:ring-purple-400 ring-offset-2 ring-offset-black" onclick="fbq('track', 'Contact');">
            Hablemos
            <svg class="ml-2 size-5 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none">
              <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </a>
        </div>

        <nav data-quicknav class="mt-6 hidden lg:flex ..."></nav>
      </section>
    </div>
  </div>
</div>


@include('partials.sections.focus')
@include('partials.sections.projects')
@include('partials.sections.pricing')

<section id="contacto-medida" class="bg-black text-white border-t border-white/10">
    <div class="mx-auto max-w-3xl px-6 sm:px-12 py-16 text-center">
        <h2 class="text-3xl font-black tracking-tight">¿Tu Proyecto es Único?</h2>
        <p class="mt-4 text-gray-300 max-w-xl mx-auto">
            Los planes son una guía, pero cada idea es diferente. Si tienes necesidades más grandes o específicas, estoy para ayudarte a construir una solución a la medida.
        </p>
        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="https://wa.me/5215622101391?text=%C2%A1Hola!%20Me%20gustar%C3%ADa%20cotizar%20un%20proyecto%20web%20a%20medida." onclick="fbq('track', 'Contact');"
               target="_blank" rel="noopener"
               class="inline-flex items-center justify-center w-full sm:w-auto rounded-lg px-6 py-3 text-sm font-semibold transition-colors bg-purple-600 hover:bg-purple-500 text-white">
                Contactar por WhatsApp
            </a>
            <a href="mailto:contacto@eddndev.com" onclick="fbq('track', 'Contact');" 
               class="inline-flex items-center justify-center w-full sm:w-auto rounded-lg px-6 py-3 text-sm font-semibold transition-colors bg-white/10 hover:bg-white/15 ring-1 ring-white/15 text-white">
                Enviar un Email
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const hello = document.getElementById('hello');
    const name  = document.getElementById('name');
    if (!hello || !name) return;

    function debounce(func, delay) {
        let timeoutId;
        return function(...args) {
            // Cada vez que se llama, se limpia el temporizador anterior.
            clearTimeout(timeoutId);
            // Se establece un nuevo temporizador.
            timeoutId = setTimeout(() => {
                func.apply(this, args);
            }, delay);
        };
    }

    function fit() {
        // 1. Quitamos nuestro estilo en línea para que la clase de CSS tome efecto.
        hello.style.removeProperty('font-size');

        // 2. Leemos el tamaño de fuente que el CSS (clamp) quiere aplicar AHORA.
        const base = parseFloat(getComputedStyle(hello).fontSize);
        if (!base) return;

        // 3. Medimos los anchos para obtener la proporción correcta.
        const ratio = name.offsetWidth / hello.offsetWidth;

        // 4. Aplicamos nuestro tamaño calculado con '!important' para tomar el control de nuevo.
        hello.style.setProperty('font-size', (base * ratio) + 'px', 'important');
    }

    // Creamos una versión "debounced" de nuestra función fit.
    // 150ms es un buen valor, se siente responsivo pero no es pesado.
    const debouncedFit = debounce(fit, 150);

    // Usamos la versión DEBOUNCED en el observador.
    const container = hello.parentElement;
    if(container) {
        const ro = new ResizeObserver(debouncedFit); // ¡Usamos la nueva función aquí!
        ro.observe(container);
    }

    // El primer ajuste al cargar la página sí debe ser inmediato.
    fit();
});
</script>
@endpush