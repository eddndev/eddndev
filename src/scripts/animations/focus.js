import { gsap, ScrollTrigger } from '../core/gsap-core';

export default function initFocus() {
  // 0. Hero Parallax / Pinning (Restored)
  const hero = document.querySelector('#hero');
  if (hero) {
    gsap.timeline({
      scrollTrigger: {
        trigger: hero,
        start: 'bottom bottom',
        end: '+=65%',
        scrub: true,
        pin: true,
        pinSpacing: false,
        anticipatePin: 0,
      }
    }).to(hero, { yPercent: -20, autoAlpha: 0, ease: 'none' }, 0);
  }

  // 1. Vertical Lines Drawing (Grid)
  gsap.utils.toArray('[data-line-vertical]').forEach(line => {
    gsap.to(line, {
      scaleY: 1,
      duration: 1.5,
      ease: 'power3.out',
      scrollTrigger: {
        trigger: line.closest('section'),
        start: 'top 85%', 
        toggleActions: 'play none none none'
      }
    });
  });

  // 2. Text Reveals (Staggered, opacity only)
  gsap.utils.toArray('section').forEach(section => {
    const texts = section.querySelectorAll('.reveal-text');
    if (texts.length > 0) {
      gsap.from(texts, {
        autoAlpha: 0,
        duration: 0.5,
        stagger: 0.06,
        ease: 'power2.out',
        scrollTrigger: {
          trigger: section,
          start: 'top 85%',
          toggleActions: 'play none none none'
        }
      });
    }
  });

  // 3. Panels Reveal (opacity only)
  gsap.utils.toArray('[data-panel-reveal]').forEach(panel => {
    gsap.from(panel, {
      autoAlpha: 0,
      duration: 0.5,
      ease: 'power2.out',
      scrollTrigger: {
        trigger: panel,
        start: 'top 85%',
        toggleActions: 'play none none none'
      }
    });
  });

  // 4. SVG Stroke Drawing (index decorations)
  document.querySelectorAll('[data-index-draw]').forEach(svg => {
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
}