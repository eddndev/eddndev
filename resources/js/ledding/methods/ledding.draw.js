export const draw = function() {
    if (!this.grid.leds) return;
    
    // Limpieza del canvas
    this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
    if (this.options.colors.background) {
        this.ctx.fillStyle = this.options.colors.background;
        this.ctx.fillRect(0, 0, this.canvas.width, this.canvas.height);
    }

    // Usar dimensiones precalculadas y referencias locales para acceso rápido.
    const { ledFullSize, gridWidthPx, gridHeightPx } = this.dimensions;
    const renderer = this.options.renderer;
    const ctx = this.ctx;
    const scrollX = this.scrollX;
    const scrollY = this.scrollY;

    // Determinamos la fuente iterable basandonos en el modo.
    const ledsIterable = this.grid.isSparse ? this.grid.leds.values() : this.grid.leds;

    // Usamos for...of para compatibilidad con ambos tipos de iterables (Array y Map Iterator).
    for (const led of ledsIterable) {
        const baseX = led.gridPosition.i * ledFullSize;
        const baseY = led.gridPosition.j * ledFullSize;
        
        // Cálculo de módulo positivo eficiente (Wrap-around Toroidal).
        let ledCenterX = (baseX + scrollX) % gridWidthPx;
        if (ledCenterX < 0) ledCenterX += gridWidthPx;
        
        let ledCenterY = (baseY + scrollY) % gridHeightPx;
        if (ledCenterY < 0) ledCenterY += gridHeightPx;

        // Calculamos el color y dibujamos.
        const color = this._getInterpolatedColor(led);
        ctx.globalAlpha = led.currentOpacity;
        
        renderer.draw(
        ctx, led, ledCenterX, ledCenterY, color, this
        );
    }
    
    // Restablecer globalAlpha al final del bucle.
    ctx.globalAlpha = 1.0;
}