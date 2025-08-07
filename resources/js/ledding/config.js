// /src/ledding/config.js

import { CircleRenderer } from './renderers/CircleRenderer.js';
import { CenterAligner } from './aligners/Aligners.js';
import { defaultArt } from './patterns/default.js';
import { Direction, Pattern } from './utils/constants.js';

export const defaultOptions = {
    /**
     * El tamaño base de cada LED en píxeles.
     * @type {number}
     */
    ledSize: 20,
    
    /**
     * El espacio entre cada LED en píxeles.
     * @type {number}
     */
    ledGap: 4,

    /**
     * Define si el arte debe escalar hacia abajo para caber en el contenedor.
     * @type {boolean}
     */
    scaleToFit: true,

    /**
     * El array 2D que define el patrón a mostrar.
     * @type {number[][]}
     */
    artPattern: defaultArt,
    
    /**
     * El módulo que define la estrategia de alineación del arte dentro de la grilla.
     * @type {object} - (CenterAligner, TopLeftAligner, etc.)
     */
    aligner: CenterAligner,
    
    // --- Estilo y Apariencia ---
    /**
     * El módulo que define cómo se dibuja cada LED.
     * @type {object} - (CircleRenderer, SquareRenderer, etc.)
     */
    renderer: CircleRenderer,
    
    /**
     * Define los colores para los diferentes estados de los LEDs.
     * `background`: Color de fondo del canvas. `null` para transparente.
     * `base`: Color de los LEDs de fondo cuando están "apagados".
     * `states`: Mapea los valores del `artPattern` (1, 2, 3...) a colores específicos.
     * @type {{background: string|null, base: string, states: object}}
     */
    colors: {
        background: null,
        base: 'rgb(45, 55, 72)', // Un gris azulado oscuro
        states: {
            1: 'rgb(209, 162, 255)', // BRIGHT
            2: 'rgb(167, 86, 255)',  // MEDIUM
            3: 'rgb(113, 63, 222)'   // DIM
        }
    },
    
    /**
     * Define las opacidades para los diferentes estados.
     * `base`: Opacidad de los LEDs de fondo. Un valor aleatorio entre min y max.
     * `active`: Opacidad de un LED cuando está activado por el arte.
     * @type {{base: {min: number, max: number}, active: number}}
     */
    opacities: {
        base: { min: 0.50, max: 0.75 },
        active: 1
    },
    
    /**
     * La tasa de fotogramas objetivo. La animación se limitará a este valor.
     * @type {number}
     */
    fps: 20,

    /**
     * Contenedor principal para toda la lógica de animación.
     */
    animation: {
        /**
         * Configuración del desplazamiento, aplicable a ambos modos.
         * Define la dirección y la velocidad del desplazamiento de la animación. (La grilla o el arte).
         */
        scroll: {
            direction: Direction.TO_LEFT, // Dirección del desplazamiento
            speed: 80, // Velocidad del desplazamiento en píxeles por segundo
        },

        /**
         * Configuración para cuando un LED se enciende (pasa de estado 0 a > 0).
         */
        ignition: {
            pattern: Pattern.CASCADE, // Patrón de encendido
            direction: Direction.TO_BOTTOM, // Dirección del encendido
            delay: 0,
            step: 4
        },

        /**
         * Configuración para cuando un LED se apaga (pasa de estado > 0 a 0).
         */
        extinction: {
            pattern: Pattern.CASCADE, // Patrón de apagado
            direction: Direction.TO_TOP, // Dirección del apagado
            delay: 0,
            step: 4
        }
    },

    /**
     * Define las velocidades de transición (lerp) para diferentes situaciones.
     * `slow`/`fast`: Al encender/apagar.
     * `morph`: Al cambiar entre dos estados activos (ej. de 1 a 2).
     * @type {{slow: number, fast: number, morph: number}}
     */
    transitions: {
        /**
         * Controla la transición al encender (0 a > 0).
         * @type {{min: number, max: number, randomize: boolean}}
         */
        ignition: {
            min: 1,
            max: 1,
            randomize: false
        },

        /**
         * Controla la transición al apagar (> 0 a 0).
         * @type {{min: number, max: number, randomize: boolean}}
         */
        extinction: {
            min: 1,
            max: 1,
            randomize: false
        },

        /**
         * Controla la transición al cambiar entre dos estados activos (ej. de 1 a 2).
         * @type {{min: number, max: number, randomize: boolean}}
         */
        morph: {
            min: 1,
            max: 1,
            randomize: false
        }
    },
    /**
     * Configuración de la estrategia de renderizado de la grilla y optimización de la animación..
     */
    grid: {
        /**
         * true (clásico): Llena el canvas con LEDs persistentes (comportamiento clásico).
         * false (optimizado): Solo crea LEDs bajo el arte (grilla dispersa, más rápido).
         * @type {boolean}
         */
        fill: false,
        /**
         * (Solo si fill: false) Fotogramas que un LED permanece vivo después de apagarse,
         * permitiendo que la animación de exinción termine antes de ser eliminado.
         * @type {number}
         */
        lifespan: 60,
    }
};