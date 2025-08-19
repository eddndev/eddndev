<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licencia Permanente Tipo A | AngelViajero</title>
    <meta name="description" content="Obtén tu Licencia Permanente Tipo A para CDMX y Edomex. Trámite listo en menos de 2 horas. Paga nuestros honorarios hasta que termines. ¡Contáctanos!">

    <!-- Google Fonts (Poppins) - Optimizado con preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <style>
        /* ----------------------------------- */
/* 1. CSS Variables (Custom Properties)*/
/* ----------------------------------- */
:root {
    /* Colors defined in the brief */
    --primary-orange: #F97316;
    --primary-red: #DC2626;
    --text-dark: #1F2937;

    /* Extended Palette */
    --text-light: #6B7280;
    --bg-white: #FFFFFF;
    --bg-lightgray: #F3F4F6;
    --border-color: #E5E7EB;
    --whatsapp-green: #25D366;

    /* Typography (Poppins) */
    --font-family: 'Poppins', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;

    /* Fluid Typography (Using clamp()) */
    /* H1: 32px min, scaling up to 48px max */
    --font-h1: clamp(2rem, 1.5rem + 2.5vw, 3rem);
    /* H2: 24px min, scaling up to 36px max */
    --font-h2: clamp(1.5rem, 1.1rem + 2vw, 2.25rem);
    /* H3: 18px min, scaling up to 22px max */
    --font-h3: clamp(1.125rem, 1rem + 0.6vw, 1.375rem);
    --font-base: 1rem; /* 16px */

    /* Spacing & Layout */
    --container-width: 1140px;
    --spacing-sm: 0.5rem;
    --spacing-md: 1rem;
    --spacing-lg: 2rem;
    --spacing-xl: 4rem;

    /* Misc */
    --radius: 8px;
    --shadow-light: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    --shadow-heavy: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    --transition: 0.3s ease-in-out;
}

/* ----------------------------------- */
/* 2. Reset & Base Styles (Mobile-First) */
/* ----------------------------------- */
*, *::before, *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: var(--font-family);
    font-size: var(--font-base);
    line-height: 1.6;
    color: var(--text-dark);
    background-color: var(--bg-white);
    -webkit-font-smoothing: antialiased;
}

h1, h2, h3 {
    line-height: 1.2;
    margin-bottom: var(--spacing-md);
    font-weight: 700;
}

h1 { font-size: var(--font-h1); }
h2 { font-size: var(--font-h2); }
h3 { font-size: var(--font-h3); }

p {
    color: var(--text-light);
    margin-bottom: var(--spacing-md);
}

a {
    text-decoration: none;
    color: inherit;
}

/* ----------------------------------- */
/* 3. Utility Classes                  */
/* ----------------------------------- */
.container {
    max-width: var(--container-width);
    margin: 0 auto;
    padding: 0 var(--spacing-md);
}

@media (min-width: 768px) {
    .container {
        padding: 0 var(--spacing-lg);
    }
}

.section-title {
    text-align: center;
    margin-bottom: var(--spacing-xl);
}

/* ----------------------------------- */
/* 4. Components (BEM Methodology)     */
/* ----------------------------------- */

/* CTA Button (Global Component) */
.cta-button {
    display: inline-block;
    background-color: var(--primary-orange);
    color: var(--bg-white);
    padding: 0.75rem 1.5rem;
    border-radius: var(--radius);
    font-weight: 600;
    text-align: center;
    transition: transform var(--transition), box-shadow var(--transition), background-color var(--transition);
    box-shadow: var(--shadow-light);
}

.cta-button:hover {
    background-color: #ea580c; /* Darker shade */
    transform: translateY(-3px) scale(1.02);
    box-shadow: var(--shadow-heavy);
}

.cta-button:active {
    transform: translateY(1px) scale(1);
    box-shadow: var(--shadow-light);
}

.cta-button:focus-visible {
    outline: 2px solid var(--primary-orange);
    outline-offset: 4px;
}

.cta-button--secondary {
    background-color: var(--primary-red);
}
.cta-button--secondary:hover {
    background-color: #c01f1f;
}

/* Component 1: Hero */
.hero {
    /* Subtle Gradient Background */
    background: linear-gradient(100deg, var(--bg-white) 0%, var(--bg-lightgray) 100%);
    padding: var(--spacing-xl) 0;
    text-align: center;
    border-bottom: 1px solid var(--border-color);
}

.hero__title {
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
}

.hero__subtitle {
    font-size: 1.125rem;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: var(--spacing-lg);
}

/* Component 2: Process */
.process {
    padding: var(--spacing-xl) 0;
}

.process__grid {
    display: grid;
    /* CSS Grid auto-fit for natural responsiveness */
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-lg);
}

.process-card {
    background: var(--bg-white);
    padding: var(--spacing-lg);
    border-radius: var(--radius);
    box-shadow: var(--shadow-light);
    text-align: center;
    transition: box-shadow var(--transition), transform var(--transition);
    border: 1px solid var(--border-color);
}

.process-card:hover {
    box-shadow: var(--shadow-heavy);
    transform: translateY(-5px);
}

.process-card__icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    background-color: var(--primary-orange);
    color: var(--bg-white);
    border-radius: 50%;
    margin-bottom: var(--spacing-md);
}

/* Component 3: Requirements & Costs */
.requirements {
    padding: var(--spacing-xl) 0;
    background-color: var(--bg-lightgray);
}

.requirements__layout {
    display: grid;
    /* Mobile First: Single Column */
    grid-template-columns: 1fr;
    gap: var(--spacing-xl);
}

.requirements__block {
    background-color: var(--bg-white);
    padding: var(--spacing-lg);
    border-radius: var(--radius);
    box-shadow: var(--shadow-light);
}

.requirements__block--highlighted {
    border-top: 4px solid var(--primary-red);
    text-align: center;
}

.requirements__list {
    list-style-type: none;
    padding-left: var(--spacing-lg);
    margin-bottom: var(--spacing-md);
}

.requirements__list li {
    margin-bottom: var(--spacing-sm);
    color: var(--text-light);
    position: relative;
}

/* Custom checkmark */
.requirements__list li::before {
    content: '✓';
    color: var(--primary-orange);
    font-weight: bold;
    position: absolute;
    left: calc(-1 * var(--spacing-lg));
}

.requirements__price-box {
    margin: var(--spacing-md) 0;
    padding: var(--spacing-md);
}

.requirements__price {
    display: block;
    font-size: var(--font-h1);
    font-weight: 700;
    color: var(--primary-red);
}

.requirements__detail {
    font-size: var(--font-base);
    color: var(--text-light);
}

/* Component 4: FAQ (Native Accordion) */
.faq {
    padding: var(--spacing-xl) 0;
}

.faq__accordion {
    max-width: 850px;
    margin: 0 auto;
}

.accordion-item {
    border: 1px solid var(--border-color);
    border-radius: var(--radius);
    margin-bottom: var(--spacing-md);
    background-color: var(--bg-white);
    box-shadow: var(--shadow-light);
}

.accordion-item__trigger {
    padding: var(--spacing-md);
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* Remove default browser arrow/marker */
    list-style: none;
}

.accordion-item__trigger::-webkit-details-marker {
    display: none;
}

.accordion-item__trigger h3 {
    margin-bottom: 0;
    font-weight: 600;
}

/* Custom Marker (+) */
.accordion-item__trigger::after {
    content: '+';
    font-size: 1.75rem;
    font-weight: bold;
    color: var(--primary-orange);
    transition: transform var(--transition);
    margin-left: var(--spacing-md);
    flex-shrink: 0; /* Prevent shrinking in flex container */
}

/* Rotate marker when open (to form an X) */
.accordion-item[open] > .accordion-item__trigger::after {
    transform: rotate(135deg);
}

.accordion-item__content {
    padding: 0 var(--spacing-md) var(--spacing-md);
    border-top: 1px solid var(--border-color);
    padding-top: var(--spacing-md);
}

/* Component 5: Final CTA */
.final-cta {
    padding: var(--spacing-xl) 0;
    background-color: var(--text-dark);
    text-align: center;
}

.final-cta h2 {
    color: var(--bg-white);
}

.final-cta p {
    color: var(--bg-lightgray);
    margin-bottom: var(--spacing-lg);
}

/* Footer */
.footer {
    padding: var(--spacing-md) 0;
    text-align: center;
    border-top: 1px solid var(--border-color);
    background-color: var(--bg-lightgray);
}

.footer p {
    margin-bottom: 0;
    font-size: 0.875rem;
}

/* ----------------------------------- */
/* 5. Features                         */
/* ----------------------------------- */

/* Floating WhatsApp Button */
.whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 25px;
    right: 25px;
    background-color: var(--whatsapp-green);
    border-radius: 50%;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: var(--shadow-heavy);
    transition: background-color var(--transition), transform var(--transition);
    /* Subtle Pulse Animation */
    animation: pulse 2.5s infinite;
}

.whatsapp-float:hover {
    background-color: #128C7E;
    transform: scale(1.1);
    animation: none; /* Stop animation on hover */
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
    }
    70% {
        box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
    }
}

/* ----------------------------------- */
/* 6. Media Queries (Breakpoints)      */
/* ----------------------------------- */

/* Tablet (≥ 768px) */
@media (min-width: 768px) {
    /* No major changes needed due to auto-fit grid in Process section */
}

/* Desktop (≥ 1024px) */
@media (min-width: 1024px) {
    .requirements__layout {
        /* Switch to Two Columns */
        grid-template-columns: 1fr 1fr;
        align-items: stretch; /* Make blocks equal height */
    }

    .hero {
        padding: calc(var(--spacing-xl) * 2) 0;
    }

    .whatsapp-float {
        bottom: 40px;
        right: 40px;
    }
}
    </style>

    <!-- JavaScript (Deferred para no bloquear el renderizado) -->
    <script defer>
        // Execute code when the DOM is fully loaded (safe practice even with 'defer')
document.addEventListener('DOMContentLoaded', () => {

    // --- Configuration ---
    // REPLACE WITH THE ACTUAL PHONE NUMBER (Format: CountryCode + Number, e.g., 521...)
    const WHATSAPP_PHONE = '5215651899438'; 
    const WHATSAPP_MESSAGE = '¡Hola AngelViajero! Me interesa información sobre el trámite de la licencia de conducir. ¿Podrían ayudarme, por favor?';

    // --- Functionality 1: Dynamic WhatsApp Links ---

    /**
     * Generates the WhatsApp API link with URL encoding.
     * @param {string} phone - The target phone number.
     * @param {string} message - The predefined message.
     * @returns {string} The complete, URL-encoded WhatsApp link.
     */
    const generateWhatsAppLink = (phone, message) => {
        // Ensure the message is properly encoded for the URL
        const encodedMessage = encodeURIComponent(message);
        return `https://api.whatsapp.com/send?phone=${phone}&text=${encodedMessage}`;
    }

    /**
     * Updates all elements with the class 'js-whatsapp-link'.
     */
    const initializeWhatsAppLinks = () => {
        const links = document.querySelectorAll('.js-whatsapp-link');
        const whatsappUrl = generateWhatsAppLink(WHATSAPP_PHONE, WHATSAPP_MESSAGE);

        links.forEach(link => {
            if (link.tagName === 'A') {
                link.setAttribute('href', whatsappUrl);
                // Open in a new tab for better user experience and tracking
                link.setAttribute('target', '_blank');
                link.setAttribute('rel', 'noopener noreferrer');
            }
        });
    }

    // --- Functionality 2: Dynamic Footer Year ---

    /**
     * Updates the footer year element with the current year.
     */
    const updateFooterYear = () => {
        const yearElement = document.getElementById('year');
        if (yearElement) {
            yearElement.textContent = new Date().getFullYear();
        }
    }

    // Initialize functions
    initializeWhatsAppLinks();
    updateFooterYear();
});
</script>
</head>
<body>

    <!-- Componente 1: Sección Hero -->
    <header class="hero">
        <div class="container hero__container">
            <h1 class="hero__title">Obtén tu Licencia de Conducir Rápido y 100% Legal</h1>
            <p class="hero__subtitle">Evita filas y trámites complicados. Gestionamos todo por ti en tiempo récord. ¡Contacta ahora y asegura tu lugar!</p>
            <a href="#" class="cta-button js-whatsapp-link">
                Iniciar Trámite por WhatsApp
            </a>
        </div>
    </header>

    <main>
        <!-- Componente 2: Sección Proceso -->
        <section id="proceso" class="process">
            <div class="container">
                <h2 class="section-title">Un Proceso Simple en 3 Pasos</h2>
                <div class="process__grid">
                    
                    <article class="process-card">
                        <div class="process-card__icon">
                            <!-- Icono 1: Chat (SVG Inline) -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor"><path d="M20 2H4C2.9 2 2 2.9 2 4V22L6 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2M20 16H5.2L4 17.2V4H20V16Z"/></svg>
                        </div>
                        <h3 class="process-card__title">1. Contacto Inicial</h3>
                        <p class="process-card__text">Haz clic en el botón de WhatsApp. Un asesor te responderá de inmediato para revisar tu caso.</p>
                    </article>

                    <article class="process-card">
                        <div class="process-card__icon">
                            <!-- Icono 2: Documentos (SVG Inline) -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor"><path d="M14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V8L14 2M18 20H6V4H13V9H18V20M8 12H16V14H8V12M8 16H16V18H8V16Z"/></svg>
                        </div>
                        <h3 class="process-card__title">2. Envío de Requisitos</h3>
                        <p class="process-card__text">Te solicitaremos los documentos básicos. Puedes enviarlos digitalmente de forma segura. Una vez liquidado el costo del trámite <strong>($1,500)</strong>, agendamos tu cita.</p>
                    </article>

                    <article class="process-card">
                        <div class="process-card__icon">
                            <!-- Icono 3: Check (SVG Inline) -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor"><path d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z"/></svg>
                        </div>
                        <h3 class="process-card__title">3. Recoge y Paga al Final</h3>
                        <p class="process-card__text">Acude al módulo, recoge tu licencia oficial y, solo hasta que la tengas en tus manos, realizas el pago de nuestra gestión. ¡Tu tranquilidad es primero!</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Componente 3: Sección Requisitos y Costos -->
        <section id="requisitos" class="requirements">
            <div class="container">
                <h2 class="section-title">Requisitos y Costos Transparentes</h2>
                <div class="requirements__block">
                    <h3>Requisitos Indispensables</h3>
                    <p>Solo necesitamos 6 datos básicos para iniciar tu gestión:</p>
                    <ul class="requirements__list">
                        <li>CURP (Clave Única de Registro de Población).</li>
                        <li>Correo electrónico vigente.</li>
                        <li>Número de celular vigente.</li>
                        <li>Colonia en la que vives.</li>
                        <li>Código postal.</li>
                        <li>Una contraseña para crear tu perfil en el portal oficial.</li>
                    </ul>
                    <p><em>*Tu información está 100% segura y solo se usa para este trámite.</em></p>
                </div>

<div class="requirements__block requirements__block--highlighted">
    <h3>Inversión Transparente</h3>
    <p>Sin costos ocultos. Paga nuestra gestión hasta el final.</p>

    <div class="requirements__price-box">
        <span class="requirements__price">$400 MXN</span>
        <span class="requirements__detail">(Nuestros Honorarios de Gestión)</span>
    </div>

    <p><strong>Importante:</strong> El costo de los derechos de la licencia <strong>($1,500 MXN)</strong> lo pagas tú directamente al gobierno.</p>

    <a href="#" class="cta-button cta-button--secondary js-whatsapp-link">
        Pide Informes y Comienza
    </a>
</div>
            </div>
        </section>

        <!-- Componente 4: Sección FAQ -->
        <section id="faq" class="faq">
            <div class="container">
                <h2 class="section-title">Preguntas Frecuentes (FAQ)</h2>
                <div class="faq__accordion">

                    <details class="accordion-item">
                        <summary class="accordion-item__trigger">
                            <h3>¿La licencia es 100% legal y original?</h3>
                        </summary>
                        <div class="accordion-item__content">
                            <p>Totalmente. El trámite se realiza en los portales oficiales y tú mismo recoges la licencia física en un módulo de gobierno. Es un documento oficial y verificable.</p>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-item__trigger">
                            <h3>¿En cuánto tiempo está listo el trámite?</h3>
                        </summary>
                        <div class="accordion-item__content">
                            <p>Una vez que nos proporcionas tus datos, la gestión para que puedas pasar a recoger tu licencia toma menos de 2 horas. ¡Es el servicio más rápido! Las citas de recepción están hábiles en un promedio de 5 días después de finalizar el trámite.</p>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-item__trigger">
                            <h3>¿Qué vigencia tiene la licencia?</h3>
                        </summary>
                        <div class="accordion-item__content">
                            <p>La licencia que gestionamos es de tipo A (automóvil particular) y es PERMANENTE. Olvídate de volver a renovarla.</p>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-item__trigger">
                            <h3>¿Realmente pago los $400 hasta el final?</h3>
                        </summary>
                        <div class="accordion-item__content">
                            <p>Sí. Es nuestra garantía de satisfacción. Primero te ayudamos a asegurar tu trámite, pasas al módulo, recoges tu licencia y solo entonces nos pagas nuestros honorarios. No arriesgas absolutamente nada.</p>
                        </div>
                    </details>

                </div>
            </div>
        </section>

        <!-- Componente 5: CTA Final -->
        <section class="final-cta">
            <div class="container final-cta__container">
                <h2>¿Listo para conducir sin complicaciones?</h2>
                <p>Contacta ahora y deja la burocracia en nuestras manos expertas.</p>
                <a href="#" class="cta-button js-whatsapp-link">
                    Contactar Asesor Ahora
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; <span id="year">2024</span> AngelViajero - Servicios de Gestión Vehicular.</p>
        </div>
    </footer>

    <!-- Botón Flotante de WhatsApp -->
    <a href="#" class="whatsapp-float js-whatsapp-link" aria-label="Contactar por WhatsApp" title="Contactar por WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="white">
            <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.29 9.72 20.29 11.92C20.29 16.46 16.58 20.16 12.04 20.16C10.66 20.16 9.31 19.79 8.08 19.08L7.69 18.84L4.39 19.71L5.27 16.5L5.02 16.1C4.23 14.81 3.83 13.36 3.83 11.91C3.83 7.37 7.54 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7.03 8.5 7.03 9.71C7.03 10.93 7.92 12.1 8.03 12.26C8.14 12.41 9.53 14.5 11.66 15.41C12.16 15.61 12.57 15.73 12.89 15.83C13.44 15.98 13.95 15.95 14.36 15.89C14.83 15.82 15.98 15.26 16.19 14.6C16.4 13.95 16.4 13.39 16.34 13.28C16.28 13.17 16.05 13.09 15.83 12.98C15.6 12.87 14.4 12.29 14.18 12.21C13.95 12.12 13.78 12.08 13.62 12.3C13.46 12.52 13 13.03 12.89 13.17C12.78 13.28 12.66 13.3 12.45 13.19C12.23 13.08 11.42 12.83 10.45 11.97C9.72 11.31 9.17 10.5 9.06 10.28C8.95 10.07 9.04 9.96 9.16 9.85C9.27 9.75 9.39 9.59 9.5 9.47C9.61 9.35 9.65 9.19 9.73 9.06C9.81 8.94 9.76 8.78 9.7 8.66C9.64 8.54 9.15 7.33 8.95 7.33H8.53Z"/>
        </svg>
    </a> 
</body>
</html>