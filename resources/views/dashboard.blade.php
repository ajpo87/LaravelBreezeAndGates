<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           POSTS
        </h2>
    </x-slot>

    <div class="py-10">
        @foreach ($posts as $post)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-6 p-6 bg-white border-b border-gray-200 rounded-lg">
                <h3 class="text-lg font-medium text-gray-900">{{ $post->title }}</h3>
                <p class="mt-2 text-gray-600">{{ $post->body }}</p>
                <p class="mt-4 text-sm text-gray-500">Posted by: {{ $post->user->name }}</p>

            </div>

        @endforeach

    </div>
</x-app-layout>
