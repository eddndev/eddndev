@props(['project' => null])

<header 
    x-data="{ mobileMenuOpen: false, scrolled: false }"
    x-init="$watch('mobileMenuOpen', value => document.body.classList.toggle('overflow-hidden', value))"
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'bg-[#020202] border-b border-white/10': scrolled || mobileMenuOpen, 'bg-transparent border-b border-transparent': !scrolled && !mobileMenuOpen }"
    class="fixed top-0 left-0 w-full h-16 z-50 transition-all duration-300"
>
    <!-- Inner Grid Container -->
    <div class="w-full max-w-[1800px] mx-auto h-full flex items-stretch relative z-50 bg-inherit">
        
        <!-- 1. Brand / Home Link -->
        <a href="{{ route('home') }}" 
           @click="mobileMenuOpen = false"
           class="group flex items-center pl-6 sm:pl-12 pr-6 border-r border-white/10 transition-colors relative"
           :class="{ 'bg-[#020202]': !scrolled && mobileMenuOpen, 'hover:bg-white/5': !mobileMenuOpen }"> 
            
            <x-media.logo 
                src="logo.png" 
                alt="EDDN.DEV" 
                class="h-6 w-auto object-contain" 
                :priority="true"
            />

            <!-- Crosshair Bottom Right -->
            <div class="absolute -bottom-[5px] -right-[5px] text-white/20 pointer-events-none">
                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 0V9M0 4.5H9" stroke="currentColor" stroke-width="1"/>
                </svg>
            </div>
        </a>

        <!-- 2. Context Bar (Desktop Only) -->
        <div class="hidden md:flex flex-1 items-center px-6 relative">
            @if($project)
                <div class="flex items-center gap-3">
                    <span class="text-xs font-mono text-gray-500 uppercase tracking-wider">Estudio de Caso</span>
                    <span class="text-white/20">/</span>
                    <span class="text-sm font-medium text-white">{{ $project->title }}</span>
                </div>
            @else
                <div class="flex items-center gap-2">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                    </span>
                    <span class="text-xs font-mono text-gray-400 uppercase tracking-wider">Disponible para proyectos</span>
                </div>
            @endif
        </div>

        <!-- 3. Global Nav (Desktop) -->
        <nav class="hidden md:flex h-full ml-auto">
            @foreach([
                ['label' => 'Proyectos', 'url' => route('work.index')],
                ['label' => 'Perfil', 'url' => route('profile.index')],
            ] as $index => $item)
                <a href="{{ $item['url'] }}" 
                   class="relative flex items-center px-8 text-xs font-mono uppercase tracking-widest text-gray-400 hover:text-white transition-colors border-l border-white/10 group h-full {{ $loop->last ? 'sm:pr-12' : '' }}">
                    {{ $item['label'] }}
                    <span class="absolute top-0 left-0 w-full h-[2px] bg-[#8b5cf6] scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                    
                    <div class="absolute -bottom-[5px] -left-[5px] text-white/20 pointer-events-none opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 0V9M0 4.5H9" stroke="currentColor" stroke-width="1"/>
                        </svg>
                    </div>
                </a>
            @endforeach
        </nav>

        <!-- 4. Mobile Trigger (The "System" Button) -->
        <button 
            @click="mobileMenuOpen = !mobileMenuOpen"
            class="md:hidden flex items-center justify-between px-6 w-40 border-l border-white/10 text-white hover:bg-white/5 transition-colors ml-auto relative overflow-hidden group"
        >
            <!-- Button Background Animation -->
            <div class="absolute inset-0 bg-white/0 group-hover:bg-white/5 transition-colors"></div>
            
            <!-- Text State -->
            <span class="font-mono text-[10px] uppercase tracking-widest text-gray-400 group-hover:text-white relative z-10">
                <span x-text="mobileMenuOpen ? 'CERRAR' : 'MENÚ'"></span>
            </span>

            <!-- Icon State -->
            <div class="relative z-10 w-6 h-6 flex items-center justify-center">
                <!-- Closed Icon: [ + ] -->
                <span x-show="!mobileMenuOpen" class="font-mono text-lg text-[#8b5cf6] transition-transform duration-300 group-hover:rotate-90">+</span>
                <!-- Open Icon: [ x ] -->
                <span x-show="mobileMenuOpen" class="font-mono text-lg text-red-500" style="display: none;">x</span>
            </div>
        </button>
    </div>

    <!-- 5. MOBILE "SYSTEM OVERRIDE" MENU -->
    <div 
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="fixed inset-0 top-16 bg-[#020202] z-40 flex flex-col md:hidden overflow-hidden border-t border-white/10"
        style="display: none;"
    >
        <!-- Grid Background -->
        <div class="absolute inset-0 z-0 opacity-20 pointer-events-none" 
             style="background-image: linear-gradient(to right, #333 1px, transparent 1px), linear-gradient(to bottom, #333 1px, transparent 1px); background-size: 40px 40px;">
        </div>

        <!-- Navigation Links -->
        <nav class="flex-1 flex flex-col relative z-10">
            @foreach([
                ['label' => 'Proyectos', 'sub' => 'Selección de casos', 'url' => route('work.index')],
                ['label' => 'Perfil', 'sub' => 'Acerca del estudio', 'url' => route('profile.index')],
            ] as $index => $item)
                <a href="{{ $item['url'] }}" 
                   @click="mobileMenuOpen = false"
                   class="group relative flex-1 border-b border-white/10 flex items-center px-8 transition-all duration-300 hover:bg-white/5"
                >
                    <!-- Hover Accent Bar -->
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#8b5cf6] scale-y-0 group-hover:scale-y-100 transition-transform duration-300"></div>

                    <div class="flex flex-col gap-1">
                        <!-- Index Number -->
                        <span class="font-mono text-[10px] text-[#8b5cf6] tracking-widest opacity-70 group-hover:opacity-100">
                            0{{ $index + 1 }} //
                        </span>
                        <!-- Label -->
                        <span class="font-sans font-black text-4xl text-white tracking-tight group-hover:translate-x-2 transition-transform duration-300">
                            {{ $item['label'] }}
                        </span>
                        <!-- Sublabel -->
                        <span class="font-mono text-xs text-gray-500 uppercase tracking-wider group-hover:text-gray-300 transition-colors">
                            {{ $item['sub'] }}
                        </span>
                    </div>

                    <!-- Arrow Icon -->
                    <svg class="ml-auto w-6 h-6 text-gray-600 group-hover:text-[#8b5cf6] group-hover:-rotate-45 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            @endforeach
        </nav>

        <!-- Footer Info (System Status) -->
        <div class="border-t border-white/10 p-8 bg-[#050505] relative z-10">
            <div class="grid grid-cols-2 gap-8">
                <div>
                    <div class="text-[10px] font-mono text-gray-500 uppercase tracking-widest mb-2">Status</div>
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                        <span class="text-sm text-white font-mono">ONLINE</span>
                    </div>
                </div>
                <div>
                    <div class="text-[10px] font-mono text-gray-500 uppercase tracking-widest mb-2">Location</div>
                    <div class="text-sm text-white font-mono">CDMX, MX</div>
                </div>
            </div>
        </div>
    </div>
</header>