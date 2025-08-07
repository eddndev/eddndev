// src/ledding/renderers/SquareRenderer.js

/**
 * @typedef {import('../index.js').Ledding} Ledding
 */

export const SquareRenderer = {
    /**
     * En este caso, no se necesita ninguna preparación.
     * El método existe para mantener una API consistente entre renderers.
     */
    setup(leddingInstance) {
        // No es necesario hacer nada.
    },

    /**
     * Dibuja un cuadrado en el canvas.
     * @param {CanvasRenderingContext2D} ctx - El contexto del canvas.
     * @param {object} led - El objeto LED que contiene el estado.
     * @param {number} x - La coordenada X central del LED.
     * @param {number} y - La coordenada Y central del LED.
     * @param {string} color - El color de relleno.
     * @param {Ledding} leddingInstance - La instancia principal de Ledding.
     */
    draw(ctx, led, x, y, color, leddingInstance) {
        const size = led.currentSize;
        if (size < 0.1) return;

        ctx.fillStyle = color;
        // Dibuja el cuadrado desde su esquina superior izquierda, por lo que ajustamos la posición.
        const cornerX = x - size / 2;
        const cornerY = y - size / 2;

        ctx.fillRect(cornerX, cornerY, size, size);
    }
};