import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

import { gsap, ScrollTrigger } from './core/gsap-core';
import './core/lenis'; // Import side-effects (smooth scroll init)
import { onReady } from './core/dom';



import initHero from './animations/hero';
import initFocus from './animations/focus';
import initMicro from './animations/micro';
import initVignette from './animations/vignette';
import initLeddingHero from './features/ledding-hero';
import initDarkSections from './animations/sections';
import initSections from './animations/sections';
import initProjects from './animations/projects';
import initFooterReveal from './animations/footer';
import initNavigation from './features/navigation';
import initProjectHero from './animations/project-hero';
import { initCursor } from './features/cursor';

// Boot
onReady(() => {
  initCursor(); // Cursor first to ensure it's ready
  initHero();
  initMicro();
  initVignette();
  initLeddingHero();
  initFocus(); // después del hero para tener los nodos ya presentes
  initDarkSections();
  initSections();
  initProjects();
  initFooterReveal();
  initNavigation();
  initProjectHero();
});
