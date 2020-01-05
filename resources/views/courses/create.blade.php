@extends('app')

@section('title', 'Create a course')

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
            <h1 class="text-2xl font-medium mb-2">Create a new course</h1>
            <p class="font-medium text-sm text-gray-500 mb-8 uppercase tracking-wide">new course for your students</p>
            <form action="{{ route('courses.create') }}" method="POST" class="clearfix">
                @csrf
                <label for="name" class="text-sm text-gray-700 mt-8">Name of Course</label>
                <input class="wt-input" type="text" name="name" value="{{ old('name')}}">
                <hr class="border-gray-200 border-t my-8">
                <label for="name" class="text-sm text-gray-700">Subdomain</label>
                <input class="wt-input" type="text" name="subdomain" value="{{ old('subdomain')}}">
                <hr class="border-gray-200 border-t my-8">
                <label for="name" class="text-sm text-gray-700">Headline</label>
                <input class="wt-input" type="text" name="headline" value="{{ old('headline')}}">
                <hr class="border-gray-200 border-t my-8">
                <label for="name" class="text-sm text-gray-700">Primary Color</label>
                <select name="primary_color" class="wt-input">
                    <option value="indigo">Indigo</option>
                    <option value="pink">Pink</option>
                    <option value="teal">Teal</option>
                    <option value="orange">Orange</option>
                    <option value="blue">Blue</option>
                </select>
                <button class="wt-button mt-4" type="submit">Create a course</button>
            </form>
        </div>
    </div>
</div>

@endsection