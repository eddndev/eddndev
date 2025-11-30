<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::truncate(); // Limpiar tabla antes de sembrar

        // 1. ACHRONYME
        $achronyme = Project::create([
            'title' => 'Achronyme',
            'slug' => 'achronyme',
            'year' => '2024',
            'category' => 'Language Design',
            'description' => 'Lenguaje funcional para computación matemática y UI reactiva. VM basada en registros, sintaxis expresiva y rendimiento nativo en Rust.',
            'stack' => ['Rust', 'WebAssembly', 'VM Design', 'Compiler Theory'],
            'color' => '#8b5cf6', // Purple (User Requested)
            'hero_image' => 'bg-gradient-to-br from-purple-950 to-black',
            'featured' => true,
            'links' => [
                'Live Site' => 'https://achrony.me',
                'Documentation' => 'https://docs.achrony.me',
                'GitHub' => 'https://github.com/achronyme'
            ],
            'blocks' => [
                [
                    'type' => 'text_block',
                    'data' => [
                        'heading' => 'Matemáticas como Código',
                        'body' => 'Wolfram Mathematica es propietario y cerrado. Las alternativas open source carecen de expresividad o requieren entornos pesados. Achronyme nace de la necesidad de un lenguaje ligero, portable y diseñado específicamente para expresar matemáticas y construir interfaces reactivas sin el caos de los event listeners.',
                    ],
                ],
                [
                    'type' => 'image_full',
                    'data' => [
                        'src' => 'landing', // Referencia por nombre (sin extensión)
                        'alt' => 'Landing page de Achronyme mostrando el hero y la navegación.',
                        'caption' => 'Interfaz principal de la plataforma web.'
                    ]
                ],
                [
                    'type' => 'stats_grid',
                    'data' => [
                        ['value' => '800+', 'label' => 'Tests Unitarios'],
                        ['value' => '60fps', 'label' => 'Reactividad UI'],
                        ['value' => 'v0.6.6', 'label' => 'Versión Actual'],
                        ['value' => 'Rust', 'label' => 'Core Rewrite'],
                    ],
                ],
                [
                    'type' => 'code_comparison',
                    'data' => [
                        'heading' => 'El Modelo de Reactividad',
                        'description' => 'Sin callbacks. Sin observadores manuales. Defines la señal, y la UI reacciona automáticamente.',
                        'language' => 'soc', // Achronyme syntax
                        'code' => "let frequency = signal(1.0)\nlet amplitude = signal(0.5)\n\n// Operación vectorizada reactiva\nlet y = amplitude * sin(x * frequency + p)",
                        'caption' => 'Sintaxis nativa de Achronyme para una onda senoidal reactiva.'
                    ]
                ],
                [
                    'type' => 'text_block',
                    'data' => [
                        'heading' => 'Ingeniería Profunda: La Migración',
                        'body' => 'El proyecto comenzó en C++, pero la gestión de memoria manual se convirtió en un cuello de botella para la seguridad numérica. La reescritura total en Rust no fue solo una traducción: implicó rediseñar la Máquina Virtual (VM) de una arquitectura basada en pila (stack-based) a una basada en registros (register-based), desbloqueando un nuevo nivel de rendimiento y seguridad.',
                    ],
                ]
            ]
        ]);

        // Attach Media (Achronyme)
        $imagePath = resource_path('images/projects/achronyme/landing.png'); 
        
        if (file_exists($imagePath)) {
            $achronyme->clearMediaCollection('content');
            $achronyme->addMedia($imagePath)
                ->preservingOriginal()
                ->withResponsiveImages()
                ->toMediaCollection('content');
        }

        // 2. SYLE STUDIO
        $syle = Project::create([
            'title' => 'Syle Studio',
            'slug' => 'sylestudio',
            'year' => '2024',
            'category' => 'E-Commerce & Portfolio',
            'description' => 'Plataforma digital integral para un estudio creativo. E-commerce de streetwear, portafolio editorial y sistema de gestión a medida.',
            'stack' => ['Laravel', 'GSAP', 'Spatie Media Library', 'Custom Backoffice'],
            'color' => '#ffffff', // Monochrome / Editorial
            'hero_image' => 'bg-gradient-to-br from-gray-900 to-black',
            'featured' => true,
            'links' => [
                'Live Site' => 'https://sylestudio.com',
                'GitHub' => 'https://github.com/eddndev/sylestudio'
            ],
            'blocks' => [
                [
                    'type' => 'text_block',
                    'data' => [
                        'heading' => 'Independencia Digital',
                        'body' => "Las opciones eran claras: someterse a la homogeneidad de Shopify o construir bajo nuestros propios términos. Elegimos la libertad. Syle Studio no es solo una tienda; es una declaración de principios. Queríamos una plataforma que invitara a explorar el mundo del estudio —fotografía, eventos, comunidad— antes de pedir una transacción. Sin fees mensuales, sin plantillas genéricas.",
                    ],
                ],
                [
                    'type' => 'image_full',
                    'data' => [
                        'src' => 'hero.png', // Nombre original
                        'alt' => 'Hero de Syle Studio mostrando fotografía editorial de vitrales.',
                        'caption' => 'Estética cinematográfica como primer impacto.'
                    ]
                ],
                [
                    'type' => 'stats_grid',
                    'data' => [
                        ['value' => '100%', 'label' => 'Custom CMS'],
                        ['value' => '20MB->1MB', 'label' => 'Optimización'],
                        ['value' => '0%', 'label' => 'Platform Fees'],
                        ['value' => 'Editorial', 'label' => 'Enfoque Visual'],
                    ],
                ],
                [
                    'type' => 'text_block',
                    'data' => [
                        'heading' => 'Ingeniería de Performance',
                        'body' => "El desafío real no fue el e-commerce, fue el arte. Las galerías de eventos contienen docenas de imágenes de alta resolución que matarían el rendimiento de cualquier sitio estándar. \n\nImplementamos un pipeline de procesamiento asíncrono: cada imagen subida al backoffice se procesa en segundo plano mediante colas de trabajo (Jobs), generando versiones AVIF y WebP optimizadas. El resultado se sirve vía CDN, permitiendo una experiencia visual rica sin sacrificar la velocidad de carga.",
                    ],
                ],
                [
                    'type' => 'image_full',
                    'data' => [
                        'src' => 'navegacion.png',
                        'alt' => 'Grid de navegación principal del sitio.',
                        'caption' => 'Navegación inmersiva: Nosotros, Tienda, Proyectos.'
                    ]
                ],
                 [
                    'type' => 'image_full',
                    'data' => [
                        'src' => 'proyectos.png',
                        'alt' => 'Grid de proyectos creativos.',
                        'caption' => 'Galería de eventos y colecciones.'
                    ]
                ]
            ]
        ]);

        // Attach Media (Syle)
        $syleImages = ['hero.png', 'navegacion.png', 'proyectos.png', 'proyecto.png'];
        
        foreach ($syleImages as $image) {
            $path = resource_path("images/projects/syle/{$image}");
            if (file_exists($path)) {
                $syle->addMedia($path)
                    ->preservingOriginal()
                    ->withResponsiveImages()
                    ->toMediaCollection('content');
            }
        }

        // 3. YATAGARASU (WIP)
        $yatagarasu = Project::create([
            'title' => 'Yatagarasu',
            'slug' => 'yatagarasu',
            'year' => '2025',
            'category' => 'Game Dev Portfolio',
            'description' => 'Portafolio web para un desarrollador indie. Una experiencia retro-arcade construida con Astro que mimetiza la estética de los juegos desarrollados en Godot.',
            'stack' => ['Astro', 'CSS Modules', 'Godot', 'Pixel Art'],
            'color' => '#dc2626', // Crimson Red / Arcade
            'hero_image' => 'bg-black', // Placeholder if needed
            'featured' => true,
            'links' => [
                // 'Live Preview' => '#', // Optional for WIP
            ],
            'blocks' => [
                [
                    'type' => 'text_block',
                    'data' => [
                        'heading' => 'El Menú de Inicio',
                        'body' => "Yasu no necesitaba un sitio web corporativo; necesitaba una extensión de su universo creativo. Yatagarasu es un portafolio diseñado para sentirse como el menú de inicio de un juego retro. Construido sobre **Astro**, priorizamos la velocidad bruta y la ausencia de JavaScript innecesario, delegando la carga visual a un sistema de grids CSS que simula píxeles y scanlines CRT.",
                    ],
                ],
                [
                    'type' => 'image_full',
                    'data' => [
                        'src' => 'preview.png',
                        'alt' => 'Preview del portafolio Yatagarasu mostrando la silueta del cuervo en píxeles rojos.',
                        'caption' => 'Pixel Art generado proceduralmente con CSS Grid.'
                    ]
                ],
                [
                    'type' => 'stats_grid',
                    'data' => [
                        ['value' => 'WIP', 'label' => 'Status'],
                        ['value' => 'Astro', 'label' => 'Framework'],
                        ['value' => '0kb', 'label' => 'JS Runtime'],
                        ['value' => 'CRT', 'label' => 'Vibe'],
                    ],
                ],
                [
                    'type' => 'text_block',
                    'data' => [
                        'heading' => 'Coherencia Visual',
                        'body' => "El mayor desafío fue traducir la identidad 'low-res' de los juegos de Godot a la web moderna de alta resolución. En lugar de usar imágenes estáticas pesadas, creamos patrones de renderizado usando CSS nativo para dibujar la silueta del cuervo Yatagarasu, permitiendo que el sitio escale infinitamente sin perder su esencia pixelada.",
                    ],
                ]
            ]
        ]);

        // Attach Media (Yatagarasu)
        $yataPath = resource_path('images/projects/yatagarasu/preview.png');
        if (file_exists($yataPath)) {
            $yatagarasu->addMedia($yataPath)
                ->preservingOriginal()
                ->withResponsiveImages()
                ->toMediaCollection('content');
        }
    }
}