@extends('layouts.app')

@section('title', 'Perfil - edd n\'dev')

@section('content')
<section class="bg-[#020202] min-h-screen text-white pt-24 pb-20 relative overflow-hidden">
    
    <!-- Grid Background (Low opacity) -->
    <div class="absolute inset-0 z-0 pointer-events-none" 
         style="background-image: linear-gradient(to right, #1a1a1a 1px, transparent 1px), linear-gradient(to bottom, #1a1a1a 1px, transparent 1px); background-size: 40px 40px; opacity: 0.3;">
    </div>

    <div class="max-w-[1600px] mx-auto px-6 sm:px-12 relative z-10 h-full">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 xl:gap-24 h-full">
            
            <!-- LEFT COLUMN: HARDWARE ID (3 Cols) -->
            <div class="lg:col-span-4 flex flex-col gap-8 order-last lg:order-first">
                
                <!-- RASTER IMAGE CARD -->
                <div class="relative w-full aspect-[3/4] border border-white/10 bg-[#050505] p-2 group">
                    <!-- Corner Accents -->
                    <div class="absolute top-0 left-0 w-4 h-4 border-t border-l border-white/50"></div>
                    <div class="absolute top-0 right-0 w-4 h-4 border-t border-r border-white/50"></div>
                    <div class="absolute bottom-0 left-0 w-4 h-4 border-b border-l border-white/50"></div>
                    <div class="absolute bottom-0 right-0 w-4 h-4 border-b border-r border-white/50"></div>

                    <!-- Image Container -->
                    <div class="relative w-full h-full overflow-hidden bg-gray-800 grayscale group-hover:grayscale-0 transition-all duration-700">
                        
                        <!-- Real Image (Spatie Optimized) -->
                        <img src="{{ function_exists('get_logo_image') ? get_logo_image('profile.jpg', ['w' => 500, 'format' => 'webp']) : asset('images/profile.jpg') }}" 
                             alt="Eduardo Alonso" 
                             class="w-full h-full object-cover object-top mix-blend-luminosity opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700"
                             onerror="this.src='https://ui-avatars.com/api/?name=Eduardo+Alonso&background=111&color=fff&size=512&bold=true'">

                        <!-- THE RASTER OVERLAY (CSS Halftone) -->
                        <div class="absolute inset-0 z-20 pointer-events-none mix-blend-hard-light group-hover:opacity-20 transition-opacity duration-700"
                             style="background-image: radial-gradient(circle, #000 1.5px, transparent 2px); background-size: 4px 4px;">
                        </div>
                        
                        <!-- Scanline -->
                        <div class="absolute inset-0 z-30 bg-gradient-to-b from-transparent via-white/5 to-transparent h-[10%] w-full animate-[scan_4s_linear_infinite] pointer-events-none"></div>
                    </div>

                    <!-- ID Label -->
                    <div class="absolute bottom-6 left-6 z-40 bg-black/80 backdrop-blur border border-white/10 px-3 py-1">
                        <span class="font-mono text-[10px] tracking-widest text-[#8b5cf6]">ID: EDDN_01</span>
                    </div>
                </div>

                <!-- DATA BLOCKS -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="border border-white/10 p-4 bg-[#050505]">
                        <div class="text-[9px] font-mono text-gray-500 mb-1">STATUS</div>
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span>
                            <span class="font-mono text-xs font-bold">ONLINE</span>
                        </div>
                    </div>
                    <div class="border border-white/10 p-4 bg-[#050505]">
                         <div class="text-[9px] font-mono text-gray-500 mb-1">LOC</div>
                         <div class="font-mono text-xs font-bold">CDMX, MX</div>
                    </div>
                    <div class="border border-white/10 p-4 bg-[#050505] col-span-2">
                         <div class="text-[9px] font-mono text-gray-500 mb-1">ROLE</div>
                         <div class="font-mono text-xs font-bold text-white">FULL STACK ENGINEER</div>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN: SOFTWARE KERNEL (8 Cols) -->
            <div class="lg:col-span-8 flex flex-col">
                
                <!-- Header -->
                <div class="mb-12 border-b border-white/10 pb-8">
                    <h1 class="text-6xl lg:text-8xl font-black tracking-tighter text-white mb-4">
                        EDUARDO <span class="text-[#8b5cf6]">.</span>
                    </h1>
                    <p class="text-xl text-gray-400 max-w-2xl font-light leading-relaxed">
                        Ingeniero de software obsesionado con la arquitectura de sistemas, el rendimiento extremo y la estética funcional.
                    </p>
                </div>

                <!-- Manifesto -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
                    <div>
                        <h3 class="font-mono text-xs text-[#8b5cf6] tracking-widest mb-4">[ PHILOSOPHY ]</h3>
                        <p class="text-sm text-gray-300 leading-7">
                            No escribo código, diseño soluciones. Creo que la belleza del software reside en su invisibilidad: cuando funciona tan rápido y fluido que el usuario olvida que está interactuando con una máquina.
                        </p>
                    </div>
                    <div>
                        <h3 class="font-mono text-xs text-[#8b5cf6] tracking-widest mb-4">[ OBJECTIVE ]</h3>
                        <p class="text-sm text-gray-300 leading-7">
                            Construir ecosistemas digitales que resistan el paso del tiempo. Me especializo en cerrar la brecha entre el diseño visual de alta fidelidad y la ingeniería backend robusta.
                        </p>
                    </div>
                </div>

                <!-- STACK GRID (Periodic Table) -->
                <div>
                    <div class="flex items-center justify-between mb-6 border-b border-white/10 pb-2">
                         <h3 class="font-mono text-xs text-gray-500 tracking-widest">[ KERNEL_MODULES ]</h3>
                         <span class="font-mono text-[10px] text-gray-600">SYS.V.2.0</span>
                    </div>
                    
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-2">
                        @foreach([
                            'LARAVEL' => ['cat' => 'BACKEND', 'icon' => 'laravel'],
                            'RUST' => ['cat' => 'SYSTEM', 'icon' => 'rust'],
                            'ASTRO' => ['cat' => 'FRONT', 'icon' => 'astro'],
                            'TAILWIND' => ['cat' => 'STYLE', 'icon' => 'tailwind'],
                            'GSAP' => ['cat' => 'ANIM', 'icon' => 'gsap']
                        ] as $tech => $data)
                        <div class="group relative border border-white/10 bg-[#080808] h-24 p-3 flex flex-col justify-between hover:bg-[#8b5cf6] hover:border-[#8b5cf6] transition-colors duration-200 cursor-default">
                            
                            <div class="flex justify-between items-start">
                                <span class="font-mono text-[9px] text-gray-600 group-hover:text-black/60 tracking-widest">{{ $data['cat'] }}</span>
                                <!-- SVG ICON -->
                                <svg class="w-5 h-5 text-gray-500 group-hover:text-white transition-colors duration-200">
                                    <use href="#icon-{{ $data['icon'] }}"></use>
                                </svg>
                            </div>

                            <span class="font-mono text-xs font-bold text-gray-300 group-hover:text-white self-start">{{ $tech }}</span>
                            
                            <!-- Tiny Corner Decorator -->
                            <div class="absolute top-1 right-1 w-1 h-1 bg-white/10 group-hover:bg-white"></div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<style>
@keyframes scan {
    0% { transform: translateY(-100%); opacity: 0; }
    50% { opacity: 1; }
    100% { transform: translateY(100%); opacity: 0; }
}
</style>
@endsection