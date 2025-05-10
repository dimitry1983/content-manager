<x-contentmanager::layout>
    <div class="max-w-3xl mx-auto">
        <h1 class="text-4xl font-bold mb-6">{{ $page->title }}</h1>
        <div class="prose max-w-none">
            {!! \Illuminate\Support\Str::markdown($page->content) !!}
        </div>
    </div>
</x-contentmanager::layout>
