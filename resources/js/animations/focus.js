import { gsap, ScrollTrigger } from '../core/gsap-core';

export default function initFocus() {
  const hero  = document.querySelector('#hero');
  const focus = document.querySelector('#focus');
  if (!hero || !focus) return;

  // ===== HERO (Original, sin cambios) =====
  gsap.timeline({
    scrollTrigger: {
      trigger: hero,
      start: 'top top',
      end: '+=65%',
      scrub: true,
      pin: true,
      pinSpacing: false,
      anticipatePin: 1,
    }
  }).to(hero, { yPercent: -8, autoAlpha: 0, ease: 'none' }, 0);

  // Reveals y Paneles (Sin cambios)
  gsap.utils.toArray('#focus [data-focus-reveal]').forEach((el) => {
    gsap.from(el, {
      y: 22, autoAlpha: 0, duration: 0.7, ease: 'power3.out',
      scrollTrigger: { trigger: el, start: 'top 85%', once: true }
    });
  });

  gsap.utils.toArray('#focus [data-panel-square]').forEach((panel) => {
    gsap.from(panel, {
      y: 26, scale: 0.96, autoAlpha: 0, duration: 0.9, ease: 'power3.out',
      scrollTrigger: { trigger: panel, start: 'top 85%', once: true }
    });
  });


  // ===== OUTRO (Replicando el efecto del HERO) =====
  const outro = document.querySelector('#focus-outro');

  // Verificamos que exista el outro y que tenga una sección siguiente para que el flujo funcione.
  if (outro && outro.nextElementSibling) {

    // Optimizamos rendimiento
    gsap.set(outro, { willChange: 'transform, opacity' });

    // Aplicamos la misma configuración que en el Hero
    gsap.timeline({
      scrollTrigger: {
        trigger: outro,
        start: 'top top',      // Fija cuando el tope del outro toca el tope del viewport
        end: '+=65%',          // Misma duración
        scrub: true,
        pin: true,             // Fija el outro
        pinSpacing: false,
      }
    }).to(outro, { yPercent: -8, autoAlpha: 0, ease: 'none' }, 0); // Misma animación
  }
}