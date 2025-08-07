/**
 * Retrasa la ejecución de una función hasta que haya pasado un tiempo
 * determinado sin que se vuelva a llamar.
 * @param {Function} func La función a ejecutar.
 * @param {number} delay El tiempo de espera en milisegundos.
 * @returns {Function} La nueva función "debounced".
 */
export function debounce(func, delay) {
    let timeout;

    // Retorna una nueva función que envuelve a la original.
    return function(...args) {
        // `this` se refiere al contexto con el que se llamó (ej. la instancia de Ledding).
        const context = this; 
        
        // Limpia el temporizador anterior cada vez que se llama a la función.
        clearTimeout(timeout);
        
        // Establece un nuevo temporizador.
        timeout = setTimeout(() => {
            // Cuando el temporizador se cumple, ejecuta la función original.
            func.apply(context, args);
        }, delay);
    };
}