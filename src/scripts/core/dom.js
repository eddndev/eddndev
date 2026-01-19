export const onReady = (cb) => (
  document.readyState === 'loading'
    ? document.addEventListener('DOMContentLoaded', cb, { once: true })
    : cb()
);

export const prefersReduced = () =>
  window.matchMedia('(prefers-reduced-motion: reduce)').matches;
