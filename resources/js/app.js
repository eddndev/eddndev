import './bootstrap';

// Core (registra GSAP + Lenis y expone hooks)
import { onReady } from './core/dom';
import './core/gsap-core';   // side-effect: registro de ScrollTrigger
import './core/lenis';       // side-effect: smooth scroll + sync con GSAP

// Animations / Features
import initHero from './animations/hero';
import initFocus from './animations/focus';
import initMicro from './animations/micro';
import initVignette from './animations/vignette';
import initLeddingHero from './features/ledding-hero';
import initDarkSections from './animations/sections';
import initLeddingPanels from './features/ledding-panels';
import initSections from './animations/sections';
import initProjects from './animations/projects';

// Boot
onReady(() => {
  initHero();
  initMicro();
  initVignette();
  initLeddingHero();
  initFocus(); // después del hero para tener los nodos ya presentes
  initDarkSections();
  initLeddingPanels();
  initSections();
  initProjects();
});
