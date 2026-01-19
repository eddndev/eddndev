import { gsap, ScrollTrigger } from '../core/gsap-core';

export default function initProjects() {
  const section = document.querySelector('#work');
  if (!section) return;

  // 1. Text Reveals
  const texts = section.querySelectorAll('.reveal-text');
  if (texts.length > 0) {
    // Usamos fromTo para asegurar el estado inicial y final explícitamente
    gsap.fromTo(texts, 
      { y: 30, autoAlpha: 0 },
      {
        y: 0,
        autoAlpha: 1,
        duration: 0.8,
        stagger: 0.05,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: section,
          start: 'top 75%',
          toggleActions: 'play none none reverse'
        }
      }
    );
  }

  // 2. Project Cards Parallax / Scale
  gsap.utils.toArray('[data-project-card]').forEach((card, i) => {
    gsap.fromTo(card,
      { y: 50, scale: 0.95, autoAlpha: 0 },
      {
        y: 0,
        scale: 1,
        autoAlpha: 1,
        duration: 1,
        delay: i * 0.1,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: card,
          start: 'top 85%',
          toggleActions: 'play none none reverse'
        }
      }
    );
  });

  // 3. Vertical Line
  const line = section.querySelector('[data-line-vertical]');
  if (line) {
    gsap.fromTo(line,
      { scaleY: 0 },
      {
        scaleY: 1,
        duration: 1.5,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: section,
          start: 'top 85%',
          toggleActions: 'play none none reverse'
        }
      }
    );
  }
}
