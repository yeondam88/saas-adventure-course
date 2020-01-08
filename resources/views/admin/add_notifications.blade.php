@extends('app')

@section('title', 'Create a course')

@section('content')

<div class="bg-gray-200 min-h-screen">
    @include('partials.dashboard-header')

    <div class="flex container mx-auto">
        @include('partials.dashboard-nav')
        <div class="w-full bg-white rounded-lg mx-auto my-8 px-10 py-8">
            <h1 class="text-2xl font-medium mb-2">Create a new notification</h1>
            <p class="font-medium text-sm text-gray-500 mb-8 uppercase tracking-wide">new notifications for your users
            </p>
            <form action="{{ route('admin.create_notification') }}" method="POST" class="clearfix">
                @csrf
                <label for="title" class="text-sm text-gray-700 mt-8">Title</label>
                <input class="wt-input" type="text" name="title" value="{{ old('title')}}">
                <hr class="border-gray-200 border-t my-8">
                <label for="description" class="text-sm text-gray-700">Description</label>
                <input class="wt-input" type="text" name="description" value="{{ old('description')}}">
                <hr class="border-gray-200 border-t my-8">
                <label for="body" class="text-sm text-gray-700">Body</label>
                <textarea class="wt-input" name="body" rows="10" cols="50"></textarea>
                <hr class="border-gray-200 border-t my-8">
                <button class="wt-button mt-4" type="submit">Create a notification</button>
            </form>
        </div>
    </div>
</div>

@endsection