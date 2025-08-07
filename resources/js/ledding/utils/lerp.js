/**
 * Realiza una interpolación lineal entre dos valores.
 * @param {number} start El valor inicial.
 * @param {number} end El valor final.
 * @param {number} amt La cantidad a interpolar (un valor entre 0 y 1).
 * @returns {number} El valor interpolado.
 */
export function lerp(start, end, amt) {
    return (1 - amt) * start + amt * end;
}