<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquinaria Global Imports | Confianza y Potencia Internacional</title>
    <!-- Importando Fuentes: Oswald para títulos (Industrial/Fuerte) y Roboto para texto (Legible/Profesional) -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* --- Estilos Base y Variables --- */
        :root {
            --primary-color: #003366; /* Azul marino (Confianza, Profesionalismo) */
            --secondary-color: #FF8C00; /* Naranja (Industria, Acción) */
            --text-color: #333;
            --bg-light: #f4f4f4;
            --bg-white: #fff;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--bg-light);
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            overflow: hidden;
        }
        a {
            text-decoration: none;
            color: var(--text-color);
        }
        h1, h2, h3 {
            font-family: 'Oswald', sans-serif;
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        .section-padding {
            padding: 80px 0;
        }
        .section-title {
            text-align: center;
            font-size: 36px;
            margin-bottom: 15px;
        }
        .section-subtitle {
            text-align: center;
            margin-bottom: 40px;
            font-size: 18px;
            color: #666;
        }

        /* --- Botones --- */
        .btn {
            display: inline-block;
            background: var(--secondary-color);
            color: #fff;
            padding: 12px 25px;
            border: none;
            cursor: pointer;
            font-weight: 700;
            border-radius: 5px;
            transition: background 0.3s ease, transform 0.3s ease;
            text-align: center;
        }
        .btn:hover {
            background: #e57300;
            transform: translateY(-2px);
        }
        .btn-secondary {
            background: var(--primary-color);
        }
        .btn-secondary:hover {
            background: #002244;
        }

        /* --- Header & Navegación --- */
        header {
            background: var(--bg-white);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-family: 'Oswald', sans-serif;
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
        }
        .logo span {
            color: var(--secondary-color);
        }
        nav ul {
            list-style: none;
            display: flex;
            align-items: center;
        }
        nav ul li {
            margin-left: 25px;
        }
        nav ul li a {
            font-weight: 500;
            transition: color 0.3s ease;
        }
        nav ul li a:hover {
            color: var(--secondary-color);
        }

        /* --- Sección Hero (Impacto Inicial) --- */
        .hero {
            /* Imagen de fondo representativa de maquinaria pesada o comercio global */
            background: url('https://images.unsplash.com/photo-1564917893514-63668364153f?q=80&w=1470&auto=format&fit=crop') no-repeat center center/cover;
            height: 70vh;
            color: #fff;
            display: flex;
            align-items: center;
            text-align: left;
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 51, 102, 0.7); /* Overlay azul oscuro */
        }
        .hero-content {
            position: relative;
            z-index: 1;
        }
        .hero h1 {
            font-size: 60px;
            margin-bottom: 15px;
            color: #fff;
        }
        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            max-width: 650px;
        }

        /* --- Módulo de Confianza (Estadísticas Clave) --- */
        .trust-bar {
            background: var(--primary-color);
            color: #fff;
            padding: 30px 0;
        }
        .trust-stats {
            display: flex;
            justify-content: space-around;
            text-align: center;
        }
        .stat-number {
            font-size: 40px;
            font-family: 'Oswald', sans-serif;
            font-weight: 700;
            color: var(--secondary-color);
            display: block;
        }
        .stat-label {
            text-transform: uppercase;
            font-size: 14px;
        }

        /* --- 1. Catálogo Digital Profesional --- */
        .catalog {
            background: var(--bg-white);
        }
        .catalog-filters {
            text-align: center;
            margin-bottom: 40px;
        }
        .filter-btn {
            padding: 10px 20px;
            margin: 0 5px;
            border: 2px solid var(--primary-color);
            background: transparent;
            cursor: pointer;
            font-weight: 700;
            transition: all 0.3s ease;
            border-radius: 5px;
        }
        .filter-btn.active, .filter-btn:hover {
            background: var(--primary-color);
            color: #fff;
        }
        .catalog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .product-card {
            background: var(--bg-light);
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.1);
        }
        .product-image {
            height: 220px;
            background-color: #ccc;
            background-size: cover;
            background-position: center;
        }
        /* Placeholder images for products */
        .img-1 { background-image: url('https://images.unsplash.com/photo-1599984914867-6878c1017461?q=80&w=600&auto=format&fit=crop'); }
        .img-2 { background-image: url('https://images.unsplash.com/photo-1564058877144-478147596557?q=80&w=600&auto=format&fit=crop'); }
        .img-3 { background-image: url('https://images.unsplash.com/photo-1622547101459-8c622830a499?q=80&w=600&auto=format&fit=crop'); }

        .product-info {
            padding: 25px;
        }
         .product-info h3 {
            font-size: 22px;
         }
        .product-specs {
            list-style: none;
            margin-bottom: 25px;
            font-size: 15px;
        }
        .product-specs li {
            margin-bottom: 8px;
            padding-left: 25px;
            position: relative;
        }
        .product-specs li::before {
            content: '✓';
            color: var(--secondary-color);
            position: absolute;
            left: 0;
            font-weight: bold;
        }
        .product-actions {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        /* --- 2. Módulo de Generación de Confianza (Nosotros) --- */
        .why-us {
            background: var(--bg-light);
        }
        .why-us-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }
        
        .why-us-features {
            list-style: none;
            margin-top: 20px;
        }
        .why-us-features li {
            background: var(--bg-white);
            padding: 20px;
            margin-bottom: 15px;
            border-left: 5px solid var(--secondary-color);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .why-us-testimonial {
            background: var(--primary-color);
            color: white;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .testimonial-quote {
            font-style: italic;
            font-size: 18px;
            margin-bottom: 20px;
            line-height: 1.7;
        }
        .testimonial-author {
            font-weight: 700;
            text-align: right;
            color: var(--secondary-color);
        }

        /* --- 3. Sección de Preguntas Frecuentes (FAQ) --- */
        .faq {
            background: var(--bg-white);
        }
        .faq-container {
             max-width: 800px;
             margin: 0 auto;
        }
        .faq-item {
            border: 1px solid #ddd;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .faq-question {
            width: 100%;
            text-align: left;
            padding: 20px;
            background: var(--bg-light);
            border: none;
            font-weight: 700;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.3s ease;
            color: var(--primary-color);
        }
        .faq-question:hover {
            background: #e9e9e9;
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            background: var(--bg-white);
        }
        .faq-answer-content {
            padding: 20px;
            border-top: 1px solid #eee;
        }

        /* --- 4. Formularios de Cotización Eficientes --- */
        .quotation {
            background: var(--primary-color);
            color: #fff;
        }
        .quotation h2 {
            color: #fff;
        }
        .quotation .section-subtitle {
            color: #ccc;
        }
        .quotation-form {
            max-width: 900px;
            margin: 0 auto;
            background: var(--bg-white);
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 700;
            color: var(--text-color);
        }
        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            font-family: 'Roboto', sans-serif;
        }
        textarea.form-control {
            height: 120px;
            resize: vertical;
        }
        .form-row {
            display: flex;
            gap: 20px;
        }
        .form-row .form-group {
            flex: 1;
        }

        /* --- Footer --- */
        footer {
            background: #222;
            color: #aaa;
            text-align: center;
            padding: 30px 0;
        }
        footer p {
            margin: 5px 0;
        }

        /* --- Responsive Design (Basic) --- */
        @media(max-width: 768px) {
            .hero h1 {
                font-size: 40px;
            }
            nav ul {
                display: none; /* Se necesitaría un menú hamburguesa aquí */
            }
            .logo {
                font-size: 20px;
            }
            .trust-stats {
                flex-direction: column;
                gap: 20px;
            }
            .why-us-content {
                grid-template-columns: 1fr;
            }
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            .filter-btn {
                margin-bottom: 10px;
            }
        }

	/* --- Footer Mejorado --- */
.site-footer {
    background-color: #1a1a1a; /* Un negro ligeramente más suave que #000 */
    color: #aaa;
    padding: 60px 0 0 0;
    border-top: 5px solid var(--secondary-color); /* Línea naranja para un acento industrial */
}

.footer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    margin-bottom: 40px;
}

.footer-column .logo {
    font-size: 22px; /* Ajuste ligero para el footer */
    margin-bottom: 15px;
    display: block; /* Asegura que el margen funcione */
}

.footer-tagline {
    font-size: 14px;
    line-height: 1.7;
    color: #ccc;
}

.footer-heading {
    font-family: 'Oswald', sans-serif;
    color: #fff;
    font-size: 18px;
    margin-bottom: 20px;
    text-transform: uppercase;
    position: relative;
    padding-bottom: 10px;
}

.footer-heading::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 40px;
    height: 2px;
    background-color: var(--secondary-color);
}

.links-column ul {
    list-style: none;
}

.links-column ul li {
    margin-bottom: 12px;
}

.links-column ul li a {
    color: #aaa;
    transition: color 0.3s ease, padding-left 0.3s ease;
    position: relative;
}

.links-column ul li a:hover {
    color: var(--secondary-color);
    padding-left: 5px; /* Efecto sutil al pasar el cursor */
}

.contact-column address {
    font-style: normal;
}

.contact-column p {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.contact-column a {
    color: #aaa;
    transition: color 0.3s ease;
}

.contact-column a:hover {
    color: var(--secondary-color);
}

.contact-column svg {
    color: var(--secondary-color);
    flex-shrink: 0; /* Evita que los iconos se encojan */
}

.social-links a {
    display: inline-block;
    color: #fff;
    background-color: #333;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    border-radius: 50%;
    margin-right: 10px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.social-links a:hover {
    background-color: var(--primary-color); /* Azul corporativo al pasar el cursor */
    transform: translateY(-3px);
}

.social-links svg {
    vertical-align: middle;
    width: 18px;
    height: 18px;
}

.footer-bottom {
    border-top: 1px solid #333;
    padding: 25px 0;
    text-align: center;
    font-size: 14px;
    color: #888;
}

/* --- Ajustes Responsivos para el Footer --- */
@media(max-width: 768px) {
    .footer-grid {
        grid-template-columns: 1fr; /* Apila las columnas en móvil */
        text-align: center;
    }
    .footer-heading::after {
        left: 50%;
        transform: translateX(-50%); /* Centra la línea decorativa */
    }
    .contact-column p {
        justify-content: center; /* Centra el contenido de contacto */
    }
    .social-links {
        text-align: center;
    }
}

    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">MAQUINARIA<span>GLOBAL</span> IMPORTS</div>
                <ul>
                    <li><a href="#catalog">Catálogo</a></li>
                    <li><a href="#why-us">Confianza</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#quotation" class="btn">COTIZAR AHORA</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Sección Hero -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Potencia Global Directo a su Proyecto</h1>
                <p>Importamos maquinaria pesada, ligera y de transporte desde China, Alemania y EE.UU. Su socio confiable para adquirir equipo de calidad garantizada, sin complicaciones logísticas.</p>
                <a href="#catalog" class="btn">Explorar Catálogo 24/7</a>
                <a href="#quotation" class="btn btn-secondary">Hablar con un Asesor</a>
            </div>
        </div>
    </section>

    <!-- Barra de Confianza (Módulo de Confianza Rápida) -->
    <section class="trust-bar">
        <div class="container trust-stats">
            <div class="stat">
                <span class="stat-number">+15</span>
                <span class="stat-label">Años de Experiencia Global</span>
            </div>
            <div class="stat">
                <span class="stat-number">500+</span>
                <span class="stat-label">Equipos Importados Exitosamente</span>
            </div>
            <div class="stat">
                <span class="stat-number">100%</span>
                <span class="stat-label">Cumplimiento Aduanal Garantizado</span>
            </div>
            <div class="stat">
                <span class="stat-number">30 Días</span>
                <span class="stat-label">Promedio de Importación (Europa)</span>
            </div>
        </div>
    </section>

    <!-- 1. Catálogo Digital Profesional (Showroom Virtual) -->
    <section id="catalog" class="catalog section-padding">
        <div class="container">
            <h2 class="section-title">Nuestro Catálogo: Showroom Virtual 24/7</h2>
            <p class="section-subtitle">Explore nuestra selección. Cada equipo cuenta con especificaciones técnicas detalladas, fotos y videos demostrativos.</p>
            
            <div class="catalog-filters">
                <button class="filter-btn active">Todo el Inventario</button>
                <button class="filter-btn">Maquinaria Pesada</button>
                <button class="filter-btn">Maquinaria Ligera</button>
                <button class="filter-btn">Transporte</button>
            </div>

            <div class="catalog-grid">
                <!-- Tarjeta de Producto 1 -->
                <div class="product-card">
                    <div class="product-image img-1"></div>
                    <div class="product-info">
                        <h3>Excavadora Hidráulica 20T (Origen: Alemania)</h3>
                        <ul class="product-specs">
                            <li>Motor: Diésel de alto rendimiento (Euro V)</li>
                            <li>Capacidad: 20 Toneladas</li>
                            <li>Certificación: CE e ISO 9001</li>
                            <li>Disponibilidad: Importación (45 días)</li>
                        </ul>
                        <div class="product-actions">
                            <a href="#quotation" class="btn">Cotizar Esta Máquina</a>
                            <a href="#" class="btn btn-secondary">Ver Ficha Técnica/Video</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de Producto 2 -->
                <div class="product-card">
                    <div class="product-image img-2"></div>
                    <div class="product-info">
                        <h3>Montacargas Eléctrico 3T (Origen: China)</h3>
                        <ul class="product-specs">
                            <li>Motor: Eléctrico (Batería Litio Avanzada)</li>
                            <li>Capacidad: 3 Toneladas</li>
                            <li>Uso: Maquinaria Ligera</li>
                            <li>Disponibilidad: Inventario Local</li>
                        </ul>
                        <div class="product-actions">
                            <a href="#quotation" class="btn">Cotizar Esta Máquina</a>
                            <a href="#" class="btn btn-secondary">Ver Ficha Técnica/Video</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de Producto 3 -->
                <div class="product-card">
                    <div class="product-image img-3"></div>
                    <div class="product-info">
                        <h3>Camión de Volteo 14m³ (Origen: Internacional)</h3>
                        <ul class="product-specs">
                            <li>Motor: Cummins ISX</li>
                            <li>Capacidad: 14 metros cúbicos</li>
                            <li>Categoría: Transporte</li>
                            <li>Disponibilidad: En tránsito</li>
                        </ul>
                        <div class="product-actions">
                             <a href="#quotation" class="btn">Cotizar Esta Máquina</a>
                            <a href="#" class="btn btn-secondary">Ver Ficha Técnica/Video</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Módulo de Generación de Confianza -->
    <section id="why-us" class="why-us section-padding">
        <div class="container">
            <h2 class="section-title">Confianza y Trayectoria: Su Socio Estratégico</h2>
            <p class="section-subtitle">No solo vendemos maquinaria; resolvemos la complejidad de la importación internacional.</p>

            <div class="why-us-content">
                <div class="why-us-text">
                    <h3>Gestión Integral "Puerta a Puerta"</h3>
                    <p>Gestionamos todo el proceso logístico, aduanal y de certificación desde el origen (China, Alemania, etc.) hasta su sitio de trabajo en México. Eliminamos los riesgos y las complicaciones para usted.</p>
                    
                    <h4>Casos de Éxito y Certificaciones:</h4>
                    <ul class="why-us-features">
                        <li><strong>Proyecto Minero (2024):</strong> Importación exitosa de 5 camiones de alto tonelaje desde Alemania, cumpliendo todas las normativas locales (NOM).</li>
                        <li><strong>Certificación ISO 9001:</strong> Procesos auditados que garantizan la calidad en la gestión de importación y servicio al cliente.</li>
                        <li><strong>Inspección en Origen:</strong> Contamos con agentes en sitio (China/Europa) que verifican la calidad técnica del equipo antes del embarque.</li>
                    </ul>
                </div>
                <div class="why-us-testimonial">
                    <p class="testimonial-quote">"Importar maquinaria pesada siempre fue un reto por los trámites aduanales y la incertidumbre de calidad. Maquinaria Global se encargó de todo. Recibimos el equipo listo para operar y en el tiempo prometido. Su profesionalismo nos dio la confianza que necesitábamos."</p>
                    <p class="testimonial-author">— Ing. Morales, Director de Operaciones, Constructora Alfa</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Sección de Preguntas Frecuentes (FAQ) -->
    <section id="faq" class="faq section-padding">
        <div class="container">
            <h2 class="section-title">Preguntas Frecuentes (FAQ)</h2>
            <p class="section-subtitle">Resolvemos las dudas más comunes sobre el proceso de compra, importación y financiamiento para ahorrarle tiempo.</p>

            <div class="faq-container">
                <div class="faq-item">
                    <button class="faq-question">¿Cómo manejan el proceso de importación y aduanas desde China o Alemania?<span class="icon">+</span></button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Nos encargamos de la gestión integral (Servicio Puerta a Puerta). Esto incluye la inspección de calidad en origen, transporte internacional (marítimo/aéreo), trámites aduanales en México (incluyendo NOMs si aplica), pago de impuestos y la entrega final en su ubicación. Usted recibe la maquinaria lista para trabajar.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">¿Qué garantías ofrecen en la maquinaria importada?<span class="icon">+</span></button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Toda la maquinaria nueva cuenta con una garantía mínima de 12 meses o 2000 horas de uso (lo que ocurra primero), gestionada directamente por nuestro equipo de soporte local en México. También ofrecemos planes de servicio postventa.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">¿Ofrecen opciones de financiamiento o arrendamiento (Leasing)?<span class="icon">+</span></button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Sí. Tenemos alianzas con diversas instituciones financieras para ofrecer planes de crédito atractivos y opciones de arrendamiento puro (leasing) que pueden ser fiscalmente beneficiosos para su empresa. Un asesor le ayudará a estructurar la mejor opción.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">¿Puedo solicitar una máquina específica que no esté en el catálogo?<span class="icon">+</span></button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                             Absolutamente. Nuestra red global en Europa y Asia nos permite localizar equipo específico según sus necesidades técnicas. Contáctenos con las especificaciones requeridas y nuestro equipo de búsqueda se pondrá en marcha.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Formularios de Cotización Eficientes (Calificación de Leads) -->
    <section id="quotation" class="quotation section-padding">
        <div class="container">
            <h2 class="section-title">Solicitud de Cotización Profesional</h2>
            <p class="section-subtitle">Complete el siguiente formulario para recibir una propuesta detallada. Esta información nos ayuda a calificar su necesidad y asegurar una respuesta rápida y precisa.</p>
            
            <form class="quotation-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Nombre Completo *</label>
                        <input type="text" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Empresa y Puesto *</label>
                        <input type="text" id="company" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email Corporativo *</label>
                        <input type="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono de Contacto *</label>
                        <input type="tel" id="phone" class="form-control" required>
                    </div>
                </div>
                
                <!-- Preguntas de Calificación -->
                <div class="form-group">
                    <label for="machinery-type">Tipo de Maquinaria Requerida *</label>
                    <select id="machinery-type" class="form-control" required>
                        <option value="">Seleccione una opción</option>
                        <option value="Pesada">Maquinaria Pesada (Excavadora, Grúa, etc.)</option>
                        <option value="Ligera">Maquinaria Ligera (Montacargas, Plataforma, etc.)</option>
                        <option value="Transporte">Transporte (Camión, Remolque, etc.)</option>
                        <option value="Otra">Otra (Especificar abajo)</option>
                    </select>
                </div>

                <div class="form-row">
                    <!-- Calificación por Urgencia -->
                     <div class="form-group">
                        <label for="timeline">Urgencia de Compra (¿Cuándo necesita el equipo?) *</label>
                        <select id="timeline" class="form-control" required>
                            <option value="">Seleccione una opción</option>
                            <option value="Inmediata">Inmediata (0-4 semanas)</option>
                            <option value="Corto Plazo">Corto Plazo (1-3 meses - Importación)</option>
                            <option value="Mediano Plazo">Mediano Plazo (3+ meses)</option>
                            <option value="Explorando">Solo estoy explorando opciones</option>
                        </select>
                    </div>
                    <!-- Calificación por Presupuesto -->
                    <div class="form-group">
                        <label for="budget">Presupuesto Estimado (USD) - (Opcional)</label>
                        <select id="budget" class="form-control">
                            <option value="">Prefiero no decirlo</option>
                            <option value="20k-50k">$20,000 - $50,000</option>
                            <option value="50k-150k">$50,000 - $150,000</option>
                            <option value="150k+">Más de $150,000</option>
                        </select>
                    </div>
                   
                </div>

                <div class="form-group">
                    <label for="details">Especificaciones Técnicas o Detalles Adicionales (Modelo, Capacidad, Origen deseado)</label>
                    <textarea id="details" class="form-control" placeholder="Ej: Busco Excavadora de 20 Toneladas, preferiblemente origen Alemán, con kit de martillo hidráulico..."></textarea>
                </div>

                <button type="submit" class="btn" style="width: 100%; padding: 15px;">Enviar Solicitud de Cotización</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-column about-column">
                <div class="logo">MAQUINARIA<span>GLOBAL</span> IMPORTS</div>
                <p class="footer-tagline">Su socio estratégico en la importación de maquinaria de alto rendimiento. Conectamos su proyecto con la potencia que necesita, sin fronteras.</p>
            </div>

            <div class="footer-column links-column">
                <h4 class="footer-heading">Navegación</h4>
                <ul>
                    <li><a href="#catalog">Catálogo de Equipos</a></li>
                    <li><a href="#why-us">¿Por Qué Elegirnos?</a></li>
                    <li><a href="#faq">Preguntas Frecuentes</a></li>
                    <li><a href="#quotation">Solicitar Cotización</a></li>
                    <li><a href="#">Términos de Servicio</a></li>
                    <li><a href="#">Política de Privacidad</a></li>
                </ul>
            </div>

            <div class="footer-column contact-column">
                <h4 class="footer-heading">Contacto Directo</h4>
                <address>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                        Av. Insurgentes Sur, Ciudad de México, MX
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                           <path d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                        <a href="tel:+525512345678">+52 55 1234 5678</a>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                        <a href="mailto:ventas@maquinariaglobal.com">ventas@maquinariaglobal.com</a>
                    </p>
                </address>
            </div>

            <div class="footer-column social-column">
                <h4 class="footer-heading">Conecte con Nosotros</h4>
                <p>Siga nuestro perfil en LinkedIn para noticias de la industria y nuevos arribos de maquinaria.</p>
                <div class="social-links">
                    <a href="#" target="_blank" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg>
                    </a>
                    </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Maquinaria Global Imports. Todos los derechos reservados. Diseñado para la industria pesada.</p>
        </div>
    </div>
</footer>

    <!-- JavaScript para interactividad (FAQ Acordeón) -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const faqQuestions = document.querySelectorAll('.faq-question');

            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    const answer = question.nextElementSibling;
                    const icon = question.querySelector('.icon');
                    // Check if the clicked FAQ is currently open
                    const isCurrentlyOpen = answer.style.maxHeight && answer.style.maxHeight !== "0px";

                    // Close all open FAQs first
                    document.querySelectorAll('.faq-answer').forEach(ans => {
                        ans.style.maxHeight = 0;
                    });
                    document.querySelectorAll('.faq-question .icon').forEach(ic => {
                        ic.textContent = '+';
                    });

                    // If it wasn't open, open the clicked FAQ
                    if (!isCurrentlyOpen) {
                        answer.style.maxHeight = answer.scrollHeight + "px";
                        icon.textContent = '-';
                    }
                });
            });
        });
    </script>

</body>
</html>