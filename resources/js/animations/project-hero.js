import { gsap } from '../core/gsap-core';

export default function initProjectHero() {
  const container = document.querySelector('.project-hero-container');
  
  if (!container) {
      console.log('Project Hero container NOT found');
      return;
  }

  console.log('Project Hero initializing...');

  const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

  // 1. Background Elements
  // Aseguramos que empiece invisible si no lo está por CSS
  tl.fromTo(container.querySelector('.absolute.inset-0'), 
    { opacity: 0 }, 
    { opacity: 0.2, duration: 1.5 }
  );

  // 2. Title & Meta (Staggered Reveal)
  const title = container.querySelector('.hero-title');
  if(title) {
      tl.fromTo(title,
        { y: 60, autoAlpha: 0 },
        { y: 0, autoAlpha: 1, duration: 1.2 },
        '-=1'
      );
  }

  const metaItems = container.querySelectorAll('.hero-meta-item');
  if(metaItems.length > 0) {
      tl.fromTo(metaItems,
        { x: -20, autoAlpha: 0 },
        { x: 0, autoAlpha: 1, duration: 0.8, stagger: 0.1 },
        '-=0.8'
      );
  }

  // 3. Grid Items (Bottom Bar)
  const gridItems = container.querySelectorAll('.hero-grid-item');
  if(gridItems.length > 0) {
      tl.fromTo(gridItems,
        { y: 20, autoAlpha: 0 },
        { y: 0, autoAlpha: 1, duration: 0.6, stagger: 0.1 },
        '-=0.6'
      );
  }
  
  // 4. Continuous Ambient Motion
  const blob = container.querySelector('.animate-pulse-slow');
  if (blob) {
      gsap.to(blob, {
          scale: 1.2,
          opacity: 0.3,
          duration: 4,
          repeat: -1,
          yoyo: true,
          ease: "sine.inOut"
      });
  }
}