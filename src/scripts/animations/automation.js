import { gsap, ScrollTrigger } from '../core/gsap-core';
import { prefersReduced } from '../core/dom';

export default function initAutomation() {
  const hero = document.querySelector('[data-automation-hero]');
  if (!hero) return; // Not on automation page

  // ── Hero Entrance ──
  const tl = gsap.timeline({ defaults: { ease: 'power2.out' } });
  tl.from('#ledding-automation-container', { opacity: 0, duration: 0.6 })
    .from(hero.children, { opacity: 0, stagger: 0.08, duration: 0.5 }, '-=0.3');

  // ── Ledding Breathing ──
  if (!prefersReduced()) {
    const ledding = document.querySelector('#ledding-automation-container');
    if (ledding) {
      gsap.to(ledding, {
        scale: 1.02, rotate: 0.3, transformOrigin: '50% 50%',
        duration: 7, yoyo: true, repeat: -1, ease: 'sine.inOut'
      });
    }
  }

  // ── SVG Stroke Drawing (scroll-driven) ──
  document.querySelectorAll('[data-automation-draw]').forEach(svg => {
    const paths = svg.querySelectorAll('.draw-path');
    if (!paths.length) return;

    const trigger = svg.closest('section') || svg.closest('#hero') || svg.closest('div');

    paths.forEach((path, i) => {
      let len;
      try {
        len = path.getTotalLength();
      } catch {
        return;
      }

      gsap.set(path, {
        strokeDasharray: len,
        strokeDashoffset: len,
      });

      gsap.to(path, {
        strokeDashoffset: 0,
        ease: 'none',
        scrollTrigger: {
          trigger: trigger,
          start: 'top 95%',
          end: 'center 70%',
          scrub: 0.6 + (i * 0.15),
        }
      });
    });
  });

  // ── Floating SVGs (Scroll-driven parallax) ──
  gsap.utils.toArray('[data-automation-float]').forEach(el => {
    const speed = parseFloat(el.dataset.speed) || 1;
    gsap.to(el, {
      y: () => -80 * speed,
      rotation: () => 15 * speed,
      scrollTrigger: {
        trigger: el.closest('section') || el.closest('div'),
        start: 'top bottom',
        end: 'bottom top',
        scrub: 1.5,
      }
    });

    if (!prefersReduced()) {
      gsap.to(el, {
        y: `+=${6 * speed}`,
        x: `+=${3 * speed}`,
        duration: 3 + speed * 2,
        yoyo: true,
        repeat: -1,
        ease: 'sine.inOut',
        delay: Math.random() * 2,
      });
    }
  });

  // ── Gradient Orbs (Slow scroll drift) ──
  gsap.utils.toArray('[data-automation-orb]').forEach((orb, i) => {
    gsap.to(orb, {
      y: () => (i % 2 === 0 ? -120 : 80),
      x: () => (i % 2 === 0 ? 40 : -60),
      scrollTrigger: {
        trigger: orb.closest('section') || orb.closest('div'),
        start: 'top bottom',
        end: 'bottom top',
        scrub: 2,
      }
    });
  });

  // ── Process Steps (opacity reveal) ──
  const steps = gsap.utils.toArray('[data-automation-step]');
  if (steps.length) {
    steps.forEach((step, i) => {
      gsap.from(step, {
        opacity: 0,
        duration: 0.4,
        delay: i * 0.03,
        ease: 'power2.out',
        scrollTrigger: {
          trigger: step,
          start: 'top 88%',
          toggleActions: 'play none none none',
        }
      });
    });
  }

  // ── Cards (opacity reveal on scroll) ──
  gsap.utils.toArray('[data-automation-card]').forEach((card, i) => {
    gsap.from(card, {
      opacity: 0,
      duration: 0.4,
      delay: i * 0.04,
      ease: 'power2.out',
      scrollTrigger: {
        trigger: card,
        start: 'top 92%',
        toggleActions: 'play none none none',
      }
    });
  });
}
