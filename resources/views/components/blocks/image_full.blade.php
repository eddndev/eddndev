@php
    $src = $data['src'];
    $alt = $data['alt'] ?? '';
    $caption = $data['caption'] ?? null;
    
    $mediaItem = null;
    $srcs = ['avif' => '', 'webp' => '', 'fallback' => ''];

    // Intento de resolución vía Spatie Media Library
    if (isset($project) && !str_contains($src, '/')) {
        $mediaItem = $project->getMedia('content')->filter(function($m) use ($src) {
            return str_contains($m->file_name, $src);
        })->first();
    }

    if ($mediaItem) {
        // Usamos las conversiones generadas o la imagen responsive base
        // Nota: Si no se generaron conversiones explícitas 'avif_opt', Spatie usa el responsive del original.
        // Para simplificar, usaremos el responsive image generator de Spatie si está disponible.
        
        try {
            $srcs['fallback'] = $mediaItem->getUrl();
            $srcs['webp'] = $mediaItem->getSrcset('optimized');
            $srcs['avif'] = $mediaItem->getSrcset('avif_opt');
        } catch (\Exception $e) {
            // Fallback si las conversiones no existen aún
            $srcs['fallback'] = $mediaItem->getUrl();
        }
    } else {
        // Fallback local (legacy path)
        $srcs['fallback'] = str_starts_with($src, 'http') ? $src : asset($src);
    }
@endphp

<div class="space-y-4">
    <div class="relative w-full rounded-sm overflow-hidden border border-white/10 bg-[#111] group">
        
        @if($mediaItem)
            {{-- Usamos el componente responsive, pasando los srcsets manualmente --}}
            <picture class="block w-full h-auto">
                @if($srcs['avif']) <source type="image/avif" srcset="{{ $srcs['avif'] }}" sizes="100vw"> @endif
                @if($srcs['webp']) <source type="image/webp" srcset="{{ $srcs['webp'] }}" sizes="100vw"> @endif
                <img 
                    src="{{ $srcs['fallback'] }}" 
                    alt="{{ $alt }}" 
                    class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-[1.01]"
                    loading="lazy" 
                    decoding="async"
                >
            </picture>
        @else
            {{-- Placeholder o Local --}}
             @if(str_contains($src, 'placeholder') || !file_exists(public_path($src)) && !str_starts_with($src, 'http'))
                 <div class="aspect-video w-full bg-gradient-to-br from-gray-900 to-black flex items-center justify-center">
                    <span class="font-mono text-xs text-gray-600">[ IMAGE NOT FOUND: {{ $src }} ]</span>
                 </div>
            @else
                <img src="{{ $srcs['fallback'] }}" alt="{{ $alt }}" class="w-full h-auto object-cover" loading="lazy">
            @endif
        @endif

        <!-- Scanline effect overlay on image -->
        <div class="absolute inset-0 bg-[url('/resources/images/scanline.png')] opacity-10 pointer-events-none mix-blend-overlay"></div>
    </div>

    @if($caption)
        <figcaption class="flex items-center justify-end gap-3 text-xs font-mono text-gray-500">
            <span class="h-px w-8 bg-white/20"></span>
            {{ $caption }}
        </figcaption>
    @endif
</div>