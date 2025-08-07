import { Direction } from '../utils/constants.js';

export const update = function(deltaTime) {
    if (!this.grid.leds) return;

    const animConfig = this.options.animation.scroll;
    const speed = animConfig.speed * deltaTime;
    const diagonalSpeed = speed * 0.70710678118;

    switch (animConfig.direction) {
        case Direction.TO_LEFT: this.scrollX -= speed; break;
        case Direction.TO_RIGHT: this.scrollX += speed; break;
        case Direction.TO_TOP: this.scrollY -= speed; break;
        case Direction.TO_BOTTOM: this.scrollY += speed; break;
        case Direction.TO_TOP_LEFT: this.scrollX -= diagonalSpeed; this.scrollY -= diagonalSpeed; break;
        case Direction.TO_TOP_RIGHT: this.scrollX += diagonalSpeed; this.scrollY -= diagonalSpeed; break;
        case Direction.TO_BOTTOM_LEFT: this.scrollX -= diagonalSpeed; this.scrollY += diagonalSpeed; break;
        case Direction.TO_BOTTOM_RIGHT: this.scrollX += diagonalSpeed; this.scrollY += diagonalSpeed; break;
    }

    // Usamos la dimensión precalculada.
    const ledFullSize = this.dimensions.ledFullSize;
    
    const { artStartPx, artStartPxY } = this.options.aligner.getCoordinates(this);
        
    this.artPosition = {
        startPx: artStartPx,
        startPxY: artStartPxY,
        widthPx: (this.options.artPattern[0]?.length || 0) * ledFullSize,
        heightPx: this.options.artPattern.length * ledFullSize,
    };

    if (this.grid.isSparse){
        this._updateSparseGrid();
    } else {
        this._updateClassicGrid();
    }
}