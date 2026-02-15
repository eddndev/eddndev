import { gsap, ScrollTrigger } from '../core/gsap-core';
import { prefersReduced } from '../core/dom';

export default function initServices() {
  // ── Index: Service Cards (scale reveal on scroll) ──
  gsap.utils.toArray('[data-service-card]').forEach((card, i) => {
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

  // ── /services page guard ──
  const hero = document.querySelector('[data-services-hero]');
  if (!hero) return;

  // ── Hero Entrance ──
  const tl = gsap.timeline({ defaults: { ease: 'power2.out', duration: 0.8 } });
  tl.from('#ledding-services-container', { opacity: 0, scale: 0.96, duration: 1.2 })
    .from(hero.children, { y: 30, opacity: 0, stagger: 0.12, duration: 0.9 }, '-=0.7');

  // ── Ledding Breathing ──
  if (!prefersReduced()) {
    const ledding = document.querySelector('#ledding-services-container');
    if (ledding) {
      gsap.to(ledding, {
        scale: 1.02, rotate: 0.3, transformOrigin: '50% 50%',
        duration: 7, yoyo: true, repeat: -1, ease: 'sine.inOut'
      });
    }
  }

  // ── SVG Stroke Drawing (scroll-driven) ──
  document.querySelectorAll('[data-service-draw]').forEach(svg => {
    const paths = svg.querySelectorAll('.draw-path');
    if (!paths.length) return;

    const trigger = svg.closest('section') || svg.closest('div');

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
          start: 'top 90%',
          end: 'bottom 20%',
          scrub: 1.2 + (i * 0.3),
        }
      });
    });
  });

  // ── Floating SVGs (Scroll-driven parallax) ──
  gsap.utils.toArray('[data-service-float]').forEach(el => {
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
  gsap.utils.toArray('[data-service-orb]').forEach((orb, i) => {
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

  // ── Highlights staggered reveal ──
  gsap.utils.toArray('[data-service-highlight]').forEach((item, i) => {
    const section = item.closest('section');
    gsap.from(item, {
      x: -20,
      opacity: 0,
      duration: 0.5,
      delay: (i % 4) * 0.1,
      ease: 'power2.out',
      scrollTrigger: {
        trigger: section || item,
        start: 'top 70%',
        toggleActions: 'play none none reverse',
      }
    });
  });
}
