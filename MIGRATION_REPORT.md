# Reporte de Transición: Laravel a Astro

**Fecha:** 17 de enero de 2026
**Objetivo:** Migrar un portafolio de alto rendimiento basado en Laravel a una arquitectura estática/híbrida con Astro, preservando las interacciones complejas (GSAP/Lenis) y el sistema de gestión de contenido.

---

## 1. Arquitectura y Código Base

**🟢 Estado Actual (Laravel):**
*   **Backend:** Laravel tradicional. Los proyectos se gestionan vía base de datos (`projects` table) con un campo `blocks` (JSON) que define la estructura del contenido (similar a un Page Builder).
*   **Frontend:** Blade Templates + Alpine.js.
*   **Interactividad:** Fuerte dependencia de **GSAP** (ScrollTrigger) y **Lenis** para smooth scroll. La lógica de inicialización reside en `resources/js/app.js` cargando módulos específicos (`hero.js`, `vignette.js`, `cursor.js`).
*   **Estilos:** Tailwind CSS (inferido por el uso de `app.css` y clases utilitarias en componentes).

**🟠 Estado Nuevo (Astro):**
*   **Ubicación:** `/astro-app/` (Monorepo híbrido temporal).
*   **Stack:** Astro 5 + Tailwind 4 (Vite) + GSAP + Lenis.
*   **Contenido:** Migración de Base de Datos MySQL a **Astro Content Collections** (`src/content/work`).
    *   *Schema definido:* `title`, `year`, `category`, `color`, `stack`, `links`, etc.
*   **Estructura:** Se está replicando la estructura de carpetas de Laravel en Astro:
    *   `resources/views/components` ➝ `src/components`
    *   `resources/js` ➝ `src/scripts`

## 2. Principios de Diseño y UX

El sitio se basa en una experiencia inmersiva "High-End":
*   **Movimiento como Lenguaje:** No es solo decoración. El uso de librerías como `ledding` (probablemente una librería interna o personalizada) y módulos como `ledding-hero`, `focus` y `micro` sugieren que las micro-interacciones guían al usuario.
*   **Diseño Modular (Blocks):** Los casos de estudio ("Projects") no son texto plano. Se construyen mediante bloques visuales (`code-comparison`, `image-full`, `stats-grid`). Esto ya está modelado en Laravel y debe portarse 1:1 a componentes Astro.
*   **Tipografía y Ritmo:** El uso de Lenis indica que el ritmo del scroll es crítico para la narrativa visual.

## 3. Progreso de la Migración

| Área | Estado | Observaciones |
| :--- | :--- | :--- |
| **Configuración** | ✅ Completo | Astro 5, Tailwind 4 y dependencias instaladas. |
| **Rutas** | 🟡 En Progreso | `index.astro` y carpeta `work/` creadas. Faltan páginas de detalle. |
| **Contenido** | 🟡 En Progreso | Configuración de colecciones lista (`config.ts`). Falta migrar los datos reales de `projects` (DB) a archivos Markdown/MDX. |
| **Componentes** | 🟡 En Progreso | Estructura de carpetas lista (`blocks`, `layout`). Falta portar la lógica de Blade a `.astro`. |
| **Scripts/JS** | 🟡 En Progreso | Archivos copiados a `src/scripts`. Necesitan refactorización para funcionar con el ciclo de vida de Astro (View Transitions). |

---

## 🚀 Siguientes Pasos Recomendados

1.  **Migración de Componentes UI:** Portar los componentes de `resources/views/components/blocks/` a `astro-app/src/components/blocks/`. Estos son críticos para renderizar los proyectos.
2.  **Adaptación de Scripts:** Asegurar que la inicialización en `app.js` (GSAP/Lenis) sea compatible con la navegación de Astro (especialmente si usas `ViewTransitions`, los scripts deben reinicializarse al cambiar de página).
3.  **Extracción de Datos:** Script para exportar los proyectos de la base de datos de Laravel a archivos `.mdx` en `astro-app/src/content/work/`.
