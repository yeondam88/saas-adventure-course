@extends('app')

@section('title', 'Courses')

@section('content')

<div class="bg-gray-200 min-h-screen">
    @include('partials.dashboard-header')

    @if(auth()->user()->onTrial())
    <div class="container rounded-lg mx-auto mt-8">
        @include('partials.trial_notification', ['action_btn' => true])
    </div>
    @endif

    <div class="flex container mx-auto">
        @include('partials.dashboard-nav')
        <div class="w-full bg-white rounded-lg mx-auto my-8 px-10 py-8">
            <div class="w-full flex justify-around items-center">
                <div class="w-full">
                    <h1 class="text-2xl font-medium mb-2">Courses</h1>
                    <h2 class="font-medium text-sm text-gray-500 mb-4 uppercase tracking-wide">View your courses</h2>
                </div>
                <div class="w-full">
                    <a href="{{ route('courses.create') }}" class="wt-button">Add course</a>
                </div>
            </div>
            @if (auth()->user()->courses->count() > 1)
            @foreach(auth()->user()->courses as $course)
            <div class="border border-gray-300 px-3 py-2 rounded flex justify-between my-4">
                <span class="font-bold text-indigo-500">{{ $course->name }}</span>
                <a href="{{ str_replace('https://', 'https://' . $course->subdomain . '.', url('/')) }}"
                    class="underline text-sm" target="_blank">Preview</a>
            </div>
            @endforeach
            @else
            <div class="text-left flex items-start">
                <a href="{{ route('courses.create') }}" class="wt-button">Create your First Course</a>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection