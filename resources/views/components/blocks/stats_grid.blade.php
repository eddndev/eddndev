<div class="grid grid-cols-2 md:grid-cols-4 gap-8 border-y border-white/10 py-12">
    @foreach($data as $stat)
        <div class="text-center md:text-left">
            <div class="text-4xl lg:text-5xl font-black text-white mb-2 tracking-tighter">{{ $stat['value'] }}</div>
            <div class="text-xs font-mono text-[var(--project-color)] uppercase tracking-widest">{{ $stat['label'] }}</div>
        </div>
    @endforeach
</div>