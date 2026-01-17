import { gsap } from './core/gsap-core';
import './core/lenis';
import { onReady } from './core/dom';

import initHero from './animations/hero';
import initFocus from './animations/focus';
import initMicro from './animations/micro';
import initVignette from './animations/vignette';
import initLeddingHero from './features/ledding-hero';
import initLeddingPanels from './features/ledding-panels';
import initSections from './animations/sections';
import initProjects from './animations/projects';
import initFooterReveal from './animations/footer';
import initNavigation from './features/navigation';
import initProjectHero from './animations/project-hero';
import { initCursor } from './features/cursor';

// Boot
onReady(() => {
  console.log('Astro app booting...');
  initCursor();
  initHero();
  initMicro();
  initVignette();
  initLeddingHero();
  initFocus();
  initLeddingPanels();
  initSections();
  initProjects();
  initFooterReveal();
  initNavigation();
  initProjectHero();
});
