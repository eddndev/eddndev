<div class="prose prose-invert max-w-none">
    @if(isset($data['heading']))
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6 tracking-tight">{{ $data['heading'] }}</h2>
    @endif
    
    @if(isset($data['body']))
        <div class="text-lg text-gray-400 leading-relaxed space-y-6">
            {!! nl2br(e($data['body'])) !!}
        </div>
    @endif
</div>