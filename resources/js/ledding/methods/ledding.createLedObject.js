// /src/ledding/methods/ledding.createLedObject.js (NUEVO ARCHIVO)

/**
 * Crea un objeto LED estándar con estados iniciales.
 * Se utiliza tanto en el modo clásico como en el modo optimizado (al "revivir" un LED).
 */
export const _createLedObject = function(i, j, initialSize, baseOpacity) {
    return {
        gridPosition: { i, j },
        baseOpacity: baseOpacity,
        currentSize: initialSize,
        targetSize: initialSize,
        currentOpacity: baseOpacity,
        targetOpacity: baseOpacity,
        currentArtValue: 0,
        targetArtValue: 0,
        artValueForColor: 0,
        transitionSpeed: this.options.transitions.ignition.min,
        delayTimer: 0,
        isTransitioning: false,
        isDelayed: false,
        // NUEVO: Propiedad para el manejo del ciclo de vida en modo disperso.
        lifespan: 0, 
    };
}