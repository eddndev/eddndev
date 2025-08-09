import Ledding from '../ledding/ledding.js';
import { BottomRightAligner, CenterAligner, RightAligner } from '../ledding/aligners/Aligners.js';
import { heartPattern } from '../ledding/patterns/heart.js';
import { uiEyePattern, codeTagPattern, dbCylinderPattern } from '../ledding/patterns/edd.js';
import { Direction, Pattern } from '../ledding/utils/constants.js';

const PATTERNS = {
  ui: uiEyePattern,
  fe: codeTagPattern,
  be: dbCylinderPattern
};

// --- utils: hex/rgb -> rgba -------------------------------------------------
function hexToRgba(hex, alpha = 1) {
  hex = hex.replace('#', '').trim();
  if (hex.length === 3) {
    hex = hex.split('').map(c => c + c).join('');
  }
  const int = parseInt(hex, 16);
  if (Number.isNaN(int)) return `rgba(106, 13, 173, ${alpha})`; // fallback brand
  const r = (int >> 16) & 255;
  const g = (int >> 8) & 255;
  const b = int & 255;
  return `rgba(${r}, ${g}, ${b}, ${alpha})`;
}

function toRgba(color, alpha = 1) {
  if (!color) return `rgba(106, 13, 173, ${alpha})`;
  const c = color.trim();

  if (c.startsWith('rgba(')) return c; // ya es válido
  if (c.startsWith('rgb(')) {
    const nums = c.match(/\d+/g) || [];
    const [r = 106, g = 13, b = 173] = nums.map(Number);
    return `rgba(${r}, ${g}, ${b}, ${alpha})`;
  }
  if (c.startsWith('#')) return hexToRgba(c, alpha);

  // último recurso (por si viniera 'rebeccapurple' o algo raro)
  return `rgba(106, 13, 173, ${alpha})`;
}

// ----------------------------------------------------------------------------
export default function initLeddingPanels() {
  document.querySelectorAll('[data-ledding]').forEach((el) => {
    if (!el.id) el.id = `ledding-${Math.random().toString(36).slice(2,8)}`;

    const key = el.dataset.pattern || 'ux';
    let artPattern = PATTERNS[key] || uiEyePattern;

    // Si este panel está del lado izquierdo y quieres que "mire" hacia el contenido:
    if (el.closest('[data-side="left"]')) {
      artPattern = flipH(artPattern);
    }

    new Ledding(`#${el.id}`, {
      ledSize: 22,
      ledGap: 4,
      scaleToFit: true,
      artPattern,
      aligner: CenterAligner,
      colors: {
        background: 'rgba(0,0,0,0)',
        base: 'rgba(26, 19, 34, 1)',  // morado casi negro
        states: {
          1: 'rgba(200,149,255,1)',
          2: 'rgba(167, 86,255,1)',
          3: 'rgba(181,114,255,1)',
        },
      },
      fps: 30,
      animation: {
        scroll:     { direction: Direction.TO_TOP, speed: 18 },
        ignition:   { pattern: Pattern.CASCADE, direction: Direction.TO_BOTTOM, delay: 0.8 },
        extinction: { pattern: Pattern.CASCADE, direction: Direction.TO_BOTTOM, delay: 0.3 },
      },
      transitions: {
        ignition:   { min: 0.05, randomize: false },
        extinction: { min: 0.10, randomize: false },
        morph:      { min: 0.10, randomize: false },
      },
      grid: { fill: false, lifespan: 10 },
    });
  });
}
