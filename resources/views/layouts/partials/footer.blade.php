<footer id="site-footer" class="text-gray-300">
  <div class="relative overflow-hidden rounded-tr-[56px]">
    <!-- Fondo gradiente -->
    <div aria-hidden="true"
         class="absolute inset-0 -z-10 bg-gradient-to-tr from-[#10071c] via-[#1b0f2b] to-[#4b1a7d]"></div>
    <!-- Glow opcional -->
    <div aria-hidden="true"
         class="pointer-events-none absolute -top-24 -right-12 h-56 w-56 rounded-full bg-purple-500/20 blur-3xl"></div>

    <!-- Usa el MISMO gutter que en el hero: px-6 sm:px-12 -->
    <div class="relative mx-auto max-w-7xl px-6 sm:px-12 py-16 lg:py-20">
      <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-4">
        <!-- About -->
        <div class="space-y-5" data-reveal>
          <h3 class="sr-only">edd n’ dev</h3>
          <x-media.logo
              src="resources/images/CharLogo.png"
              alt="edd n’ dev"
              size="md"
              class="h-10 w-auto"
          />
          <p class="text-sm/6 text-gray-300">
            Diseño y desarrollo web con enfoque en performance, UI/UX y animación.
            Construyo experiencias a medida que cuentan historias con código.
          </p>
          <a href="#contacto"
             class="inline-flex items-center gap-2 rounded-lg bg-purple-600 px-4 py-2 text-sm font-semibold text-white
                    shadow-sm transition-colors hover:bg-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-400 ring-offset-2 ring-offset-black">
            <svg class="h-4 w-4" aria-hidden="true"><use href="#icon-arrow-right" /></svg>
            Empecemos tu proyecto
          </a>
        </div>

        <!-- Navegación -->
        <nav class="grid grid-cols-2 gap-6 sm:grid-cols-3 md:grid-cols-2" aria-label="Footer" data-reveal>
          <div>
            <h4 class="mb-3 text-sm font-semibold text-white">Navegación</h4>
            <ul class="space-y-2 text-sm">
              <li><a href="#proyectos"  class="hover:text-white transition-colors">Proyectos</a></li>
              <li><a href="#casos"      class="hover:text-white transition-colors">Casos de estudio</a></li>
              <li><a href="#playground" class="hover:text-white transition-colors">Playground</a></li>
              <li><a href="#stack"      class="hover:text-white transition-colors">Stack</a></li>
              <li><a href="#sobre-mi"   class="hover:text-white transition-colors">Sobre mí</a></li>
            </ul>
          </div>
          <div>
            <h4 class="mb-3 text-sm font-semibold text-white">Servicios</h4>
            <ul class="space-y-2 text-sm">
              <li>Diseño UI/UX</li>
              <li>Frontend (React/Vue)</li>
              <li>Backend (Laravel)</li>
              <li>Animación Web</li>
              <li>Optimización de performance</li>
            </ul>
          </div>
        </nav>

        <!-- Contacto -->
        <div class="space-y-4" data-reveal>
          <h4 class="text-sm font-semibold text-white">Contacto</h4>

          <a href="mailto:contacto@eddndev.com"
             class="group flex items-center gap-3 rounded-lg border border-white/10 bg-white/5 px-4 py-3 text-sm
                    transition hover:border-white/20 hover:bg-white/8">
            <svg class="h-5 w-5 text-purple-200 transition group-hover:scale-110" aria-hidden="true">
              <use href="#icon-mail" />
            </svg>
            <span class="text-gray-200">contacto@eddndev.com</span>
          </a>

          <a href="https://wa.me/52XXXXXXXXXX" target="_blank" rel="noopener"
             class="group flex items-center gap-3 rounded-lg border border-white/10 bg-white/5 px-4 py-3 text-sm
                    transition hover:border-white/20 hover:bg-white/8">
            <svg class="h-5 w-5 text-green-400 transition group-hover:scale-110" aria-hidden="true">
              <use href="#icon-whatsapp" />
            </svg>
            <span class="text-gray-200">WhatsApp</span>
          </a>

          <p class="text-xs text-gray-400/90">
            Horario: Lun–Vie · 10:00–18:00 (CDMX)
          </p>
        </div>

        <!-- Redes -->
        <div class="space-y-5" data-reveal>
          <h4 class="text-sm font-semibold text-white">Redes</h4>
          <div class="flex flex-wrap items-center gap-3">
            <a href="https://instagram.com/tuuser" target="_blank" rel="noopener" aria-label="Instagram"
               class="group inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5
                      transition hover:border-white/20 hover:bg-white/10">
              <svg class="h-5 w-5 text-pink-300 transition group-hover:scale-110"><use href="#icon-instagram" /></svg>
            </a>
            <a href="https://facebook.com/tuuser" target="_blank" rel="noopener" aria-label="Facebook"
               class="group inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5
                      transition hover:border-white/20 hover:bg-white/10">
              <svg class="h-5 w-5 text-blue-300 transition group-hover:scale-110"><use href="#icon-facebook" /></svg>
            </a>
            <a href="https://tiktok.com/@tuuser" target="_blank" rel="noopener" aria-label="TikTok"
               class="group inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5
                      transition hover:border-white/20 hover:bg-white/10">
              <svg class="h-5 w-5 text-gray-200 transition group-hover:scale-110"><use href="#icon-tiktok" /></svg>
            </a>
            <a href="mailto:contacto@eddndev.com" aria-label="Correo"
               class="group inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5
                      transition hover:border-white/20 hover:bg-white/10">
              <svg class="h-5 w-5 text-purple-200 transition group-hover:scale-110"><use href="#icon-mail" /></svg>
            </a>
          </div>

          <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
            <p class="text-sm text-gray-200">¿Tienes un reto técnico o de diseño?</p>
            <a href="#contacto" class="mt-2 inline-flex items-center gap-2 text-sm font-semibold text-purple-200 hover:text-white">
              Hablemos <svg class="h-4 w-4"><use href="#icon-arrow-right" /></svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Divider -->
      <div class="my-10 h-px w-full bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

      <!-- Barra inferior (sin “derechos reservados” ni políticas) -->
      <div class="flex flex-col-reverse items-center justify-between gap-4 text-sm sm:flex-row">
        <p class="text-gray-400">
          © {{ date('Y') }} Eduardo — Portafolio personal.  
          Las marcas e íconos pertenecen a sus respectivos propietarios.
        </p>
        <ul class="flex items-center gap-5 text-gray-400">
          <li>Hecho con Laravel · Tailwind · GSAP · Ledding</li>
        </ul>
      </div>
    </div>
  </div>
</footer>
