// resources/js/modules/projects.js
import { gsap, ScrollTrigger } from '../core/gsap-core';

export default function initProjects() {
  gsap.registerPlugin(ScrollTrigger);

  // 1) Reveal del bloque de texto
  gsap.utils.toArray('#proyectos [data-proj-reveal]').forEach((el) => {
    gsap.from(el, {
      y: 18, autoAlpha: 0, duration: 0.7, ease: 'power3.out',
      scrollTrigger: { trigger: el, start: 'top 85%', once: true }
    });
  });

  // 2) Parallax MUY sutil del visual (no tocar wrappers de Ledding)
  gsap.utils.toArray('#proyectos [data-proj-visual]').forEach((box) => {
    gsap.fromTo(box, { y: 12 }, {
      y: -12, ease: 'none',
      scrollTrigger: {
        trigger: box,
        start: 'top bottom',
        end: 'bottom top',
        scrub: true
      }
    });
  });

  // 3) Cinta de colas (Sylestudio): puntos que “avanzan”
  const belt = document.querySelector('#proyectos [data-queue-belt]');
  if (belt) {
    const dotsLayer = belt.querySelector('[data-belt-dots]');
    // Crea 8 “paquetes”
    Array.from({ length: 8 }).forEach((_, i) => {
      const c = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
      c.setAttribute('r', '6');
      c.setAttribute('cy', '50');
      c.setAttribute('cx', String(-80 - i * 100));
      c.setAttribute('fill', i % 2 ? '#fff' : '#E3B3FF');
      c.setAttribute('opacity', i % 2 ? '0.9' : '0.8');
      dotsLayer.appendChild(c);

      gsap.to(c, {
        attr: { cx: 880 },
        duration: 4 + (i % 3),
        repeat: -1,
        ease: 'none',
        delay: i * 0.15
      });
    });
  }
}
