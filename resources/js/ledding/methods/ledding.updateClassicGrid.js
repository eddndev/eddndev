// /src/ledding/methods/ledding.updateClassicGrid.js (NUEVO ARCHIVO)

/**
 * Lógica de actualización para el modo Clásico (grid.fill = true).
 */
export const _updateClassicGrid = function() {
    const leds = this.grid.leds;
    if (!leds || leds.length === 0) return;

    // Bucle for estándar optimizado.
    const len = leds.length;
    for (let i = 0; i < len; i++) {
        const led = leds[i];
        const artValue = this._getArtValueAt(led);
        this._updateSingleLedState(led, artValue);
    }
}