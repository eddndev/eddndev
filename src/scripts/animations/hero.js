import { gsap } from '../core/gsap-core';
import { prefersReduced } from '../core/dom';

export default function initHero() {
  const intro  = document.querySelector('[data-hero-intro]');
  const badges = gsap.utils.toArray('[data-badge]');
  const ctas   = gsap.utils.toArray('[data-cta]');
  const qnav   = gsap.utils.toArray('[data-quicknav] a');

  if (!intro) return;

  // Estado inicial (evita FOUC)
  gsap.set(["#hello", "#name"], { opacity: 1 });
  gsap.set(intro,  { autoAlpha: 0, y: 12 });
  gsap.set(badges, { autoAlpha: 0, y: 8 });
  gsap.set(ctas,   { autoAlpha: 0, y: 8 });

  const tl = gsap.timeline({ defaults: { ease: 'power2.out', duration: 0.8 } });
  tl.from("#ledding-animation-container", { opacity: 0, scale: 0.98, duration: 1.0 })
    .from("#hello", { y: 20, opacity: 0 }, "-=0.5")
    .from("#name",  { y: 10, opacity: 0, filter: "blur(6px)" }, "-=0.4")
    .to(intro,      { autoAlpha: 1, y: 0 }, "-=0.4")
    .to(badges,     { autoAlpha: 1, y: 0, stagger: 0.06 }, "-=0.45")
    .to(ctas,       { autoAlpha: 1, y: 0, stagger: 0.08 }, "-=0.4")

  // Respiración sutil (respeta reduce motion)
  if (!prefersReduced()) {
    gsap.to("#ledding-animation-container", {
      scale: 1.01, rotate: 0.2, transformOrigin: "50% 50%",
      duration: 6, yoyo: true, repeat: -1, ease: "sine.inOut"
    });
  }
}
