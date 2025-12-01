@props(['projects'])

<div class="w-full border-t border-white/10">
    @foreach($projects as $index => $project)
        <!-- Dynamic CSS Variables for specific row color -->
        <a href="{{ route('projects.show', $project) }}" 
           data-cursor-text="VER CASO"
           class="group relative w-full flex flex-col md:flex-row items-baseline md:items-center py-12 px-6 sm:px-12 border-b border-white/10 overflow-hidden bg-[#020202] transition-colors duration-500 hover:bg-[#050505]"
           style="--project-color: {{ $project->color ?? '#ffffff' }};">
            
            <!-- 1. Ghost Image Layer (The Manifest Reveal) -->
            <div class="absolute inset-0 z-0 pointer-events-none opacity-10 group-hover:opacity-30 transition-opacity duration-700 ease-out mix-blend-luminosity">
                 @if($project->getFirstMediaUrl('content'))
                    <img src="{{ $project->getFirstMediaUrl('content') }}" 
                         alt="{{ $project->title }} background" 
                         class="w-full h-full object-cover object-center scale-110 group-hover:scale-100 transition-transform duration-[1.5s] ease-out"
                         loading="lazy">
                 @endif
            </div>

            <!-- 2. Color Wash Layer -->
            <div class="absolute inset-0 z-0 bg-[var(--project-color)] opacity-0 group-hover:opacity-10 mix-blend-screen transition-opacity duration-500 pointer-events-none"></div>

            <!-- 3. Content Layer -->
            <div class="relative z-10 w-full grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-8 items-baseline">
                
                <!-- ID Column -->
                <div class="md:col-span-1 flex items-center">
                    <span class="font-mono text-xs font-bold text-[var(--project-color)] tracking-widest">
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>
                </div>

                <!-- Title Column -->
                <div class="md:col-span-4">
                    <h3 class="text-4xl md:text-3xl lg:text-6xl font-black text-white tracking-tighter group-hover:translate-x-2 transition-transform duration-500">
                        {{ strtoupper($project->title) }}
                    </h3>
                </div>

                <!-- Tech Stack -->
                <div class="md:col-span-5 flex flex-wrap gap-2 md:justify-end">
                    @if($project->stack)
                        @foreach(array_slice($project->stack, 0, 3) as $tech)
                            <span class="font-mono text-xs uppercase tracking-wider border border-white/30 bg-white/5 px-3 py-1 rounded-full text-gray-300 group-hover:border-[var(--project-color)] group-hover:text-[var(--project-color)] transition-colors">
                                {{ $tech }}
                            </span>
                        @endforeach
                    @endif
                </div>

                <!-- Status / Year & Arrow -->
                <div class="md:col-span-2 flex items-center justify-end gap-4">
                    <span class="font-mono text-sm font-bold text-gray-400 group-hover:text-white transition-colors hidden sm:inline-block">
                        {{ $project->year }}
                    </span>
                    
                    <!-- Call To Action -->
                    <div class="flex items-center gap-3">
                        <span class="font-mono text-xs font-bold text-white/60 uppercase tracking-wider group-hover:text-[var(--project-color)] transition-colors duration-300 hidden md:block">
                            Ver Caso
                        </span>
                        <!-- Arrow Icon -->
                        <div class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center bg-white/5 group-hover:bg-[var(--project-color)] group-hover:border-[var(--project-color)] transition-all duration-300 group-hover:rotate-[-45deg]">
                            <svg class="w-4 h-4 text-gray-200 group-hover:text-black transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Konpo Decorators (Crosshairs) -->
            <div class="absolute bottom-0 left-6 sm:left-12 w-px h-4 bg-white/20 hidden md:block"></div>
            <div class="absolute bottom-0 right-6 sm:right-12 w-px h-4 bg-white/20 hidden md:block"></div>
        </a>
    @endforeach
</div>