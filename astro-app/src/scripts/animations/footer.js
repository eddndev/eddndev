import { gsap, ScrollTrigger } from '../core/gsap-core';

export default function initFooterReveal() {
  // El footer ahora es global con id #site-footer
  const footer = document.querySelector('#site-footer');
  const prevSection = document.querySelector('#proyectos');

  if (!footer || !prevSection) return;

  // Efecto "Hero Exit":
  // Al llegar al final de proyectos, animamos Proyectos hacia arriba y fade out.
  gsap.to(prevSection, {
    yPercent: -30,      // Se mueve hacia arriba (negativo)
    autoAlpha: 0,       // Se desvanece
    scale: 0.95,        // Un ligero scale down para elegancia
    ease: 'none',
    scrollTrigger: {
      trigger: footer,    // El disparador es cuando entra el footer
      start: 'top bottom', // Cuando el top del footer toca el bottom del viewport
      end: 'center center', // Duración de la transición
      scrub: true
    }
  });

  // Stagger reveals para el contenido del footer
  const reveals = footer.querySelectorAll('.reveal-footer');
  if (reveals.length > 0) {
    gsap.from(reveals, {
      y: 40,
      autoAlpha: 0,
      duration: 0.8,
      stagger: 0.05,
      ease: 'power3.out',
      scrollTrigger: {
        trigger: footer,
        start: 'top 75%',
        toggleActions: 'play none none reverse'
      }
    });
  }
}