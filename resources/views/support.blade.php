@extends('app')

@section('title', 'Support')

@section('content')

<div class="bg-gray-200 min-h-screen">
    @include('partials.dashboard-header')
    <div class="px-4">
        <div class="max-w-3xl bg-white rounded-lg mx-auto my-16 px-16 py-12">
            <h1 class="text-2xl font-medium mb-2">Have a Support Questions?</h1>
            <p>Please leave a detailed description of your support inquiry.</p>
            <form action="{{ route('support.send') }}" method="POST" class="clearfix">
                @csrf
                <input class="wt-input" type="text" name="subject" placeholder="Subject" value="{{ old('subject')}}">
                <textarea class="wt-input" name="message" cols="30" rows="10" placeholder="Your Support Message"
                    value="{{ old('msg')}}"></textarea>
                <button class="wt-button mt-4" type="submit">Send Message</button>
            </form>
        </div>
    </div>
</div>

@endsection