import { Ledding, RightAligner, CenterAligner, CircleRenderer, Directions, Pattern } from 'ledding';
import { logoPattern, chatPattern, dbCylinderPattern } from '../ledding-patterns.js';

export default function initLeddingHero() {
  // 1. Home Hero
  const homeTarget = document.querySelector('#ledding-animation-container');
  if (homeTarget) {
    new Ledding('#ledding-animation-container', {
      ledSize: 25,
      ledGap: 4,
      scaleToFit: false,
      artPattern: logoPattern,
      aligner: RightAligner,
      renderer: CircleRenderer,
      colors: {
        background: 'rgba(20, 24, 32, 0)',
        base: 'rgba(45, 55, 72, 1)',
        states: {
          1: 'rgba(200, 149, 255, 1)',
          2: 'rgba(167, 86, 255, 1)',
          3: 'rgba(167, 86, 255, 1)'
        }
      },
      sizes: { states: { 1: 1.0, 2: 0.7, 3: 0.4 } },
      fps: 30,
      animation: {
        scroll: { direction: Directions.TO_LEFT, speed: 15 },
        ignition: { pattern: Pattern.CASCADE, direction: Directions.TO_BOTTOM, delay: 0.5 },
        extinction: { pattern: Pattern.CASCADE, delay: 1.1, direction: Directions.TO_TOP, step: 8 }
      },
      transitions: { ignition: { min: 0.05 }, extinction: { min: 0.1 }, morph: { min: 0.1 } },
      grid: { fill: false, lifespan: 60 }
    });
  }

  // 2. Project Detail Hero (Restore)
  const projectTarget = document.querySelector('#ledding-project-container');
  if (projectTarget) {
    new Ledding('#ledding-project-container', {
      ledSize: 30,
      ledGap: 8,
      scaleToFit: false,
      artPattern: logoPattern,
      aligner: RightAligner,
      renderer: CircleRenderer,
      colors: {
        background: 'rgba(0, 0, 0, 0)',
        base: 'rgba(255, 255, 255, 0.03)',
        states: {
          1: 'rgba(139, 92, 246, 1)',
          2: 'rgba(168, 85, 247, 0.8)',
          3: 'rgba(192, 132, 252, 0.5)'
        }
      },
      sizes: { states: { 1: 0.8, 2: 0.5, 3: 0.2 } },
      fps: 24,
      animation: {
        scroll: { direction: Directions.TO_LEFT, speed: 5 },
        ignition: { pattern: Pattern.RANDOM, delay: 0.2 },
        extinction: { pattern: Pattern.RANDOM, delay: 0.1 }
      },
      grid: { fill: true, lifespan: 120 }
    });
  }

  // 3. Work Archive Hero (Database Pattern)
  const workTarget = document.querySelector('#ledding-work-container');
  if (workTarget) {
    new Ledding('#ledding-work-container', {
      ledSize: 20, // Slightly smaller for density
      ledGap: 6,
      scaleToFit: false,
      artPattern: dbCylinderPattern,
      aligner: RightAligner,
      renderer: CircleRenderer,
      colors: {
        background: 'rgba(0, 0, 0, 0)',
        base: 'rgba(30, 20, 40, 1)',    // Darker purple base
        states: {
          1: 'rgba(139, 92, 246, 1)', // Purple 500
          2: 'rgba(168, 85, 247, 0.8)',
          3: 'rgba(192, 132, 252, 0.5)'
        }
      },
      sizes: { states: { 1: 0.8, 2: 0.5, 3: 0.2 } },
      fps: 24,
      animation: {
        scroll: { direction: Directions.TO_BOTTOM, speed: 8 }, // Data flow feel
        ignition: { pattern: Pattern.WAVE, delay: 0.1, direction: Directions.TO_BOTTOM },
        extinction: { pattern: Pattern.RANDOM, delay: 0.1 }
      },
      grid: { fill: true, lifespan: 100 } // Matrix-like background noise
    });
  }

  // 4. Contact Hero (Same as Home but confined)
  const contactTarget = document.querySelector('#ledding-contact-container');
  if (contactTarget) {
    new Ledding('#ledding-contact-container', {
      ledSize: 25,
      ledGap: 4,
      scaleToFit: false,
      artPattern: logoPattern,
      aligner: CenterAligner,
      renderer: CircleRenderer,
      colors: {
        background: 'rgba(20, 24, 32, 0)',
        base: 'rgba(45, 55, 72, 1)',
        states: {
          1: 'rgba(200, 149, 255, 1)',
          2: 'rgba(167, 86, 255, 1)',
          3: 'rgba(167, 86, 255, 1)'
        }
      },
      sizes: { states: { 1: 1.0, 2: 0.7, 3: 0.4 } },
      fps: 30,
      animation: {
        scroll: { direction: Directions.TO_LEFT, speed: 15 },
        ignition: { pattern: Pattern.CASCADE, direction: Directions.TO_BOTTOM, delay: 0.5 },
        extinction: { pattern: Pattern.CASCADE, delay: 1.1, direction: Directions.TO_TOP, step: 8 }
      },
      transitions: { ignition: { min: 0.05 }, extinction: { min: 0.1 }, morph: { min: 0.1 } },
      grid: { fill: false, lifespan: 60 }
    });
  }

  // 5. Services Hero
  const servicesTarget = document.querySelector('#ledding-services-container');
  if (servicesTarget) {
    new Ledding('#ledding-services-container', {
      ledSize: 22,
      ledGap: 5,
      scaleToFit: false,
      artPattern: logoPattern,
      aligner: RightAligner,
      renderer: CircleRenderer,
      colors: {
        background: 'rgba(0, 0, 0, 0)',
        base: 'rgba(35, 25, 55, 1)',
        states: {
          1: 'rgba(168, 85, 247, 1)',
          2: 'rgba(139, 92, 246, 0.8)',
          3: 'rgba(192, 132, 252, 0.5)'
        }
      },
      sizes: { states: { 1: 0.9, 2: 0.6, 3: 0.3 } },
      fps: 28,
      animation: {
        scroll: { direction: Directions.TO_LEFT, speed: 12 },
        ignition: { pattern: Pattern.WAVE, direction: Directions.TO_RIGHT, delay: 0.3 },
        extinction: { pattern: Pattern.CASCADE, delay: 0.9, direction: Directions.TO_BOTTOM, step: 6 }
      },
      transitions: { ignition: { min: 0.05 }, extinction: { min: 0.08 }, morph: { min: 0.08 } },
      grid: { fill: false, lifespan: 70 }
    });
  }

  // 6. Profile Hero (Shield/Logo — higher presence)
  const profileTarget = document.querySelector('#ledding-profile-container');
  if (profileTarget) {
    new Ledding('#ledding-profile-container', {
      ledSize: 22,
      ledGap: 5,
      scaleToFit: false,
      artPattern: logoPattern,
      aligner: RightAligner,
      renderer: CircleRenderer,
      colors: {
        background: 'rgba(0, 0, 0, 0)',
        base: 'rgba(40, 20, 60, 1)',
        states: {
          1: 'rgba(168, 85, 247, 1)',
          2: 'rgba(139, 92, 246, 0.9)',
          3: 'rgba(192, 132, 252, 0.6)'
        }
      },
      sizes: { states: { 1: 1.0, 2: 0.7, 3: 0.35 } },
      fps: 30,
      animation: {
        scroll: { direction: Directions.TO_LEFT, speed: 10 },
        ignition: { pattern: Pattern.WAVE, direction: Directions.TO_RIGHT, delay: 0.3 },
        extinction: { pattern: Pattern.CASCADE, delay: 0.8, direction: Directions.TO_BOTTOM, step: 6 }
      },
      transitions: { ignition: { min: 0.05 }, extinction: { min: 0.08 }, morph: { min: 0.08 } },
      grid: { fill: false, lifespan: 80 }
    });
  }

  // 7. Contact Hero Decoration (Message Bubble)
  const contactMsgTarget = document.querySelector('#ledding-hero-message');
  if (contactMsgTarget) {
    new Ledding('#ledding-hero-message', {
      ledSize: 20,
      ledGap: 4,
      scaleToFit: false,
      artPattern: chatPattern,
      aligner: CenterAligner,
      renderer: CircleRenderer,
      colors: {
        background: 'rgba(20, 24, 32, 0)',
        base: 'rgba(45, 55, 72, 1)',
        states: {
          1: 'rgba(200, 149, 255, 1)',
          2: 'rgba(167, 86, 255, 1)',
          3: 'rgba(167, 86, 255, 1)'
        }
      },
      sizes: { states: { 1: 1.0, 2: 0.6, 3: 0.3 } },
      fps: 20,
      animation: {
        scroll: { direction: Directions.TO_LEFT, speed: 0 }, // Static position
        ignition: { pattern: Pattern.RANDOM, delay: 0.5 },
        extinction: { pattern: Pattern.RANDOM, delay: 4.0, step: 2 } // Long hold
      },
      grid: { fill: false }
    });
  }
}
