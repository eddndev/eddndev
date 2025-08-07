/**
 * Inicializa la estructura de datos para los LEDs basándose en el modo de grilla configurado.
 */
export function _createGrid(columnCount, rowCount) {
    
    if (this.grid.isSparse) {
        // Modo Optimizado (Disperso): Inicializamos un Map vacío.
        // Las claves serán strings "i,j" para acceso rápido.
        this.grid.leds = new Map();
    } else {
        // Modo Clásico (Llenado): Inicializamos un Array y lo pre-llenamos.
        this.grid.leds = [];
        const offSize = this.dimensions.minSize;
        const { min: minOpacity, max: maxOpacity } = this.options.opacities.base;

        for (let i = 0; i < columnCount; i++) {
            for (let j = 0; j < rowCount; j++) {
                // Inline Lerp para opacidad aleatoria.
                const baseOpacity = minOpacity + (maxOpacity - minOpacity) * Math.random();
                
                // Usamos el nuevo método auxiliar para crear el objeto.
                const led = this._createLedObject(i, j, offSize, baseOpacity);
                this.grid.leds.push(led);
            }
        }
    }
}