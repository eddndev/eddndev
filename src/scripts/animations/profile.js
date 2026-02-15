import { gsap, ScrollTrigger } from '../core/gsap-core';
import { prefersReduced } from '../core/dom';

export default function initProfile() {
  const hero = document.querySelector('[data-profile-hero]');
  if (!hero) return; // Not on profile page

  // ── Hero Entrance ──
  const tl = gsap.timeline({ defaults: { ease: 'power2.out', duration: 0.8 } });
  tl.from('#ledding-profile-container', { opacity: 0, scale: 0.96, duration: 1.2 })
    .from(hero.children, { y: 30, opacity: 0, stagger: 0.12, duration: 0.9 }, '-=0.7');

  // ── Ledding Breathing ──
  if (!prefersReduced()) {
    const ledding = document.querySelector('#ledding-profile-container');
    if (ledding) {
      gsap.to(ledding, {
        scale: 1.02, rotate: 0.3, transformOrigin: '50% 50%',
        duration: 7, yoyo: true, repeat: -1, ease: 'sine.inOut'
      });
    }
  }

  // ── Floating SVGs (Scroll-driven parallax) ──
  gsap.utils.toArray('[data-profile-float]').forEach(el => {
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

    // Subtle idle float (if motion allowed)
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
  gsap.utils.toArray('[data-profile-orb]').forEach((orb, i) => {
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

  // ── Dashed Line Draw (scroll-driven) ──
  document.querySelectorAll('.profile-line-draw').forEach(line => {
    const section = line.closest('section');
    if (!section) return;
    const len = section.offsetHeight;
    gsap.set(line, { strokeDashoffset: len });
    gsap.to(line, {
      strokeDashoffset: 0,
      ease: 'none',
      scrollTrigger: {
        trigger: section,
        start: 'top bottom',
        end: 'bottom top',
        scrub: 1,
      }
    });
  });

  // ── Orbital Rotation (continuous + scroll boost) ──
  const orbital = document.querySelector('[data-profile-orbital]');
  if (orbital && !prefersReduced()) {
    gsap.to(orbital, {
      rotation: 360,
      duration: 40,
      repeat: -1,
      ease: 'none',
      transformOrigin: '50% 50%',
    });

    // Scroll accelerates the orbit
    gsap.to(orbital, {
      rotation: '+=180',
      scrollTrigger: {
        trigger: orbital.closest('section'),
        start: 'top bottom',
        end: 'bottom top',
        scrub: 2,
      }
    });
  }

  // ── Process Steps (staggered scroll reveal) ──
  const steps = gsap.utils.toArray('[data-profile-step]');
  if (steps.length) {
    steps.forEach((step, i) => {
      const num = step.querySelector('span');
      if (num) {
        gsap.from(num, {
          x: -20,
          opacity: 0,
          duration: 0.6,
          delay: i * 0.05,
          scrollTrigger: {
            trigger: step,
            start: 'top 85%',
            toggleActions: 'play none none reverse',
          }
        });
      }
    });
  }

  // ── Cards (scale reveal on scroll) ──
  gsap.utils.toArray('[data-profile-card]').forEach((card, i) => {
    gsap.from(card, {
      scale: 0.95,
      y: 30,
      opacity: 0,
      duration: 0.7,
      delay: i * 0.08,
      ease: 'power3.out',
      scrollTrigger: {
        trigger: card,
        start: 'top 90%',
        toggleActions: 'play none none reverse',
      }
    });
  });
}
