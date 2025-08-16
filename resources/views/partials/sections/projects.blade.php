<section id="proyectos" class="bg-black text-white">
    <div class="mx-auto max-w-7xl px-6 sm:px-12 py-14 sm:py-20 lg:py-24">

        <x-offer-card
            title="Paquete de Lanzamiento"
            price="A partir de $2,999"
            description="Diseñamos el paquete perfecto para negocios que quieren empezar con una base técnica y visual de primer nivel. Esto es todo lo que incluye:"
            :inclusions="[
                ['icon' => 'icon-layout', 'text' => '<strong>Landing Page Profesional y a Medida</strong>, optimizada para convertir visitantes en clientes.'],
                ['icon' => 'icon-rocket', 'text' => '<strong>Entrega y Publicación en 72 Horas</strong> para que lances tu negocio sin esperas.'],
                ['icon' => 'icon-shield', 'text' => '<strong>Servicios Técnicos Incluidos por 1 Año:</strong> Dominio, Hosting, Correo Profesional y Certificado SSL.']
            ]"
            bonus_title="Bono Exclusivo de Lanzamiento"
            bonus_description="Al contratar antes del 30 de septiembre de 2025, participas para ganar 5 AÑOS de servicio GRATIS."
            :cta="['label' => 'Agendar consulta', 'href' => 'https://wa.me/5215622101391?text=%C2%A1Hola!%20Me%20gustar%C3%ADa%20cotizar%20un%20proyecto%20web%20a%20medida.']"
            img="resources/images/offer.png"
            alt="Ejemplo de landing page profesional construida para la oferta de lanzamiento"
            accent="#E3B3FF"
            :reverse="true"
        />

    </div>
</section>