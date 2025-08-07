export const _getInterpolatedColor = function(led) {
    const baseColor = this.parsedColors.base;
    // Obtenemos el color activo objetivo del caché.
    const activeColor = this.parsedColors.states[led.artValueForColor] || baseColor;

    // Si los colores son idénticos (punteros iguales), retornamos rápido.
    if (baseColor === activeColor) {
            // OPTIMIZACIÓN: Retornamos el string original si es posible para evitar generar uno nuevo.
            if (led.artValueForColor === 0) {
                return this.options.colors.base;
            }
            // Si estamos encendidos, retornamos el string del estado correspondiente.
            return this.options.colors.states[led.artValueForColor] || this.options.colors.base;
    }

    // Calcular el factor de interpolación basado en el tamaño actual del LED (0.0 a 1.0).
    const { minSize, maxSize } = this.dimensions;
        
    // Evitar división por cero (seguridad).
    if (maxSize === minSize) return this.options.colors.base;
    
    let factor = (led.currentSize - minSize) / (maxSize - minSize);
    
    // Clamping eficiente (asegurar que el factor esté entre 0 y 1). Más rápido que Math.min/max.
    if (factor < 0) factor = 0;
    else if (factor > 1) factor = 1;

    // OPTIMIZACIÓN: Interpolación Lineal Directa (Inline Lerp).
    // Usamos la forma a + (b - a) * t sobre los Typed Arrays.
    const r = baseColor[0] + (activeColor[0] - baseColor[0]) * factor;
    const g = baseColor[1] + (activeColor[1] - baseColor[1]) * factor;
    const b = baseColor[2] + (activeColor[2] - baseColor[2]) * factor;
    
    // OPTIMIZACIÓN: Redondeo rápido usando operador bitwise.
    // (X + 0.5) | 0 es generalmente más rápido que Math.round(X).
    return `rgb(${(r + 0.5) | 0}, ${(g + 0.5) | 0}, ${(b + 0.5) | 0})`;
}