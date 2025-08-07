<footer id="site-footer" class="mt-24 text-gray-300">
  <!-- Wrapper con solo UNA esquina superior redondeada -->
  <div class="relative overflow-hidden rounded-tr-[56px]">
    <!-- Fondo gradiente -->
    <div aria-hidden="true"
         class="absolute inset-0 -z-10 bg-gradient-to-tr from-[#0b0718] via-[#1a0d2a] to-[#3a1466]"></div>

    <!-- Glow decorativo opcional -->
    <div aria-hidden="true"
         class="pointer-events-none absolute -top-24 -right-12 h-56 w-56 rounded-full
                bg-purple-500/20 blur-3xl"></div>

    <!-- Contenido -->
    <div class="relative mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20">
      <!-- Grid principal -->
      <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-4">

        <!-- Col 1: Marca / About -->
        <div class="space-y-5" data-reveal>
          <h3 class="text-xl font-bold tracking-tight text-white">edd n’ dev</h3>
          <p class="text-sm/6 text-gray-300">
            Diseño y desarrollo web con enfoque en performance, UI/UX y animación.  
            Construyo experiencias a medida que cuentan historias con código.
          </p>

          <!-- CTA mini -->
          <a href="#contacto"
             class="inline-flex items-center gap-2 rounded-lg bg-purple-600 px-4 py-2 text-sm font-semibold text-white
                    shadow-sm transition-colors hover:bg-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-400 ring-offset-2 ring-offset-black">
            <svg class="h-4 w-4" aria-hidden="true"><use href="#icon-arrow-right" /></svg>
            Empecemos tu proyecto
          </a>
        </div>

        <!-- Col 2: Navegación -->
        <nav class="grid grid-cols-2 gap-6 sm:grid-cols-3 md:grid-cols-2" aria-label="Footer" data-reveal>
          <div>
            <h4 class="mb-3 text-sm font-semibold text-white">Navegación</h4>
            <ul class="space-y-2 text-sm">
              <li><a href="#proyectos" class="hover:text-white transition-colors">Proyectos</a></li>
              <li><a href="#casos" class="hover:text-white transition-colors">Casos de estudio</a></li>
              <li><a href="#playground" class="hover:text-white transition-colors">Playground</a></li>
              <li><a href="#stack" class="hover:text-white transition-colors">Stack</a></li>
              <li><a href="#sobre-mi" class="hover:text-white transition-colors">Sobre mí</a></li>
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

        <!-- Col 3: Contacto -->
        <div class="space-y-4" data-reveal>
          <h4 class="text-sm font-semibold text-white">Contacto</h4>

          <a href="mailto:tu-correo@dominio.com"
             class="group flex items-center gap-3 rounded-lg border border-white/10 bg-white/5 px-4 py-3 text-sm
                    transition hover:border-white/20 hover:bg-white/8">
            <svg class="h-5 w-5 text-purple-300 transition group-hover:scale-110" aria-hidden="true">
              <use href="#icon-upload" />
            </svg>
            <span class="text-gray-200">tu-correo@dominio.com</span>
          </a>

          <a href="https://wa.me/521XXXXXXXXXX" target="_blank" rel="noopener"
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

        <!-- Col 4: Social + Mini newsletter / Nota -->
        <div class="space-y-5" data-reveal>
          <h4 class="text-sm font-semibold text-white">Redes</h4>
          <div class="flex flex-wrap items-center gap-3">
            <a href="https://instagram.com/tuuser" target="_blank" rel="noopener"
               class="group inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5
                      transition hover:border-white/20 hover:bg-white/10">
              <svg class="h-5 w-5 text-pink-300 transition group-hover:scale-110" aria-hidden="true">
                <use href="#icon-instagram" />
              </svg>
              <span class="sr-only">Instagram</span>
            </a>
            <a href="https://facebook.com/tuuser" target="_blank" rel="noopener"
               class="group inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5
                      transition hover:border-white/20 hover:bg-white/10">
              <svg class="h-5 w-5 text-blue-300 transition group-hover:scale-110" aria-hidden="true">
                <use href="#icon-facebook" />
              </svg>
              <span class="sr-only">Facebook</span>
            </a>
            <a href="mailto:tu-correo@dominio.com"
               class="group inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5
                      transition hover:border-white/20 hover:bg-white/10">
              <svg class="h-5 w-5 text-purple-200 transition group-hover:scale-110" aria-hidden="true">
                <use href="#icon-upload" />
              </svg>
              <span class="sr-only">Correo</span>
            </a>
          </div>

          <!-- Bloque “¿tienes un reto?” -->
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

      <!-- Barra inferior -->
      <div class="flex flex-col-reverse items-center justify-between gap-4 text-sm sm:flex-row">
        <p class="text-gray-400">© <span id="y-copy">{{ date('Y') }}</span> edd n’ dev. Todos los derechos reservados.</p>
        <ul class="flex items-center gap-5 text-gray-400">
          <li><a href="/aviso-privacidad" class="hover:text-white">Aviso de privacidad</a></li>
          <li><a href="/terminos" class="hover:text-white">Términos</a></li>
          <li><a href="#contacto" class="hover:text-white">Contacto</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
