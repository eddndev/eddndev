<section id="paquetes" class="bg-black text-white">
    <div class="mx-auto max-w-7xl px-6 sm:px-12 py-14 sm:py-20 lg:py-24">
        
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl sm:text-5xl font-black tracking-tight">Planes a la Medida de tu Crecimiento</h2>
            <p class="mt-4 text-gray-300 text-lg">
                Desde una presencia sólida hasta una tienda en línea completa. Elige el plan que impulse tu negocio al siguiente nivel.
            </p>
        </div>

        <div class="mt-16 grid gap-8 grid-cols-1 lg:grid-cols-3 items-stretch justify-items-center">

            {{-- Tarjeta 1: Empresarial (Ahora Destacada) --}}
            <x-pricing-card
                plan_name="Empresarial"
                subtitle="Ideal para negocios en crecimiento"
                price="4500"
                cta_href="https://wa.me/5215622101391?text=%C2%A1Hola!%20Estoy%20interesado%20en%20el%20plan%20%22Empresarial%22%20para%20mi%20negocio."
                :features="[
                    'Dominio y Hosting por 1 Año',
                    'Sitio web con <strong>hasta 5 secciones</strong> (ej. Inicio, Servicios)',
                    'Galería de imágenes ágil y optimizada',
                    'Formulario de contacto avanzado',
                    '<strong>Cuenta de Administrador</strong> para autogestión de contenido',
                    'Proceso colaborativo con <strong>tres rondas de revisiones</strong>'
                ]"
                :highlight="true"
            />

            {{-- Tarjeta 2: Corporativo --}}
            <x-pricing-card
                plan_name="Corporativo"
                subtitle="Para empresas consolidadas"
                price="12000"
                cta_href="https://wa.me/5215622101391?text=%C2%A1Hola!%20Estoy%20interesado%20en%20el%20plan%20%22Corporativo%22%20para%20mi%20negocio."
                :features="[
                    'Todo lo del plan Empresarial, y además:',
                    'Arquitectura web robusta (<strong>hasta 12 secciones</strong>)',
                    'Galerías visuales de <strong>alto impacto para catálogos</strong>',
                    '<strong>Catálogo de productos</strong> en línea (sin pasarela de pago)',
                    'Red de distribución global <br><strong>(Cloudflare CDN)</strong> <span class=inline-block title=Esto hace que tu sitio cargue a máxima velocidad en cualquier parte del mundo.><svg class=h-4 w-4 text-gray-400><use href=#icon-question-mark-circle /></svg></span>'
                ]"
            />

            {{-- Tarjeta 3: Tienda en Línea --}}
            <x-pricing-card
                plan_name="Tienda en Línea"
                subtitle="La solución completa para vender online"
                price="20000"
                cta_href="https://wa.me/5215622101391?text=%C2%A1Hola!%20Estoy%20interesado%20en%20el%20plan%20%22Tienda%20en%20Línea%22%20para%20mi%20negocio."
                :features="[
                    'Todo lo del plan Corporativo, y además:',
                    '<strong>Pasarela de Pagos</strong> integrada (Stripe/MercadoPago)',
                    'Gestión de inventario, productos y pedidos',
                    'Galerías de producto <strong>ilimitadas y de carga rápida</strong>',
                    'Soporte y <strong>revisiones prioritarias</strong>'
                ]"
            />

        </div>
    </div>
</section>

