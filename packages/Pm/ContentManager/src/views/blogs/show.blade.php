<x-contentmanager::layout>
    <div class="max-w-3xl mx-auto">
        <h1 class="text-4xl font-bold mb-2">{{ $blog->title }}</h1>
        <p class="text-sm text-gray-500 mb-6">
            Gepubliceerd op {{ $blog->published_at->format('d-m-Y') }}
        </p>
        <div class="prose max-w-none">
            {!! \Illuminate\Support\Str::markdown($blog->content) !!}
        </div>
    </div>
</x-contentmanager::layout>
