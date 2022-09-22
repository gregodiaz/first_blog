@extends('template')

@section('content')

<div class="container flex items-center p-4 mx-auto bg-gray-200 my-3">
    <div class="pb-2">
        <a href="{{ route('post', $post->slug) }}">
            <h1 class="font-bold text-3xl pb-2">
                {{ $post->title }}
            </h1>
        </a>

        <h2 class="text-xl font-medium text-gray-800 pb-4">
            {{ $post->content }}
        </h2>

        <div class="flex justify-between">
            <p class="text-xs font-bold"> {{ $post->user->name }} </p>
            <p class="text-xs justify-end"> {{ $post->created_at->format('d/m/y')}} </p>
        </div>
    </div>
</div>

@endsection
