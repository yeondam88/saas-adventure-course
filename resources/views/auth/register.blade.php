@extends('app')

@section('content')
@include('partials.nav')

<div class="flex h-screen bg-gray-200 p-4 rotate">
    <div class="sm:max-w-xl md:max-w-2xl w-full m-auto">
        @if (session('alert'))
        <div class="container mx-auto max-w-3xl mt-8 mb-8 alert">
            @php $alert_type = session('alert_type'); @endphp
            <div class="
    @if($alert_type == 'info'){{'bg-blue-400 border-l-4 border-blue-500'}}
    @elseif($alert_type == 'success'){{ 'bg-green-400 border-l-4 border-green-500' }}
    @elseif($alert_type == 'error'){{ 'bg-red-400 border-l-4 border-red-500' }}
    @elseif($alert_type == 'warning'){{ 'bg-orange-400 border-l-4 border-orange-500' }}
    @endif
    text-white p-4" role="alert">
                <p class="font-bold">{{ ucfirst(session('alert_type')) }}</p>
                <p>{{ session('alert') }}</p>
            </div>
            <p></p>
        </div>
        @endif
        <form method="POST" action="{{ route('register') }}"
            class="flex items-stretch bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-indigo-500 sm:border-0">
            @csrf
            <div class="flex hidden overflow-hidden relative sm:block w-5/12 md:w-6/12 bg-gray-600 text-gray-300 py-4 bg-cover bg-center"
                style="background-image: url('https://images.unsplash.com/photo-1477346611705-65d1883cee1e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')">
                <div class="flex-1 absolute bottom-0 text-white p-10">
                    <h3 class="text-4xl font-bold inline-block">Register</h3>
                    <p class="text-gray-500 whitespace-no-wrap">
                        Signup for an Account
                    </p>
                </div>
                <svg class="absolute animate h-full w-4/12 sm:w-2/12 right-0 inset-y-0 fill-current text-white"
                    viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <polygon points="0,0 100,100 100,0">
                </svg>
            </div>
            <div class="flex-1 p-6 sm:p-10 sm:py-12">
                <h3 class="text-xl text-gray-700 font-bold mb-6">
                    Register <span class="text-gray-400 font-light"> with your email</span></h3>

                <input id="name" type="text"
                    class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('name') ? ' border-red-500' : '' }}"
                    name="name" value="{{ old('name') }}" required autofocus placeholder="Name">
                @if ($errors->has('name'))
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $errors->first('name') }}
                </p>
                @endif

                <input id="email" type="email"
                    class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('email') ? ' border-red-500' : '' }}"
                    name="email" value="{{ old('email') }}" required placeholder="Email Address">
                @if ($errors->has('email'))
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $errors->first('email') }}
                </p>
                @endif

                <input id="password" type="password"
                    class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('password') ? ' border-red-500' : '' }}"
                    name="password" required placeholder="Password">
                @if ($errors->has('password'))
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $errors->first('password') }}
                </p>
                @endif

                <input id="password-confirm" type="password"
                    class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4"
                    name="password_confirmation" required placeholder="Confirm Password">

                <div class="flex flex-wrap items-center">
                    <div class="w-full sm:flex-1">
                        <input type="submit" value="Register"
                            class="w-full sm:w-auto bg-indigo-500 text-indigo-100 px-6 py-2 rounded-full hover:bg-indigo-600 focus:outline-none cursor-pointer">
                    </div>
                </div>

                <p class="text-gray-500 font-medium mt-8 mb-4">or register with</p>
                @include('partials.oauth-buttons')

                <p class="w-full text-xs text-left text-gray-700 mt-8">
                    Already have an account?
                    <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                        Login
                    </a>
                </p>

            </div>
    </div>
</div>
</div>
@endsection