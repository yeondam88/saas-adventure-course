@extends('app')

@section('title', 'Announcements')

@section('content')

<div class="bg-gray-200 min-h-screen">
    @include('partials.dashboard-header')
    <div class="px-4">
        <div class="max-w-3xl mx-auto pt-8 text-indigo-500">
            <h1 class="text-2xl font-medium mb-2">Announcements</h1>
            @foreach($announcements as $announcement)
            <div class="max-w-3xl mx-auto mt-8">
                <div class="rounded-lg w-full px-8 py-6 bg-white shadow cursor-pointer border-transparent border-2 hover:border-indigo-500 clearfix"
                    onclick="window.location = '/announcement/{{ $announcement->id }}'">
                    <svg class="fill-current text-indigo-500 w-6 h-6 float-left mr-2" viewBox="0 0 20 20">
                        <path
                            d="M12.871,9.337H7.377c-0.304,0-0.549,0.246-0.549,0.549c0,0.303,0.246,0.55,0.549,0.55h5.494 c0.305,0,0.551-0.247,0.551-0.55C13.422,9.583,13.176,9.337,12.871,9.337z M15.07,6.04H5.179c-0.304,0-0.549,0.246-0.549,0.55 c0,0.303,0.246,0.549,0.549,0.549h9.891c0.303,0,0.549-0.247,0.549-0.549C15.619,6.286,15.373,6.04,15.07,6.04z M17.268,1.645 H2.981c-0.911,0-1.648,0.738-1.648,1.648v10.988c0,0.912,0.738,1.648,1.648,1.648h4.938l2.205,2.205l2.206-2.205h4.938 c0.91,0,1.648-0.736,1.648-1.648V3.293C18.916,2.382,18.178,1.645,17.268,1.645z M17.816,13.732c0,0.607-0.492,1.1-1.098,1.1 h-4.939l-1.655,1.654l-1.656-1.654H3.531c-0.607,0-1.099-0.492-1.099-1.1v-9.89c0-0.607,0.492-1.099,1.099-1.099h13.188 c0.605,0,1.098,0.492,1.098,1.099V13.732z">
                        </path>
                    </svg>
                    <h2 class="text-indigo-500 font-bold">{{ $announcement->title }}</h2>
                    <p class="mt-2 text-gray-600 text-sm">{{ $announcement->description }}</p>
                    <a href="/announcement/{{ $announcement->id }}"
                        class="underline float-right text-xs text-blue-600">Read More</a>
                </div>
            </div>
            @endforeach
            @if(count($announcements) < 1) 
                <div class="rounded-lg w-full px-8 py-6 bg-white">
                    <p class="text-gray-600 text-sm mt-4">You have no unread announcements</p>
                    <a href="{{ route('announcements') }}" class="underline text-sm text-blue-600">View all past announcements</a>
                </div>
            @endif
    </div>
</div>
</div>

@endsection