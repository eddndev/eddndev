import { Pattern, Direction } from './constants.js';

/**
 * Clase estática que gestiona la lógica de cálculo para las animaciones.
 * VERSIÓN CORREGIDA Y ROBUSTA
 */
export class AnimationEngine {
    /**
     * Calcula el retardo para un LED específico basado en una configuración de animación.
     * @param {object} led - El objeto LED. Debe tener una propiedad `gridPosition: {i, j}`.
     * @param {number} gridWidth - Ancho total de la grilla en número de LEDs.
     * @param {number} gridHeight - Alto total de la grilla en número de LEDs.
     * @param {object} animConfig - El objeto de configuración (ignition o extinction).
     * @returns {number} El número de fotogramas de retardo.
     */
    static calculateDelay(led, gridWidth, gridHeight, animConfig) {
        // --- FIX: Programación defensiva para evitar errores por datos incompletos ---
        // 1. Asegurarse de que animConfig es un objeto válido.
        const config = animConfig || {};
        const { pattern, direction, delay = 0, step = 1 } = config;

        // 2. Asegurarse de que 'step' sea un número válido y nunca menor que 1.
        //    Esto es crucial para las operaciones de módulo (%).
        const safeStep = Math.max(1, Number(step) || 1);

        // 3. Obtener el índice base y asegurarse de que sea un número.
        let cascadeIndex = this._getCascadeIndex(led, gridWidth, gridHeight, direction);
        cascadeIndex = Number(cascadeIndex) || 0;

        let finalIndex = 0; // Default a 0 por seguridad.
        switch (pattern) {
            case Pattern.INTERLACED:
                finalIndex = cascadeIndex % safeStep;
                break;
            case Pattern.WAVE:
                finalIndex = (cascadeIndex % safeStep) + Math.floor(cascadeIndex / safeStep);
                break;
            case Pattern.RANDOM:
                const maxIndex = (Number(gridWidth) || 0) + (Number(gridHeight) || 0);
                finalIndex = Math.random() * maxIndex;
                break;
            case Pattern.CASCADE:
            default:
                finalIndex = cascadeIndex;
                break;
        }

        // 4. Devolver el retardo final, asegurándose de que el resultado sea siempre un número.
        const finalDelay = (Number(finalIndex) || 0) * (Number(delay) || 0);
        return finalDelay;
    }

    /**
     * Helper "privado" para obtener la distancia de un LED al borde de origen de la animación.
     * (Sin cambios, la lógica original era correcta).
     * @private
     */
    static _getCascadeIndex(led, width, height, direction) {
        const { i, j } = led.gridPosition;
        
        switch (direction) {
            case Direction.TO_RIGHT:        return i;
            case Direction.TO_LEFT:         return width - 1 - i;
            case Direction.TO_BOTTOM:       return j;
            case Direction.TO_TOP:          return height - 1 - j;
            case Direction.TO_BOTTOM_RIGHT: return i + j;
            case Direction.TO_TOP_LEFT:     return (width - 1 - i) + (height - 1 - j);
            case Direction.TO_TOP_RIGHT:    return i + (height - 1 - j);
            case Direction.TO_BOTTOM_LEFT:  return (width - 1 - i) + j;
            default: return 0;
        }
    }
}
