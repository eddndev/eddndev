export const _getArtValueAt = function(led) {
        // Usar dimensiones precalculadas y referencias locales.
        const { ledFullSize, gridWidthPx, gridHeightPx } = this.dimensions;
        const { startPx, startPxY, widthPx, heightPx } = this.artPosition;
        const scrollX = this.scrollX;
        const scrollY = this.scrollY;

        const baseX = led.gridPosition.i * ledFullSize;
        const baseY = led.gridPosition.j * ledFullSize;

        // OPTIMIZACIÓN: Cálculo de módulo positivo eficiente.
        let wrappedLedCenterX = (baseX + scrollX) % gridWidthPx;
        if (wrappedLedCenterX < 0) wrappedLedCenterX += gridWidthPx;
        
        let wrappedLedCenterY = (baseY + scrollY) % gridHeightPx;
        if (wrappedLedCenterY < 0) wrappedLedCenterY += gridHeightPx;

        // Chequeo de colisión rápido (AABB).
        if (wrappedLedCenterX >= startPx && wrappedLedCenterX < startPx + widthPx &&
            wrappedLedCenterY >= startPxY && wrappedLedCenterY < startPxY + heightPx) {
            
            // OPTIMIZACIÓN: Usar operador bitwise (| 0) como alternativa rápida a Math.floor() para números positivos.
            const artColIndex = ((wrappedLedCenterX - startPx) / ledFullSize) | 0;
            const artRowIndex = ((wrappedLedCenterY - startPxY) / ledFullSize) | 0;
            
            // Acceso seguro al patrón de arte.
            return this.options.artPattern[artRowIndex]?.[artColIndex] ?? 0;
        }

        return 0;
    }