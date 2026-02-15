export interface Service {
  id: string;
  number: string;
  title: string;
  tagline: string;
  description: string;
  highlights: string[];
  color: 'purple' | 'green' | 'orange' | 'blue';
}

export const services: Service[] = [
  {
    id: 'software-a-medida',
    number: '01',
    title: 'Software a medida',
    tagline: 'Sistemas que resuelven la lógica real del negocio',
    description:
      'Tu operación tiene reglas que ningún software genérico cubre. Diseñamos y construimos sistemas completos — desde la base de datos hasta la interfaz — que reflejan exactamente cómo funciona tu negocio. Sin parches, sin dependencias de terceros que no controlas.',
    highlights: [
      'Plataformas internas y paneles de gestión',
      'APIs y microservicios propietarios',
      'Integraciones con tus herramientas actuales',
      'Arquitectura escalable desde el día uno',
    ],
    color: 'purple',
  },
  {
    id: 'sitios-web',
    number: '02',
    title: 'Sitios web',
    tagline: 'Presencia digital de alto impacto',
    description:
      'Tu sitio web es la primera impresión de tu marca. Lo construimos rápido, visualmente inmersivo y optimizado para convertir visitantes en clientes. Nada de plantillas — cada píxel tiene una razón de existir.',
    highlights: [
      'Diseño visual a medida de tu marca',
      'Rendimiento sub-segundo en cualquier dispositivo',
      'SEO técnico integrado desde la estructura',
      'Animaciones e interacciones que comunican',
    ],
    color: 'green',
  },
  {
    id: 'e-commerce',
    number: '03',
    title: 'E-commerce',
    tagline: 'Tiendas online construidas para vender',
    description:
      'Una tienda online no es un catálogo con botón de compra. Diseñamos experiencias de compra que eliminan fricción, integran pasarelas de pago confiables y escalan sin romperse cuando el tráfico crece.',
    highlights: [
      'Checkout optimizado para conversión',
      'Pasarelas de pago locales e internacionales',
      'Gestión de inventario y logística integrada',
      'Reportes y métricas que importan',
    ],
    color: 'orange',
  },
  {
    id: 'agentes-de-automatizacion',
    number: '04',
    title: 'Agentes de automatización',
    tagline: 'Procesos que se ejecutan solos',
    description:
      'Hay tareas en tu operación que se repiten cada día y que nadie debería hacer a mano. Construimos agentes inteligentes que ejecutan flujos completos — desde capturar datos hasta tomar decisiones — sin intervención humana.',
    highlights: [
      'Automatización de procesos repetitivos',
      'Agentes con IA para tareas complejas',
      'Flujos conectados entre tus herramientas',
      'Monitoreo y alertas en tiempo real',
    ],
    color: 'blue',
  },
];
