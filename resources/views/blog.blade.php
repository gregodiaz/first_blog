@extends('template')

@section('content')

@foreach($posts as $post)

<div class="container flex items-center p-4 mx-auto bg-gray-200 my-3">
    <a class="pb-2" href="{{ route('post', $post->slug) }}">
        <h1 class="font-bold text-2xl pb-2">
            {{ $post->title }}
        </h1>

        <h2 class="text-sm font-medium text-gray-600 pb-3">
            {{ substr($post->content, 0, 250)."..." }}
        </h2>

        <div class="flex justify-between">
            <p class="text-xs font-bold"> {{ $post->user->name }} </p>
            <p class="text-xs justify-end"> {{ $post->created_at->format('d/m/y')}} </p>
        </div>
    </a>
</div>

@endforeach

{{ $posts->links() }}

@endsection
