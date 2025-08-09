import { gsap } from '../core/gsap-core';

export default function initMicro() {
  // Hover en CTAs
  document.querySelectorAll("[data-cta]").forEach(el => {
    el.addEventListener("mouseenter", () => gsap.to(el, { y: -2, duration: 0.18, ease: "power2.out" }));
    el.addEventListener("mouseleave", () => gsap.to(el, { y: 0,  duration: 0.18, ease: "power2.out" }));
  });
}
