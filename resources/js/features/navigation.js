import { gsap, ScrollTrigger } from '../core/gsap-core';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin';

gsap.registerPlugin(ScrollToPlugin);

export default function initNavigation() {
  const navItems = document.querySelectorAll('.nav-item');
  if (navItems.length === 0) return;

  // 1. Smooth Scroll (Click Listener)
  navItems.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const targetId = link.getAttribute('href');
      const targetSection = document.querySelector(targetId);
      
      if (targetSection) {
        gsap.to(window, {
          duration: 1.2,
          scrollTo: { y: targetSection, autoKill: false },
          ease: 'power3.inOut'
        });
      }
    });
  });

  // 2. ScrollSpy (Active State)
  // Identificar secciones únicas basándonos en los targets de los links
  const targets = new Set();
  navItems.forEach(link => {
    const id = link.dataset.target;
    if(id) targets.add(id);
  });

  // Crear un ScrollTrigger para cada sección única
  targets.forEach(id => {
    const section = document.querySelector(id);
    if (section) {
      ScrollTrigger.create({
        trigger: section,
        start: 'top center',
        end: 'bottom center',
        onToggle: (self) => {
          if (self.isActive) {
            // 1. Limpiar todos los nav-items
            document.querySelectorAll('.nav-item').forEach(el => el.classList.remove('active'));
            
            // 2. Activar TODOS los links que apunten a esta sección (Desktop + Mobile)
            document.querySelectorAll(`.nav-item[data-target="${id}"]`).forEach(el => el.classList.add('active'));
          }
        }
      });
    }
  });
}