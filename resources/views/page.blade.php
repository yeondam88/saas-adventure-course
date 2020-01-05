@extends('app')

@section('title', 'Privacy')

@section('content')

@include('partials.nav')

<div class="container mx-auto lg:max-w-4xl px-5 pt-40">
    <h1 class="font-bold text-4xl mb-4">{{ $page->title }}</h1>
    <div class="bg-white px-8 py-6 border-t-4 border-indigo-500 page">
        {!! $page->body !!}
    </div>
</div>
@endsection