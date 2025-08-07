export const animate = function(timestamp) {
    this.animationFrameId = requestAnimationFrame(this.animate.bind(this));
    const elapsed = timestamp - this.lastFrameTime;
    if (elapsed < this.frameInterval) return;
    const deltaTime = elapsed / 1000;
    this.lastFrameTime = timestamp - (elapsed % this.frameInterval);
    this.update(deltaTime);
    this.draw();
}