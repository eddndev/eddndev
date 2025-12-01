<section id="work" class="bg-black text-white border-t border-white/10 relative overflow-hidden">
    <!-- Structural Grid -->
    <div class="absolute inset-0 pointer-events-none select-none max-w-[1800px] mx-auto px-6 sm:px-12">
        <!-- Vertical line aligned with previous sections (approx 41%) -->
        <div class="hidden lg:block absolute left-[41.666667%] top-0 bottom-0 w-px bg-white/10 origin-top transform scale-y-0" data-line-vertical></div>
    </div>

    <div class="mx-auto max-w-[1800px] relative z-10">
        <!-- Header -->
        <div class="px-6 sm:px-12 py-24 lg:pt-32 lg:pb-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <div class="lg:col-span-5">
                    <div class="text-xs font-mono text-purple-400 tracking-widest mb-4 reveal-text">
                        [ 04 · INDEX ]
                    </div>
                    <h2 class="text-4xl lg:text-6xl font-black tracking-tighter leading-[0.9] reveal-text">
                        CASOS DE <br> <span class="text-purple-400">ESTUDIO.</span>
                    </h2>
                </div>
            </div>
        </div>

        <!-- Manifest Grid Component -->
        @if(isset($projects) && $projects->count() > 0)
            <x-work.manifest :projects="$projects" />
        @else
            <div class="px-6 sm:px-12 py-12 text-gray-500 font-mono text-sm border-t border-white/10">
                // NO DATA FOUND IN SECTOR [PROJECTS]
            </div>
        @endif

    </div>
</section>