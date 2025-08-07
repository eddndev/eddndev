// /src/ledding/methods/ledding.updateSparseGrid.js

export const _updateSparseGrid = function() {
    const ledsMap = this.grid.leds;
    if (!ledsMap) return;

    const { ledFullSize } = this.dimensions;
    const { numCols, numRows } = this.grid; 
    const artPattern = this.options.artPattern;
    const { startPx, startPxY } = this.artPosition;

    const activeLedsKeys = new Set();

    // --- Fase 1: Creación JIT e Ignición ---
    const artRowsCount = artPattern.length;
    const artColsCount = artPattern[0]?.length || 0;

    for (let r = 0; r < artRowsCount; r++) {
        for (let c = 0; c < artColsCount; c++) {
            const artValue = artPattern[r][c];
            
            if (artValue > 0) {
                // 1. Posición en el canvas.
                const cellX = startPx + c * ledFullSize;
                const cellY = startPxY + r * ledFullSize;

                // 2. Ingeniería Inversa (CORREGIDO)
                
                // SOLUCIÓN: Usamos Math.round() para evitar errores de punto flotante.
                let i = Math.round((cellX - this.scrollX) / ledFullSize);
                // Aplicar módulo positivo para el wrap toroidal.
                i = ((i % numCols) + numCols) % numCols;

                let j = Math.round((cellY - this.scrollY) / ledFullSize);
                j = ((j % numRows) + numRows) % numRows;

                // 3. Encontrar o crear el LED en el Map.
                const key = `${i},${j}`;
                let led = ledsMap.get(key);

                if (!led) {
                            // (La lógica de creación JIT permanece igual)
                    const offSize = this.dimensions.minSize;
                    const { min: minOpacity, max: maxOpacity } = this.options.opacities.base;
                    const baseOpacity = minOpacity + (maxOpacity - minOpacity) * Math.random();
                    led = this._createLedObject(i, j, offSize, baseOpacity);
                    ledsMap.set(key, led);
                }

                // 4. Actualizar y marcar.
                this._updateSingleLedState(led, artValue);
                activeLedsKeys.add(key);
            }
        }
    }

        // --- Fase 2: Extinción y Eliminación (Permanece igual) ---
    for (const key of ledsMap.keys()) {
        if (!activeLedsKeys.has(key)) {
            const led = ledsMap.get(key);
            this._updateSingleLedState(led, 0);
            if (led.currentArtValue === 0 && led.lifespan <= 0) {
                ledsMap.delete(key);
            }
        }
    }
}