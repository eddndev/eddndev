import { ScrollTrigger } from './core/gsap-core';
import './core/lenis';
import { onReady } from './core/dom';

import initHero from './animations/hero';
import initFocus from './animations/focus';
import initMicro from './animations/micro';
import initVignette from './animations/vignette';
import initLeddingHero from './features/ledding-hero';
import initSections from './animations/sections';
import initProjects from './animations/projects';
import initFooterReveal from './animations/footer';
import initNavigation from './features/navigation';
import initProjectHero from './animations/project-hero';
import initProfile from './animations/profile';
import initServices from './animations/services';
import initCaseContent from './animations/case-content';
import initAutomation from './animations/automation';
import { initCursor } from './features/cursor';

const init = () => {
  console.log('Astro app booting...');
  
  // Reset ScrollTrigger instances to avoid duplicates on navigation
  ScrollTrigger.getAll().forEach(t => t.kill());
  ScrollTrigger.clearMatchMedia();
  
  initCursor();
  initHero();
  initMicro();
  initVignette();
  initLeddingHero();
  initFocus();
  initSections();
  initProjects();
  initFooterReveal();
  initNavigation();
  initProjectHero();
  initProfile();
  initServices();
  initCaseContent();
  initAutomation();
};

// Boot on initial load and on every page transition
document.addEventListener('astro:page-load', init);
