/**
 * @typedef {import('../index.js').Ledding} Ledding
 */

export const CircleRenderer = {
    /**
     * Prepara cualquier recurso que el renderer necesite.
     * En este caso, crea un Path2D de un círculo unitario.
     * @param {Ledding} leddingInstance - La instancia principal de Ledding.
     */
    setup(leddingInstance) {
        if (!leddingInstance.unitCirclePath) {
            const path = new Path2D();
            path.arc(0, 0, 1, 0, Math.PI * 2);
            leddingInstance.unitCirclePath = path;
        }
    },

    /**
     * Dibuja un círculo en el canvas.
     * @param {CanvasRenderingContext2D} ctx - El contexto del canvas.
     * @param {object} led - El objeto LED que contiene el estado.
     * @param {number} x - La coordenada X central del LED.
     * @param {number} y - La coordenada Y central del LED.
     * @param {string} color - El color de relleno.
     * @param {Ledding} leddingInstance - La instancia principal de Ledding.
     */
    draw(ctx, led, x, y, color, leddingInstance) {
        const radius = led.currentSize / 2;
        if (radius < 0.1) return;

        ctx.fillStyle = color;

        // Usamos transformaciones en lugar de dibujar un arco cada vez.
        // Es más rápido cuando se renderizan miles de objetos.
        ctx.save();
        ctx.translate(x, y);
        ctx.scale(radius, radius);
        ctx.fill(leddingInstance.unitCirclePath);
        ctx.restore();
    }
};