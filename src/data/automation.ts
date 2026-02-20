export interface PainPoint {
  number: string;
  title: string;
  description: string;
}

export interface Capability {
  tag: string;
  title: string;
  description: string;
}

export interface UseCase {
  title: string;
  description: string;
}

export interface ProcessStep {
  number: string;
  title: string;
  description: string;
}

export interface Result {
  title: string;
  before: string;
  after: string;
  compact?: boolean;
}

export const painPoints: PainPoint[] = [
  {
    number: '01',
    title: 'Horas en data entry',
    description: 'Mover datos entre CRM, hojas de cálculo y correos. Una y otra vez, todos los días.',
  },
  {
    number: '02',
    title: 'Procesos que dependen de alguien',
    description: 'Si esa persona falta, el proceso se detiene. Un solo punto de falla en tu operación.',
  },
  {
    number: '03',
    title: 'Errores humanos repetitivos',
    description: 'Copiar mal un número, olvidar un paso, enviar el archivo equivocado. Errores que cuestan dinero.',
  },
  {
    number: '04',
    title: 'Escala imposible',
    description: 'Más clientes = más trabajo manual = más contrataciones. Un ciclo que no termina.',
  },
];

export const capabilities: Capability[] = [
  {
    tag: 'Captura',
    title: 'Captura y procesa',
    description: 'Extrae datos de correos, PDFs, formularios y cualquier fuente automáticamente. Sin copiar y pegar.',
  },
  {
    tag: 'Decide',
    title: 'Decide y ejecuta',
    description: 'Toma decisiones basadas en reglas y contexto de tu negocio. Ejecuta acciones sin esperar aprobación manual.',
  },
  {
    tag: 'Conecta',
    title: 'Conecta y escala',
    description: 'Se integra con tus herramientas existentes — CRM, ERP, correo, hojas de cálculo — y crece contigo.',
  },
];

export const useCases: UseCase[] = [
  {
    title: 'Soporte al cliente',
    description: 'Respuestas instantáneas 24/7 que entienden contexto, resuelven dudas y escalan solo cuando es necesario.',
  },
  {
    title: 'Calificación de leads',
    description: 'Solo habla con quien va a comprar. El agente califica, prioriza y enruta automáticamente.',
  },
  {
    title: 'Data entry y documentos',
    description: 'Cero horas copiando datos. El agente extrae, valida y distribuye información entre tus sistemas.',
  },
  {
    title: 'Reportes automáticos',
    description: 'De 8 horas a 15 minutos. Genera reportes consolidados desde múltiples fuentes sin tocar una hoja de cálculo.',
  },
  {
    title: 'Workflows internos',
    description: 'Tus herramientas, conectadas. Automatiza aprobaciones, notificaciones y flujos entre departamentos.',
  },
  {
    title: 'Inventario y alertas',
    description: 'Anticípate a los problemas. Monitorea niveles, detecta anomalías y actúa antes de que sea tarde.',
  },
];

export const processSteps: ProcessStep[] = [
  {
    number: '01',
    title: 'Diagnóstico',
    description: 'Mapeamos tus flujos actuales e identificamos las oportunidades de automatización con mayor impacto en tu operación.',
  },
  {
    number: '02',
    title: 'Diseño',
    description: 'Arquitectamos el agente, sus guardrails y puntos de integración. Definimos qué puede y qué no puede hacer.',
  },
  {
    number: '03',
    title: 'Construcción',
    description: 'Construimos, probamos y refinamos hasta que funcione impecablemente en tu entorno real.',
  },
  {
    number: '04',
    title: 'Operación',
    description: 'Monitoreamos, optimizamos y evolucionamos el agente contigo. No te dejamos solo después del lanzamiento.',
  },
];

export const results: Result[] = [
  {
    title: 'Tiempo de respuesta',
    before: '4 horas',
    after: '12 seg',
  },
  {
    title: 'Data entry semanal',
    before: '20 hrs',
    after: '0 hrs',
  },
  {
    title: 'Calificación de leads',
    before: 'Manual, al día siguiente',
    after: 'Instantánea, 24/7',
    compact: true,
  },
  {
    title: 'Generación de reportes',
    before: '1 día',
    after: '15 min',
  },
];
