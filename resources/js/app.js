import './bootstrap';
import Ledding from './ledding/ledding.js';
import { BottomRightAligner } from './ledding/aligners/Aligners.js';
import { logoPattern } from './ledding/patterns/logo.js';
import { Direction, Pattern } from './ledding/utils/constants.js';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);


document.addEventListener('DOMContentLoaded', () => {
      // --- Targets
    const intro  = document.querySelector('[data-hero-intro]');
    const badges = gsap.utils.toArray('[data-badge]');
    const ctas   = gsap.utils.toArray('[data-cta]');
    const qnav   = gsap.utils.toArray('[data-quicknav] a');

    // 1) Estado inicial para evitar FOUC / immediateRender
    gsap.set(["#hello", "#name"], { opacity: 1 });          // asegúrate de que estén visibles
    gsap.set(intro, { autoAlpha: 0, y: 12 });
    gsap.set(badges, { autoAlpha: 0, y: 8 });
    gsap.set(ctas,   { autoAlpha: 0, y: 8 });
    gsap.set(qnav,   { autoAlpha: 0, y: 6 });

    // 2) Timeline
    const tl = gsap.timeline({ defaults: { ease: 'power2.out', duration: 0.8 } });

    tl.from("#ledding-animation-container", { opacity: 0, scale: 0.98, duration: 1.0 })
        .from("#hello", { y: 20, opacity: 0 }, "-=0.5")
        .from("#name",  { y: 10, opacity: 0, filter: "blur(6px)" }, "-=0.4")
        .to(intro,      { autoAlpha: 1, y: 0 }, "-=0.4")
        .to(badges,     { autoAlpha: 1, y: 0, stagger: 0.06 }, "-=0.45")
        .to(ctas,       { autoAlpha: 1, y: 0, stagger: 0.08 }, "-=0.4")
        .to(qnav,       { autoAlpha: 1, y: 0, stagger: 0.05 }, "-=0.45");

    // “Respiración” sutil
    gsap.to("#ledding-animation-container", {
        scale: 1.01, rotate: 0.2, transformOrigin: "50% 50%",
        duration: 6, yoyo: true, repeat: -1, ease: "sine.inOut"
    });

    // Micro-hover CTAs
    document.querySelectorAll("[data-cta]").forEach(el => {
        el.addEventListener("mouseenter", () => gsap.to(el, { y: -2, duration: 0.18, ease: "power2.out" }));
        el.addEventListener("mouseleave", () => gsap.to(el, { y: 0,  duration: 0.18, ease: "power2.out" }));
    });

  // Viñeta opcional
    const vignette = document.getElementById("hero-vignette");
    if (vignette) gsap.fromTo(vignette, { opacity: 0 }, { opacity: 1, duration: 0.6, ease: "power2.out", delay: 0.2 });
    new Ledding('#ledding-animation-container', {
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
            scroll: {
                direction: Direction.TO_LEFT,
                speed: 15,
            },
            ignition: {
                pattern: Pattern.CASCADE,
                direction: Direction.TO_BOTTOM,
                delay: 0.5,
            },
            extinction: {
                pattern: Pattern.CASCADE,
                delay: 1.1,
                direction: Direction.TO_TOP,
                step: 8
            }
        },
        transitions: {
            ignition: { min: 0.05, randomize: false },
            extinction: { min: 0.1, randomize: false },
            morph: { min: 0.1, randomize: false }
        },
        grid:{
            fill: true,
            lifespan: 60,
        }
    });

});
