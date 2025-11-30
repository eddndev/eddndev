import { Ledding, RightAligner, CircleRenderer, Directions, Pattern } from 'ledding';
import { logoPattern } from '../ledding-patterns.js';

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

  // 2. Project Hero
  const projectTarget = document.querySelector('#ledding-project-container');
  if (projectTarget) {
    new Ledding('#ledding-project-container', {
      ledSize: 30,
      ledGap: 8,
      scaleToFit: false,
      // Usamos el mismo patrón por ahora, o uno generado aleatorio si grid.fill es true
      artPattern: logoPattern, 
      aligner: RightAligner,
      renderer: CircleRenderer,
      colors: {
        background: 'rgba(0, 0, 0, 0)', // Transparente total
        base: 'rgba(255, 255, 255, 0.03)', // Puntos base muy sutiles (estrellas)
        states: {
          1: 'rgba(139, 92, 246, 1)', // Purple 500
          2: 'rgba(168, 85, 247, 0.8)', // Purple 400
          3: 'rgba(192, 132, 252, 0.5)'  // Purple 300
        }
      },
      sizes: { states: { 1: 0.8, 2: 0.5, 3: 0.2 } },
      fps: 24, // Más cinemático/lento
      animation: {
        scroll: { direction: Directions.TO_LEFT, speed: 5 }, // Muy lento
        ignition: { pattern: Pattern.RANDOM, delay: 0.2 },
        extinction: { pattern: Pattern.RANDOM, delay: 0.1 }
      },
      grid: { fill: true, lifespan: 120 } // Relleno aleatorio tipo "Matrix/Estrellas"
    });
  }
}
