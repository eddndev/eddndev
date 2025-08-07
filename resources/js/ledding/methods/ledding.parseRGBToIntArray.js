export const _parseRgbToIntArray = function(rgbString) {
    // Asume formato "rgb(r, g, b)" o similar.
    const result = rgbString.match(/\d+/g).map(Number);
    // Uint8ClampedArray es el tipo de datos más eficiente para valores de color (0-255).
    return new Uint8ClampedArray([result[0], result[1], result[2]]);
}
