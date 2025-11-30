@extends('layouts.app')

@section('title', 'Work Archive — EDDN.DEV')

@section('content')
<section class="bg-[#020202] min-h-screen text-white pt-32 pb-20 relative overflow-hidden">
    
    <!-- Background Grid (Sutil) -->
    <div class="absolute inset-0 z-0 opacity-20 pointer-events-none" 
         style="background-image: linear-gradient(to right, #333 1px, transparent 1px), linear-gradient(to bottom, #333 1px, transparent 1px); background-size: 60px 60px;">
    </div>

    <div class="max-w-[1800px] mx-auto relative z-10">
        
        <!-- Header Section -->
        <header class="mb-24 lg:mb-32 border-b border-white/10 pb-12 px-6 sm:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-end">
                
                <!-- Title -->
                <div class="lg:col-span-8">
                    <div class="flex items-center gap-4 mb-6 text-xs font-mono text-gray-500 tracking-widest">
                        <span class="w-2 h-2 bg-[#8b5cf6] rounded-full animate-pulse"></span>
                        SYSTEM_STATUS: ONLINE
                    </div>
                    <h1 class="text-[12vw] lg:text-[8rem] font-black leading-[0.8] tracking-tighter text-white mix-blend-normal">
                        WORK <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-500 to-gray-800">ARCHIVE.</span>
                    </h1>
                </div>

                <!-- Meta Info -->
                <div class="lg:col-span-4 flex flex-col justify-end h-full pb-4">
                    <p class="text-gray-400 text-sm font-mono max-w-md leading-relaxed border-l border-white/20 pl-6">
                        // INDEX OF SELECTED PROJECTS <br>
                        Una colección de implementaciones de ingeniería, sistemas de diseño y experimentos creativos.
                    </p>
                </div>
            </div>
        </header>

        <!-- The Manifest Grid -->
        <div>
             @if($projects->count() > 0)
                <x-work.manifest :projects="$projects" />
            @else
                <div class="py-24 text-center border-b border-white/10">
                    <p class="font-mono text-gray-600">[ DATABASE EMPTY ]</p>
                </div>
            @endif
        </div>

    </div>
</section>
@endsection