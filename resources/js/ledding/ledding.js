import { defaultOptions } from './config.js';
import { debounce } from './utils/debounce.js';
import { animate as animateMethod } from './methods/ledding.animate.js';
import { draw as drawMethod } from './methods/ledding.draw.js';
import { setup as setupMethod } from './methods/ledding.setup.js';
import { update as updateMethod } from './methods/ledding.update.js';
import { _createGrid as createGridMethod } from './methods/ledding.createGrid.js';
import { _getArtValueAt as getArtValueAtMethod } from './methods/ledding.getArtValueAt.js';
import { _getInterpolatedColor as getInterpolatedColorMethod } from './methods/ledding.getInterpolatedColor.js';
import { _initializeColors as initializeColorsMethod } from './methods/ledding.initializeColors.js';
import { _parseRgbToIntArray as parseRgbToIntArrayMethod } from './methods/ledding.parseRgbToIntArray.js';
import { _prepareTransition } from './methods/ledding.prepareTransition.js';
import { _updateSingleLedState } from './methods/ledding.updateSingleLedState.js';
import { _createLedObject } from './methods/ledding.createLedObject.js';
import { _updateClassicGrid } from './methods/ledding.updateClassicGrid.js';
import { _updateSparseGrid } from './methods/ledding.updateSparseGrid.js';

class Ledding {

    constructor(targetSelector, userOptions = {}) {
        this.container = document.querySelector(targetSelector);
        if (!this.container) {
            console.error(`Ledding Error: El elemento "${targetSelector}" no fue encontrado.`);
            return;
        }

        this.options = {
            ...defaultOptions,
            ...userOptions,
            colors: {
                ...defaultOptions.colors,
                ...(userOptions.colors || {}),
            },
            opacities: {
                ...defaultOptions.opacities,
                ...(userOptions.opacities || {}),
            },
            animation: {
                scroll: {
                    ...defaultOptions.animation.scroll,
                    ...(userOptions.animation?.scroll),
                },
                ignition: {
                    ...defaultOptions.animation.ignition,
                    ...(userOptions.animation?.ignition),
                },
                extinction: {
                    ...defaultOptions.animation.extinction,
                    ...(userOptions.animation?.extinction),
                },
            },
            transitions: {
                ignition: {
                    ...defaultOptions.transitions.ignition,
                    ...(userOptions.transitions?.ignition),
                },
                extinction: {
                    ...defaultOptions.transitions.extinction,
                    ...(userOptions.transitions?.extinction),
                },
                morph: {
                    ...defaultOptions.transitions.morph,
                    ...(userOptions.transitions?.morph),
                },
            },
            grid: {
                ...defaultOptions.grid,
                ...(userOptions.grid || {}),
            }
        };
        
        // --- Propiedades de Animación y Estado ---
        this.canvas = document.createElement('canvas');

        // OPTIMIZACIÓN: Si el fondo no es transparente (null), deshabilitar el canal alfa mejora el rendimiento.
        const contextOptions = { alpha: this.options.colors.background === null };
        this.ctx = this.canvas.getContext('2d', contextOptions);

        this.animationFrameId = null;
        this.lastFrameTime = 0;
        this.frameInterval = 1000 / this.options.fps;
        
        this.scrollX = 0;
        this.scrollY = 0;

        this.grid = {
            leds: null,
            numCols: 0,
            numRows: 0,
            isSparse: !this.options.grid.fill,
        };
        
        // Eliminamos scaledLedSize y scaledLedGap como propiedades de primer nivel.

        this.artPosition = {
            startPx: 0,
            startPxY: 0,
            widthPx: 0,
            heightPx: 0,
        };

        // OPTIMIZACIÓN: Estructuras para pre-cálculos (Hoisting)
        this.dimensions = {
            scaledLedSize: 0,
            scaledLedGap: 0,
            ledFullSize: 0,
            gridWidthPx: 0,
            gridHeightPx: 0,
            minSize: 0, // Tamaño apagado (ej. 0.2 * size)
            maxSize: 0, // Tamaño encendido (1.0 * size)
        };
        
        this.parsedColors = { base: null, states: {} };
        this.init();
    }

    /**
     * Inicializa la instancia de Ledding.
     * @returns {void}
     */
    init() {
        this.container.appendChild(this.canvas);
        if (this.options.renderer.setup) this.options.renderer.setup(this);
        this.setup();
        this._bindEvents();
        this.lastFrameTime = performance.now();
        this.animate(this.lastFrameTime);
    }
    
    /**
     * Vincula los event listeners necesarios para la instancia de Ledding.
     * Esto incluye el redimensionamiento de la ventana y la visibilidad de la página.
     * @returns {void}
     */
    _bindEvents() {
        this.debouncedSetup = debounce(this.setup.bind(this), 250);
        window.addEventListener('resize', this.debouncedSetup);
        document.addEventListener("visibilitychange", this.handleVisibilityChange.bind(this));
    }
    
    /**
     * Maneja los cambios de visibilidad de la página para pausar y reanudar la animación.
     * Esto mejora el rendimiento y ahorra recursos cuando la pestaña no está activa.
     * @returns {void}
     */
    handleVisibilityChange() {
        if (document.hidden) {
            cancelAnimationFrame(this.animationFrameId);
        } else {
            this.lastFrameTime = performance.now();
            this.animate(this.lastFrameTime);
        }
    }

    /**
     * Limpia y destruye la instancia de Ledding, removiendo event listeners y el canvas del DOM.
     * Esto ayuda a prevenir fugas de memoria cuando la instancia ya no es necesaria.
     * @returns {void}
     */
    destroy() {
        if (this.animationFrameId) cancelAnimationFrame(this.animationFrameId);
        window.removeEventListener('resize', this.debouncedSetup);
        document.removeEventListener("visibilitychange", this.handleVisibilityChange.bind(this));
        if (this.canvas.parentNode) this.canvas.parentNode.removeChild(this.canvas);
    }
}

Ledding.prototype.setup = setupMethod;
Ledding.prototype.animate = animateMethod;
Ledding.prototype.draw = drawMethod;
Ledding.prototype.update = updateMethod;
Ledding.prototype._createGrid = createGridMethod;
Ledding.prototype._getArtValueAt = getArtValueAtMethod;
Ledding.prototype._getInterpolatedColor = getInterpolatedColorMethod;
Ledding.prototype._initializeColors = initializeColorsMethod;
Ledding.prototype._parseRgbToIntArray = parseRgbToIntArrayMethod;
Ledding.prototype._prepareTransition = _prepareTransition;
Ledding.prototype._updateSingleLedState = _updateSingleLedState;
Ledding.prototype._createLedObject = _createLedObject;
Ledding.prototype._updateClassicGrid = _updateClassicGrid;
Ledding.prototype._updateSparseGrid = _updateSparseGrid;

export default Ledding;