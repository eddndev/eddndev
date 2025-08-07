export const _initializeColors = function() {
    this.parsedColors.base = this._parseRgbToIntArray(this.options.colors.base);
    this.parsedColors.states = {};
    for (const key in this.options.colors.states) {
        if (Object.hasOwnProperty.call(this.options.colors.states, key)) {
            this.parsedColors.states[key] = this._parseRgbToIntArray(this.options.colors.states[key]);
        }
    }
};