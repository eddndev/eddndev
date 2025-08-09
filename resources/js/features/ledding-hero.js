import Ledding from '../ledding/ledding.js';
import { BottomRightAligner } from '../ledding/aligners/Aligners.js';
import { logoPattern } from '../ledding/patterns/logo.js';
import { Direction, Pattern } from '../ledding/utils/constants.js';

export default function initLeddingHero() {
  const target = '#ledding-animation-container';
  if (!document.querySelector(target)) return;

  new Ledding(target, {
    ledSize: 25,
    ledGap: 4,
    scaleToFit: false,
    artPattern: logoPattern,
    aligner: BottomRightAligner,
    colors: {
      background: 'rgba(20, 24, 32, 0)',
      base: 'rgba(45, 55, 72, 1)',
      states: {
        1: 'rgba(200, 149, 255, 1)',
        2: 'rgba(167, 86, 255, 1)',
        3: 'rgba(167, 86, 255, 1)'
      }
    },
    fps: 30,
    animation: {
      scroll: { direction: Direction.TO_LEFT, speed: 15 },
      ignition: { pattern: Pattern.CASCADE, direction: Direction.TO_BOTTOM, delay: 0.5 },
      extinction: { pattern: Pattern.CASCADE, delay: 1.1, direction: Direction.TO_TOP, step: 8 }
    },
    transitions: {
      ignition: { min: 0.05, randomize: false },
      extinction: { min: 0.1, randomize: false },
      morph: { min: 0.1, randomize: false }
    },
    grid: { fill: true, lifespan: 60 }
  });
}
