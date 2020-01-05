@extends('app')

@section('title', $announcement->title)

@section('content')

<div class="bg-gray-200 min-h-screen">
    @include('partials.dashboard-header')
    <div class="px-4">
        <div class="max-w-3xl mx-auto pt-8">
            <h1 class="text-2xl font-medium mb-2 text-indigo-500">{{ $announcement->title }}</h1>
            <a href="{{ route('announcements') }}" class="underline text-sm text-blue-600">< Go Back to All Announcements</a>       
            <div class="rounded-lg w-full px-8 py-6 bg-white mt-4">
                <p>{!! $announcement->body !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection