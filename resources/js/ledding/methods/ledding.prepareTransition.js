import { AnimationEngine } from '../utils/animationEngine.js';

export const _prepareTransition = function(led, targetArtValue) {
    const previousArtValue = led.currentArtValue;
    const isIgnition = targetArtValue > 0 && previousArtValue === 0;
    const isExtinction = targetArtValue === 0 && previousArtValue > 0;

    let speedConfig, animConfig;

    if (isIgnition) {
        speedConfig = this.options.transitions.ignition;
        animConfig = this.options.animation.ignition;
        led.artValueForColor = targetArtValue;
    } else if (isExtinction) {
        speedConfig = this.options.transitions.extinction;
        animConfig = this.options.animation.extinction;
        // Mantenemos el color anterior mientras se desvanece.
        led.artValueForColor = previousArtValue; 
    } else { // Morphing o Interrupción
        speedConfig = this.options.transitions.morph;
        animConfig = { delay: 0 };
        // Si el nuevo objetivo está encendido, actualizamos el color inmediatamente.
        if (targetArtValue > 0) {
            led.artValueForColor = targetArtValue;
        }
    }
    
    // Asigna la velocidad de transición
    if (speedConfig) {
        if (speedConfig.randomize) {
            // OPTIMIZACIÓN: Inline Lerp para velocidad aleatoria.
                led.transitionSpeed = speedConfig.min + (speedConfig.max - speedConfig.min) * Math.random();
        } else {
            led.transitionSpeed = speedConfig.min;
        }
    }

    // Asigna el tamaño objetivo usando dimensiones precalculadas.
    const { maxSize, minSize, scaledLedSize } = this.dimensions;
    if (targetArtValue > 0) {
        // Lógica de tamaños específicos (ajustar si se hace configurable)
        if (targetArtValue === 1) led.targetSize = maxSize;
        else if (targetArtValue === 2) led.targetSize = scaledLedSize * 0.7;
        else led.targetSize = scaledLedSize * 0.4;
    } else {
        led.targetSize = minSize;
    }

    // CORRECCIÓN: Asigna la opacidad objetivo.
    if (targetArtValue > 0) {
        led.targetOpacity = this.options.opacities.active;
    } else {
        led.targetOpacity = led.baseOpacity;
    }
    
    // Calcula y devuelve el retardo
    return AnimationEngine.calculateDelay(led, this.grid.numCols, this.grid.numRows, animConfig);
}
