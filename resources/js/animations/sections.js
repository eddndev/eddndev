import { gsap, ScrollTrigger } from '../core/gsap-core';

export default function initSections() {
  // Reveal genérico PERO sin tocar #uxui-block (ese lleva timeline propio)
  gsap.utils.toArray('#focus [data-focus-reveal]:not(#uxui-block)').forEach((el) => {
    gsap.from(el, {
      y: 22,
      autoAlpha: 0,
      duration: 0.7,
      ease: 'power3.out',
      scrollTrigger: { trigger: el, start: 'top 85%', once: true }
    });
  });

  // ===== UX / UI — reveal JIT, rápido, sin "velo" previo =====
  const ux = document.querySelector('#uxui-block');
  if (ux) {
    const title     = ux.querySelector('h3');
    const copy      = ux.querySelector('p');
    const tokens    = ux.querySelectorAll('[data-ux-tokens] [data-token]');
    const typeScale = ux.querySelectorAll('[data-type-scale] > *');
    const swatches  = ux.querySelectorAll('[data-swatch]');
    const form      = ux.querySelector('form');

    gsap.set(ux, { autoAlpha: 1 });

    ScrollTrigger.create({
      trigger: ux,
      start: 'top 80%',
      once: true,
      onEnter: () => {
        gsap.set([title, copy], { autoAlpha: 0, y: 10 });
        gsap.set(tokens,        { autoAlpha: 0, y: 8  });
        gsap.set(typeScale,     { autoAlpha: 0, y: 6  });
        gsap.set(swatches,      { autoAlpha: 0, y: 8  });
        gsap.set(form,          { autoAlpha: 0, y: 8  });

        const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
        tl.to([title, copy], { autoAlpha: 1, y: 0, duration: 0.32, stagger: 0.06 })
          .to(tokens,       { autoAlpha: 1, y: 0, duration: 0.28, stagger: 0.04 }, '-=0.10')
          .to(typeScale,    { autoAlpha: 1, y: 0, duration: 0.28, stagger: 0.05 }, '-=0.10')
          .to(swatches,     { autoAlpha: 1, y: 0, duration: 0.30, stagger: 0.06 }, '-=0.08')
          .to(form,         { autoAlpha: 1, y: 0, duration: 0.30 },               '-=0.06')
          .add(() => {
            // Limpia estilos inline
            gsap.set([ux, title, copy, ...tokens, ...typeScale, ...swatches, form], {
              clearProps: 'opacity,transform,filter'
            });
          });
      }
    });
  }

  // ===== Frontend — count-up simple =====
  gsap.utils.toArray('[data-metric]').forEach(card => {
    const el = card.querySelector('[data-metric-val]');
    if (!el) return;

    const target = parseFloat(el.getAttribute('data-metric-val')) || 0;
    const text   = el.textContent.trim();
    const unit   = text.replace(String(parseFloat(text)), '').trim();

    const obj = { n: 0 };
    gsap.to(obj, {
      n: target,
      duration: 1.2,
      ease: 'power2.out',
      scrollTrigger: { trigger: card, start: 'top 85%', once: true },
      onUpdate() {
        const value =
          target < 5   ? obj.n.toFixed(2) :
          target < 100 ? obj.n.toFixed(0) :
          Math.round(obj.n);
        el.textContent = `${value}${unit ? unit : ''}`;
      }
    });
  });

  // Toggles demo (aria-pressed)
  document.querySelectorAll('[data-toggles] button').forEach(btn => {
    btn.addEventListener('click', () => {
      const pressed = btn.getAttribute('aria-pressed') === 'true';
      btn.setAttribute('aria-pressed', (!pressed).toString());
    });
  });

  // ===== Backend — pipeline con MotionPath =====
  document.querySelectorAll('[data-pipeline]').forEach((box) => {
    const svg      = box.querySelector('svg');
    const path     = svg?.querySelector('[data-pipe-path]');
    const packet   = svg?.querySelector('[data-pipe-packet]');
    const nodesG   = svg?.querySelector('[data-pipe-nodes]');
    const nodes    = nodesG ? Array.from(nodesG.querySelectorAll('circle')) : [];

    if (!svg || !path || !packet || nodes.length === 0) return;

    // Coloca nodos exactamente sobre la curva (y re-colócalos al resize)
    const placeNodes = () => {
      const len = path.getTotalLength();
      // porcentajes a lo largo de la curva (puedes moverlos)
      const t = [0.06, 0.28, 0.50, 0.72, 0.94];

      nodes.forEach((n, i) => {
        const p = path.getPointAtLength(len * t[i]);
        n.setAttribute('cx', p.x);
        n.setAttribute('cy', p.y);
      });
    };

    // observar cambios de tamaño del SVG para re-posicionar los nodos
    const ro = new ResizeObserver(() => placeNodes());
    ro.observe(svg);
    placeNodes();

    // Animación del “paquete”
    gsap.set(packet, { opacity: 0, scale: 1, transformOrigin: '50% 50%' });

    const D = 5.5;                 // duración total
    const tl = gsap.timeline({
      paused: true,
      defaults: { ease: 'none' },
      scrollTrigger: {
        trigger: box,
        start: 'top 75%',
        once: true
        // Para que siga el scroll en vez de reproducirse una vez:
        // scrub: 0.4, once: false
      }
    });

    tl.to(packet, { opacity: 1, duration: 0.25 });

    tl.to(packet, {
      duration: D,
      motionPath: {
        path,
        align: path,
        alignOrigin: [0.5, 0.5],
        autoRotate: false
      }
    }, '<');

    // pulso en cada nodo cuando pasa el paquete
    const len = path.getTotalLength();
    const checkpoints = [0.06, 0.28, 0.50, 0.72, 0.94].map(t => t * D);

    nodes.forEach((n, i) => {
      tl.to(n, { scale: 1.25, duration: 0.12, ease: 'power2.out' }, checkpoints[i] - 0.05);
      tl.to(n, { scale: 1.00, duration: 0.20, ease: 'power2.in'  }, checkpoints[i] + 0.05);
    });

    tl.to(packet, { opacity: 0, duration: 0.25 }, D - 0.1);
  });

  // Paneles 1:1 — reveal suave (sin hover/borde)
  gsap.utils.toArray('#focus [data-panel-square]').forEach((panel) => {
    gsap.from(panel, {
      y: 26, scale: 0.96, autoAlpha: 0, duration: 0.9, ease: 'power3.out',
      scrollTrigger: { trigger: panel, start: 'top 85%', once: true }
    });
  });
}
