@extends('layouts.app')

@section('title', 'edd n\' dev')

@section('content')
<main class="relative min-h-screen overflow-hidden flex items-center justify-center lg:justify-start">
    <div id="ledding-animation-container" class="absolute inset-0 z-0"></div>

    <!-- añade id para animar la viñeta con GSAP si quieres -->
    <div id="hero-vignette"
        class="absolute inset-0 bg-[radial-gradient(ellipse_at_right,_transparent_30%,_#000_80%)] pointer-events-none z-10">
    </div>

    <section class="relative z-20 flex flex-col justify-center px-6 sm:px-12 py-20 w-full lg:max-w-[56%] xl:max-w-[720px] text-center lg:text-left">
        <div style="--title: clamp(4.7rem, 8vw, 7rem);">
            <h1 class="sr-only">Portafolio de Eduardo - Desarrollador y Diseñador Web</h1>

            <h2 id="hello"
          class="font-extrabold tracking-tight text-[calc(var(--title)*0.48)] leading-[0.95]">
                ¡Hola! Me llamo
            </h2>

      <h2 id="name"
          class="font-black tracking-tight hero-text-gradient text-[length:var(--title)] leading-[0.9] -mt-1">
        Eduardo
      </h2>
    </div>

    <p data-hero-intro
       class="mt-6 max-w-xl text-gray-300/90 mx-auto lg:mx-0 leading-relaxed">
      Desarrollador y diseñador web. Creo experiencias a medida uniendo código, animación y diseño para contar historias que conecten.
    </p>

    <!-- Badges: más opacos + hover dinámico -->
    <div class="mt-5 flex flex-wrap gap-2 justify-center lg:justify-start text-sm">
      <span data-badge class="px-3 py-1 rounded-full bg-white/12 border border-white/20 text-gray-100 shadow-[0_0_0_1px_rgba(255,255,255,0.06)]
                             backdrop-blur-[1px] transition-all duration-300
                             hover:bg-white/16 hover:border-white/30 hover:-translate-y-0.5 hover:shadow-lg
                             motion-reduce:transition-none motion-reduce:transform-none">UI/UX</span>
      <span data-badge class="px-3 py-1 rounded-full bg-white/12 border border-white/20 text-gray-100 shadow-[0_0_0_1px_rgba(255,255,255,0.06)]
                             backdrop-blur-[1px] transition-all duration-300
                             hover:bg-white/16 hover:border-white/30 hover:-translate-y-0.5 hover:shadow-lg
                             motion-reduce:transition-none motion-reduce:transform-none">Frontend</span>
      <span data-badge class="px-3 py-1 rounded-full bg-white/12 border border-white/20 text-gray-100 shadow-[0_0_0_1px_rgba(255,255,255,0.06)]
                             backdrop-blur-[1px] transition-all duration-300
                             hover:bg-white/16 hover:border-white/30 hover:-translate-y-0.5 hover:shadow-lg
                             motion-reduce:transition-none motion-reduce:transform-none">Backend</span>
      <span data-badge class="px-3 py-1 rounded-full bg-white/12 border border-white/20 text-gray-100 shadow-[0_0_0_1px_rgba(255,255,255,0.06)]
                             backdrop-blur-[1px] transition-all duration-300
                             hover:bg-white/16 hover:border-white/30 hover:-translate-y-0.5 hover:shadow-lg
                             motion-reduce:transition-none motion-reduce:transform-none">Animación Web</span>
    </div>

    <!-- CTA: “Hablemos” como variante del primario -->
    <div class="mt-8 flex items-center gap-4 justify-center lg:justify-start">
      <a data-cta href="#proyectos"
         class="inline-flex items-center justify-center bg-purple-600 hover:bg-purple-500 text-white font-semibold py-3 px-6 rounded-lg transition-colors
                focus:outline-none focus:ring-2 focus:ring-purple-400 ring-offset-2 ring-offset-black">
        Proyectos
      </a>

      <!-- variante: borde + fondo translúcido al hover -->
      <a data-cta href="#contacto"
         class="inline-flex items-center justify-center font-semibold py-3 px-6 rounded-lg
                text-purple-200 bg-white/0 border border-purple-400/40
                hover:bg-purple-600/90 hover:text-white hover:border-transparent
                transition-colors focus:outline-none focus:ring-2 focus:ring-purple-400 ring-offset-2 ring-offset-black">
        <span>Hablemos</span>
        <svg class="ml-2 size-5 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none">
          <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
      </a>
    </div>

    <!-- Quick nav con subrayado animado -->
    <nav data-quicknav class="mt-6 hidden lg:flex gap-4 text-sm text-gray-400">
      <a href="#stack" class="relative hover:text-gray-200 transition-colors
                             after:absolute after:left-0 after:-bottom-1 after:h-px after:w-0 after:bg-gradient-to-r
                             after:from-purple-400/0 after:via-purple-400 after:to-purple-400/0
                             after:transition-[width] hover:after:w-full">Stack</a>
      <a href="#casos" class="relative hover:text-gray-200 transition-colors
                             after:absolute after:left-0 after:-bottom-1 after:h-px after:w-0 after:bg-gradient-to-r
                             after:from-purple-400/0 after:via-purple-400 after:to-purple-400/0
                             after:transition-[width] hover:after:w-full">Casos de estudio</a>
      <a href="#playground" class="relative hover:text-gray-200 transition-colors
                             after:absolute after:left-0 after:-bottom-1 after:h-px after:w-0 after:bg-gradient-to-r
                             after:from-purple-400/0 after:via-purple-400 after:to-purple-400/0
                             after:transition-[width] hover:after:w-full">Playground</a>
    </nav>
  </section>
</main>

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