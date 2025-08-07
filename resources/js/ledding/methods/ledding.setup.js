// /src/ledding/methods/ledding.setup.js

export const setup = function() {
    this.canvas.width = this.container.offsetWidth;
    this.canvas.height = this.container.offsetHeight;

    let scaledLedSize = this.options.ledSize;
    let scaledLedGap = this.options.ledGap;

    const artPattern = this.options.artPattern;
    const artCols = artPattern[0]?.length || 0;
    const artRows = artPattern.length;

    // 1. Lógica de ScaleToFit (Existente)
    if (this.options.scaleToFit) {
        const artRequiredWidth = artCols * (this.options.ledSize + this.options.ledGap);
        const artRequiredHeight = artRows * (this.options.ledSize + this.options.ledGap);
        
        if (artRequiredWidth > 0 && artRequiredHeight > 0) {
            const scaleFactor = Math.min(this.canvas.width / artRequiredWidth, this.canvas.height / artRequiredHeight);
            if (scaleFactor < 1) {
                scaledLedSize *= scaleFactor;
                scaledLedGap *= scaleFactor;
            }
        }
    }
    
    // 2. Almacenar Pre-cálculos (Existente)
    this.dimensions.scaledLedSize = scaledLedSize;
    this.dimensions.scaledLedGap = scaledLedGap;
    this.dimensions.maxSize = scaledLedSize;
    this.dimensions.minSize = scaledLedSize * 0.2;
    
    const ledFullSize = scaledLedSize + scaledLedGap;
    this.dimensions.ledFullSize = ledFullSize;

    if (ledFullSize <= 0) return; // Seguridad

    // 3. CÁLCULO ROBUSTO DE DIMENSIONES DE LA GRILLA VIRTUAL (SOLUCIÓN CLAVE)

    // Buffer para scroll infinito.
    const buffer = 2; 

    // Usamos Math.ceil para asegurar que cubrimos TODO el canvas, evitando píxeles muertos en los bordes.
    const requiredColsByCanvas = Math.ceil(this.canvas.width / ledFullSize) + buffer;
    const requiredRowsByCanvas = Math.ceil(this.canvas.height / ledFullSize) + buffer;

    if (this.grid.isSparse) {
        // MODO DISPERSO: La periodicidad debe ser el MÁXIMO entre el Canvas y el Arte.
        // Esto previene el colapso de índices (aliasing) y resuelve el wrapping incorrecto.
        this.grid.numCols = Math.max(requiredColsByCanvas, artCols);
        this.grid.numRows = Math.max(requiredRowsByCanvas, artRows);
    } else {
        // MODO CLÁSICO: Solo necesita cubrir el canvas.
        this.grid.numCols = requiredColsByCanvas;
        this.grid.numRows = requiredRowsByCanvas;
    }
    
    // 4. Dimensiones para el efecto toroidal.
    this.dimensions.gridWidthPx = this.grid.numCols * ledFullSize;
    this.dimensions.gridHeightPx = this.grid.numRows * ledFullSize;

    // 5. Inicialización.
    this._createGrid(this.grid.numCols, this.grid.numRows);
    this._initializeColors();
}