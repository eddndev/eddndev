/**
 * Define los patrones de secuenciación para las animaciones de encendido/apagado.
 * Esto determina el *orden* en que los LEDs cambian de estado.
 */
export const Pattern = Object.freeze({
  /**
   * Un paso de la secuencia a la vez, creando un efecto de barrido.
   */
  CASCADE: 'cascade',
  /**
   * Grupos basados en un 'step' (módulo), creando un efecto de bandas.
   */
  INTERLACED: 'interlaced',
  /**
   * Múltiples cascadas simultáneas separadas por 'step', como ondas.
   */
  WAVE: 'wave',
  /**
   * Activación en orden aleatorio.
   */
  RANDOM: 'random'
});

/**
 * Define las 8 direcciones posibles para el flujo de la animación,
 * tanto para el movimiento global como para las transiciones locales.
 */
export const Direction = Object.freeze({
  TO_RIGHT: 'to-right',
  TO_LEFT: 'to-left',
  TO_BOTTOM: 'to-bottom',
  TO_TOP: 'to-top',
  TO_TOP_LEFT: 'to-top-left',
  TO_TOP_RIGHT: 'to-top-right',
  TO_BOTTOM_LEFT: 'to-bottom-left',
  TO_BOTTOM_RIGHT: 'to-bottom-right'
});
