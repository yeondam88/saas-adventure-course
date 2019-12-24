@extends('app')

@section('content')
@include('partials.nav')
<div class="flex h-screen bg-gray-200 p-4 rotate">
    <div class="sm:max-w-xl md:max-w-2xl w-full m-auto">

        @if (session('resent'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100  px-3 py-4 mb-4"
            role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
        @endif

        <div
            class="flex items-stretch bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-indigo-500 sm:border-0">

            <div class="flex hidden overflow-hidden relative sm:block w-5/12 md:w-6/12 bg-gray-600 text-gray-300 py-4 bg-cover bg-center"
                style="background-image: url('https://images.unsplash.com/photo-1477346611705-65d1883cee1e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')">
                <div class="flex-1 absolute bottom-0 text-white p-10">
                    <h3 class="text-2xl font-bold inline-block">Verification Needed</h3>
                    <p class="text-gray-500 whitespace-no-wrap">
                        Please Verify Your Email Address
                    </p>
                </div>
                <svg class="absolute animate h-full w-4/12 sm:w-2/12 right-0 inset-y-0 fill-current text-white"
                    viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <polygon points="0,0 100,100 100,0">
                </svg>
            </div>
            <div class="flex-1 p-6 sm:p-10 sm:py-12">
                <h3 class="text-xl text-gray-700 font-bold mb-2">Before proceeding,</h3>
                <p class="text-gray-700 mb-6">please check your email for a verification link.</p>

                <div class="flex flex-wrap items-center">
                    <div class="w-full sm:flex-1">
                        <form action="{{ route('verification.resend') }}" method="POST">
                            @csrf
                            <input type="submit" value="Resend verification email"
                                class="w-full sm:w-auto bg-indigo-500 text-indigo-100 px-6 py-2 rounded hover:bg-indigo-600 focus:outline-none cursor-pointer">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection