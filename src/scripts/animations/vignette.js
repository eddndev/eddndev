import { gsap } from '../core/gsap-core';

export default function initVignette() {
  const vignette = document.getElementById("hero-vignette");
  if (!vignette) return;
  gsap.fromTo(vignette, { opacity: 0 }, { opacity: 1, duration: 0.6, ease: "power2.out", delay: 0.2 });
}
