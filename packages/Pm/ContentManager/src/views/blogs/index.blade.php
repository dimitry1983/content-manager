<x-contentmanager::layout>
    <div class="max-w-3xl mx-auto">
        <h1 class="text-4xl font-bold mb-8">Blog</h1>

        <div class="space-y-8">
            @foreach ($posts as $post)
                <article>
                    <h2 class="text-2xl font-semibold mb-1">
                        <a href="{{ url('/blog/' . $post->slug) }}" class="text-blue-600 hover:underline">
                            {{ $post->title }}
                        </a>
                    </h2>
                    <p class="text-sm text-gray-500">
                        {{ $post->published_at->format('d-m-Y') }}
                    </p>
                </article>
            @endforeach
        </div>

        <div class="mt-10">
            {{ $posts->links() }}
        </div>
    </div>
</x-contentmanager::layout>
