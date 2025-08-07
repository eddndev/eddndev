const getAlignmentContext = (instance) => {
    // Dimensiones del Arte (en número de LEDs)
    const artCols = instance.options.artPattern[0]?.length || 0;
    const artRows = instance.options.artPattern.length;
    
    // Accedemos al tamaño del LED desde el objeto 'dimensions' optimizado.
    const ledFullSize = instance.dimensions.ledFullSize;

    // Seguridad: Si setup no ha terminado o el canvas no existe, retornamos null.
    if (!ledFullSize || !instance.canvas) {
        return null;
    }

    // Cálculos comunes en Píxeles
    const artWidthPx = artCols * ledFullSize;
    const artHeightPx = artRows * ledFullSize;
    const canvasWidth = instance.canvas.width;
    const canvasHeight = instance.canvas.height;

    return { artWidthPx, artHeightPx, canvasWidth, canvasHeight };
};

// Valor de retorno por defecto en caso de fallo (ej. durante la inicialización).
const defaultPosition = { artStartPx: 0, artStartPxY: 0 };

export const TopLeftAligner = {
    getCoordinates(instance) {
        // No necesitamos el contexto completo, solo verificar que exista el canvas por seguridad.
        if (!instance.canvas) return defaultPosition;
        // Esquina superior izquierda siempre es (0, 0).
        return defaultPosition;
    }
};

export const TopAligner = {
    getCoordinates(instance) {
        const ctx = getAlignmentContext(instance);
        if (!ctx) return defaultPosition;

        // Centrado Horizontal, Superior Vertical (Y=0)
        const artStartPx = (ctx.canvasWidth - ctx.artWidthPx) / 2;
        return { artStartPx, artStartPxY: 0 };
    }
};

export const TopRightAligner = {
    getCoordinates(instance) {
        const ctx = getAlignmentContext(instance);
        if (!ctx) return defaultPosition;

        // Derecha Horizontal (Canvas - Arte), Superior Vertical (Y=0)
        const artStartPx = ctx.canvasWidth - ctx.artWidthPx;
        return { artStartPx, artStartPxY: 0 };
    }
};


export const LeftAligner = {
    getCoordinates(instance) {
        const ctx = getAlignmentContext(instance);
        if (!ctx) return defaultPosition;

        // Izquierda Horizontal (X=0), Centrado Vertical
        const artStartPxY = (ctx.canvasHeight - ctx.artHeightPx) / 2;
        return { artStartPx: 0, artStartPxY };
    }
};

export const CenterAligner = {
    getCoordinates(instance) {
        const ctx = getAlignmentContext(instance);
        if (!ctx) return defaultPosition;

        // Centrado Horizontal, Centrado Vertical
        const artStartPx = (ctx.canvasWidth - ctx.artWidthPx) / 2;
        const artStartPxY = (ctx.canvasHeight - ctx.artHeightPx) / 2;
        return { artStartPx, artStartPxY };
    }
};

export const RightAligner = {
    getCoordinates(instance) {
        const ctx = getAlignmentContext(instance);
        if (!ctx) return defaultPosition;

        // Derecha Horizontal (Canvas - Arte), Centrado Vertical
        const artStartPx = ctx.canvasWidth - ctx.artWidthPx;
        const artStartPxY = (ctx.canvasHeight - ctx.artHeightPx) / 2;
        return { artStartPx, artStartPxY };
    }
};

// ====================
// ALINEACIONES INFERIORES (BOTTOM)
// ====================

export const BottomLeftAligner = {
    getCoordinates(instance) {
        const ctx = getAlignmentContext(instance);
        if (!ctx) return defaultPosition;

        // Izquierda Horizontal (X=0), Inferior Vertical (Canvas - Arte)
        const artStartPxY = ctx.canvasHeight - ctx.artHeightPx;
        return { artStartPx: 0, artStartPxY };
    }
};

export const BottomAligner = {
    getCoordinates(instance) {
        const ctx = getAlignmentContext(instance);
        if (!ctx) return defaultPosition;

        // Centrado Horizontal, Inferior Vertical (Canvas - Arte)
        const artStartPx = (ctx.canvasWidth - ctx.artWidthPx) / 2;
        const artStartPxY = ctx.canvasHeight - ctx.artHeightPx;
        return { artStartPx, artStartPxY };
    }
};

export const BottomRightAligner = {
    getCoordinates(instance) {
        const ctx = getAlignmentContext(instance);
        if (!ctx) return defaultPosition;

        // Derecha Horizontal (Canvas - Arte), Inferior Vertical (Canvas - Arte)
        const artStartPx = ctx.canvasWidth - ctx.artWidthPx;
        const artStartPxY = ctx.canvasHeight - ctx.artHeightPx;
        return { artStartPx, artStartPxY };
    }
};