@extends('app')

@section('title', 'WeTeach - A Course Platform for Developers, built by Developers')

@section('content')


@include('partials.nav')


<!-- Hero Section -->
<section class="font-sans container m-auto flex px-5">

    <div class="flex-1 flex items-start flex-col justify-center">
        <h1
            class="my-4 font-medium mt-40 lg:mt-32 lg:mt-0 text-center w-full px-2 text-gray-800 text-2xl xl:text-5xl lg:px-0 font-black mb-8 md:w-full lg:text-left h-auto xl:h-32">
            <span class="block">A Course Platform for</span> <span id="title" class="text-pink-500"></span>
        </h1>
        <p
            class="leading-normal mb-12 pr-36 text-normal xl:text-base text-center w-full px-16 text-gray-600 leading-loose xl:pr-32 md:text-center md:px-32 sm:text-center lg:text-left lg:px-0">
            Create a kickass course and integrate your favorite services including stripe, braintree, mailchimp, and
            many others!
        </p>

        <div class="flex justify-center items-center flex-col mb-12">

            <div class="max-w-5xl">
                <a href="/login/github"
                    class="bg-gray-900 text-gray-100 hover:text-white shadow font-bold text-sm py-3 pl-4 pr-8 rounded-full flex justify-start items-center cursor-pointer text-sm w-full mt-4">
                    <svg viewBox="0 0 24 24" class="fill-current mr-3 w-6 h-6" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                    </svg>
                    <span class="border-l border-gray-800 h-6 w-1 block mr-1"></span>
                    <span class="pl-3">Sign up with Github</span>
                </a>

                <a href="/login/facebook"
                    class="bg-indigo-600 text-gray-100 hover:text-white shadow font-bold py-3 pl-4 pr-8 rounded-full flex justify-start items-center cursor-pointer text-sm w-full mt-4">
                    <svg viewBox="0 0 24 24" class="fill-current mr-3 w-6 h-6" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" />
                    </svg>
                    <span class="border-l border-indigo-500 h-6 w-1 block mr-1"></span>
                    <span class="pl-3">Sign up with Facebook</span>
                </a>
                <a href="/register"
                    class="bg-pink-500 text-gray-100 hover:text-white shadow font-bold py-3 pl-4 pr-8 rounded-full flex justify-start items-center cursor-pointer text-sm w-full mt-4">
                    <svg viewBox="0 0 24 22" class="fill-current mr-3 w-6 h-5 mt-1" xmlns="http://www.w3.org/2000/svg">
                        <g id="Page-1" stroke="none" stroke-width="1">
                            <g id="email" transform="translate(0 -3)">
                                <path
                                    d="M1.803 3h20.394C23.211 3 24 3.755 24 4.858v14.284C24 20.187 23.268 21 22.197 21H1.803C.789 21 0 20.187 0 19.142V4.858C0 3.755.845 3 1.803 3zm20.45 16.839l-6.985-8.42-.902.755c-1.408 1.22-3.324 1.22-4.732 0l-.845-.755-6.986 8.42h20.45zm-6.14-9.174l6.76 8.187V4.8l-6.76 5.865zM1.127 18.852l6.76-8.187L1.127 4.8v14.052zM2.14 4.162l8.225 7.083c.958.871 2.31.871 3.324 0l8.225-7.084H2.141z"
                                    id="Shape" />
                            </g>
                        </g>
                    </svg>
                    <span class="border-l border-pink-400 h-6 w-1 block mr-1"></span>
                    <span class="pl-3">Sign up with Email</span>
                </a>
            </div>

        </div>
    </div>
    <div class="flex-1 hidden items-start flex-col justify-center lg:flex relative pl-16">
        <img src="/img/hero.png" class="w-full object-cover relative bottom-0 z-10 mt-32" alt="We Teach Hero Image">
    </div>

</section>

<!-- Features Section -->
<section class="bg-gray-100">

    <div class="container mx-auto mt-0 pb-4 md:pb-24 px-5">

        <h2 class="w-full pt-8 sm:pt-16 pt-4 text-2xl sm:text-4xl font-bold text-left text-indigo-500 uppercase">Our
            Features</h2>
        <p class="w-full mb-8 md:mb-16 text-xl text-gray-500">Find out how we are different than the rest</p>

        <div class="block md:flex flex-wrap mb-16 bg-white rounded shadow overflow-hidden">
            <div class="w-full md:w-1/2">
                <img src="/img/stripe.png" class="w-full">
            </div>
            <div class="w-full md:w-1/2 py-12 md:py-0 flex flex-col justify-center px-8 sm:px-16">
                <h3 class="text-xl lg:text-3xl font-bold leading-none mb-3 mt-16 text-gray-700 -mt-1">Integrate your own
                    payments</h3>
                <p class="text-gray-600 text-xs">You can integrate your Stripe or Braintree payment system right into
                    your course. This means when someone pays for your course, the money will be deposited directly into
                    your account!</p>
            </div>

        </div>

        <div class="block md:flex flex-wrap mb-16 bg-white rounded shadow overflow-hidden">

            <div class="w-full md:w-1/2 py-12 md:py-0 flex flex-col justify-center px-8 sm:px-16">
                <h3 class="text-xl lg:text-3xl font-bold leading-none mb-3 mt-16 text-gray-700 -mt-1">Developer focused
                    courses</h3>
                <p class="text-gray-600 text-xs">Display code examples and allow users to download files. WeTeach is
                    focused on developers teaching other people to become developers.</p>
            </div>
            <div class="w-full md:w-1/2">
                <img src="/img/screenshot.png" class="w-full">
            </div>

        </div>

    </div>

</section>

<!-- Footer Email Section -->
<section class="text-center pt-32 pb-40 bg-pink-500 relative">

    <div class="container mx-auto text-center px-5">
        <h1
            class="w-full my-2 text-2xl sm:text-3xl lg:text-5xl font-bold leading-tight text-left sm:text-center text-white">
            Sign up to create your first course</h1>
        <h3 class="my-4 mb-6 lg:mb-4 text-xl lg:text-3xl leading-tight text-gray-200 text-left sm:text-center">Signup
            below to get started.</h3>
        <a href="{{ route('register') }}"
            class="px-8 py-4 bg-indigo-500 rounded-full text-white mt-8 text-lg inline-block font-bold shadow-xl">Get
            Started Today</a>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
<script>
    var typed = new Typed('#title', {
            strings: ["Hipster Developers.", "Awesome Developers.", "Like-minded Geeks", "You and me."],
            typeSpeed: 60,
            backSpeed: 20,
            backDelay: 1500,
            startDelay: 0,
            loop: true
        });
</script>
<style type="text/css" data-typed-js-css="true">
    .typed-cursor {
        opacity: 1;
    }

    .typed-cursor.typed-cursor--blink {
        animation: typedjsBlink 0.7s infinite;
        -webkit-animation: typedjsBlink 0.7s infinite;
        animation: typedjsBlink 0.7s infinite;
    }

    @keyframes typedjsBlink {
        50% {
            opacity: 0.0;
        }
    }

    @-webkit-keyframes typedjsBlink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0.0;
        }

        100% {
            opacity: 1;
        }
    }
</style>

@include('partials.footer')

@endsection