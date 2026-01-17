import { ScrollTrigger } from './gsap-core';
import Lenis from 'lenis';

const lenis = new Lenis({
  lerp: 0.12,
  smoothWheel: true,
  smoothTouch: false,
});

function raf(time) {
  lenis.raf(time);
  ScrollTrigger.update();
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);
lenis.on('scroll', ScrollTrigger.update);

export { lenis };
