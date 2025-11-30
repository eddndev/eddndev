@extends('layouts.app')

@section('title', $project->title . ' — Case Study')

@section('content')
<!-- Dynamic Style -->
<style>
    :root {
        --project-color: {{ $project->color }};
    }
</style>

<!-- BLUEPRINT HERO -->
<header class="relative w-full min-h-screen flex flex-col justify-between bg-[#020202] overflow-hidden border-b border-white/10 project-hero-container group">
    
    <!-- 1. Dynamic Background & Ledding -->
    <div id="ledding-project-container" class="absolute inset-0 z-0 opacity-40 mix-blend-screen pointer-events-none"></div>
    
    <!-- Decorators: Corners & Crosshairs -->
    <div class="absolute top-0 left-0 w-8 h-8 border-t border-l border-[var(--project-color)] opacity-50 z-10"></div>
    <div class="absolute top-0 right-0 w-8 h-8 border-t border-r border-[var(--project-color)] opacity-50 z-10"></div>
    <div class="absolute bottom-20 left-0 w-full h-px bg-gradient-to-r from-transparent via-[var(--project-color)] to-transparent opacity-20 z-10"></div>

    <!-- 3. Center: Massive Title -->
    <div class="flex-1 flex flex-col justify-center px-6 sm:px-12 relative z-10 py-12">
        <!-- Category Badge -->
        <div class="hero-meta-item mb-8 flex items-center gap-3 opacity-0">
            <span class="h-px w-12 bg-[var(--project-color)] shadow-[0_0_8px_var(--project-color)]"></span>
            <span class="text-xs font-mono text-[var(--project-color)] uppercase tracking-[0.2em] drop-shadow-[0_0_5px_var(--project-color)]">{{ $project->category }}</span>
        </div>

        <h1 class="hero-title text-[12vw] leading-[0.8] font-black tracking-tighter text-white select-none mix-blend-normal drop-shadow-[0_0_30px_rgba(var(--project-color-rgb),0.3)]">
            {{ strtoupper($project->title) }}<span class="text-[var(--project-color)] inline-block animate-pulse drop-shadow-[0_0_15px_var(--project-color)]">.</span>
        </h1>
        
        <!-- Abstract / Intro -->
        <div class="mt-16 grid grid-cols-1 lg:grid-cols-12 gap-12">
            <div class="lg:col-span-6 lg:col-start-1 hero-meta-item opacity-0">
                <div class="relative bg-[#080808]/80 backdrop-blur-md border border-white/10 p-6 sm:p-8 group hover:border-[var(--project-color)]/30 transition-colors duration-500">
                    <!-- Decorator: Top accent line -->
                    <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-[var(--project-color)] via-transparent to-transparent opacity-80"></div>
                    
                    <!-- Header: Label + Dots -->
                    <div class="flex justify-between items-center mb-6">
                        <span class="text-[10px] font-mono text-[var(--project-color)] tracking-widest uppercase border border-[var(--project-color)]/20 px-2 py-1 bg-[var(--project-color)]/5">
                            // BRIEFING
                        </span>
                        <div class="flex gap-1.5 opacity-30">
                             <div class="w-1 h-1 bg-white"></div>
                             <div class="w-1 h-1 bg-white"></div>
                             <div class="w-1 h-1 bg-white"></div>
                        </div>
                    </div>

                    <!-- Content -->
                    <p class="text-lg md:text-xl text-gray-200 font-light leading-relaxed font-sans">
                        {{ $project->description }}
                        <span class="inline-block w-2.5 h-5 bg-[var(--project-color)] align-middle animate-[pulse_1s_steps(2)_infinite] ml-1"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

    <!-- 4. Bottom Bar: Specs Grid (Reinstated & Styled) -->
    <div class="grid grid-cols-2 md:grid-cols-4 border-t border-white/10 divide-x divide-white/10 z-20 bg-[#050505]/95 backdrop-blur-xl">
        <div class="p-6 sm:p-8 group hover:bg-white/5 transition-colors hero-grid-item opacity-0 relative overflow-hidden">
            <div class="absolute inset-0 bg-[var(--project-color)] opacity-0 group-hover:opacity-5 transition-opacity"></div>
            <div class="text-[10px] font-mono text-[var(--project-color)] mb-2 tracking-widest uppercase font-bold">Timeline</div>
            <div class="text-xl font-bold text-white font-mono">{{ $project->year }}</div>
        </div>
        <div class="p-6 sm:p-8 group hover:bg-white/5 transition-colors hero-grid-item opacity-0 relative overflow-hidden">
            <div class="absolute inset-0 bg-[var(--project-color)] opacity-0 group-hover:opacity-5 transition-opacity"></div>
            <div class="text-[10px] font-mono text-[var(--project-color)] mb-2 tracking-widest uppercase font-bold">Role</div>
            <div class="text-xl font-bold text-white">Lead Engineer</div>
        </div>
        <!-- 3. Stack -->
        <div class="p-6 sm:p-8 col-span-2 md:col-span-2 group hover:bg-white/5 transition-colors hero-grid-item opacity-0 relative overflow-hidden">
            <div class="absolute inset-0 bg-[var(--project-color)] opacity-0 group-hover:opacity-5 transition-opacity"></div>
            <div class="text-[10px] font-mono text-[var(--project-color)] mb-3 tracking-widest uppercase font-bold">Core Stack</div>
            <div class="flex flex-wrap gap-2">
                @foreach($project->stack as $tech)
                    <span class="text-xs font-mono border border-white/20 bg-white/5 px-2 py-1 rounded text-gray-300 group-hover:border-[var(--project-color)] group-hover:text-white transition-colors shadow-[0_0_0_0_transparent] group-hover:shadow-[0_0_10px_var(--project-color)]">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
    </div>
</header>

<!-- ACCESS BAR (Attached to Hero) -->
@if(isset($project->links) && count($project->links) > 0)
<div class="relative z-20 bg-[#020202] border-b border-white/10">
    <div class="grid grid-cols-1 sm:grid-cols-{{ count($project->links) > 4 ? 4 : count($project->links) }} divide-y sm:divide-y-0 sm:divide-x divide-white/10">
        @foreach($project->links as $label => $url)
            <a href="{{ $url }}" target="_blank" class="group relative p-6 sm:p-8 flex items-center justify-between hover:bg-white/5 transition-colors">
                <!-- Hover Glow -->
                <div class="absolute inset-0 bg-[var(--project-color)] opacity-0 group-hover:opacity-5 transition-opacity"></div>
                
                <div class="flex items-center gap-4 relative z-10">
                    <div class="w-10 h-10 rounded-full border border-white/10 bg-white/5 flex items-center justify-center group-hover:border-[var(--project-color)] group-hover:text-[var(--project-color)] transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                    </div>
                    <div>
                        <div class="text-[10px] font-mono text-gray-500 uppercase tracking-widest group-hover:text-[var(--project-color)] transition-colors">RESOURCE</div>
                        <div class="text-lg font-bold text-white">{{ $label }}</div>
                    </div>
                </div>
                
                <!-- Arrow -->
                <svg class="w-5 h-5 text-gray-600 group-hover:text-white group-hover:translate-x-1 transition-all relative z-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
            </a>
        @endforeach
        
        <!-- Filler cells if needed for grid balance (optional, skipping for now to keep it tight) -->
    </div>
</div>
@endif

<!-- CONTENT STREAM -->
<main class="bg-[#050505] relative z-10 pb-32 min-h-screen">
    <!-- 1. Vertical Guides (Background) -->
    <div class="absolute inset-0 max-w-[1800px] mx-auto pointer-events-none px-6 sm:px-12">
        <!-- Outer Edge Lines -->
        <div class="absolute left-6 sm:left-12 top-0 bottom-0 w-px bg-white/5"></div>
        <div class="absolute right-6 sm:right-12 top-0 bottom-0 w-px bg-white/5"></div>

        <!-- Central Channel Lines (Matches max-w-4xl) -->
        <div class="hidden lg:block absolute left-1/2 -translate-x-1/2 w-full max-w-4xl h-full border-l border-r border-white/5"></div>
    </div>

    <!-- 2. Central Reading Column -->
    <div class="max-w-4xl mx-auto relative">
        
        @foreach($project->blocks as $index => $block)
            @if(view()->exists('components.blocks.' . $block['type']))
                <!-- Structural Block Wrapper -->
                <div class="relative py-24 px-6 sm:px-12 border-b border-white/5 reveal-block">
                    <!-- Decorators: Crosshairs at intersections -->
                    <!-- Top-Left -->
                    <div class="absolute -top-[5px] -left-[5px] w-2.5 h-2.5 text-white/20 flex items-center justify-center font-mono text-[10px] leading-none select-none hidden lg:flex">+</div>
                    <!-- Top-Right -->
                    <div class="absolute -top-[5px] -right-[5px] w-2.5 h-2.5 text-white/20 flex items-center justify-center font-mono text-[10px] leading-none select-none hidden lg:flex">+</div>
                    
                    <!-- Optional: Micro-label for block index -->
                    <div class="absolute top-6 right-0 translate-x-full pr-4 hidden xl:block">
                        <span class="text-[9px] font-mono text-gray-700 tracking-widest">BLK-{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    </div>

                    <!-- Component Render -->
                    @include('components.blocks.' . $block['type'], ['data' => $block['data'], 'project' => $project])
                </div>
            @else
                <div class="p-4 border border-red-900 bg-red-900/10 text-red-400 font-mono text-xs my-12 mx-6">
                    [MISSING COMPONENT: {{ $block['type'] }}]
                </div>
            @endif
        @endforeach

    </div>
</main>
@endsection