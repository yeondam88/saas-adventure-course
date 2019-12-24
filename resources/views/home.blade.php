@extends('app')

@section('title', 'WeTeach - A Course Platform for Developers, built by Developers')

@section('content')


@include('partials.nav')

<!-- Hero Section -->
<section class="font-sans container m-auto flex px-5">

    <div class="flex-1 flex items-start flex-col justify-center">
        <h1
            class="my-4 font-medium mt-40 lg:mt-32 lg:mt-0 text-center w-full px-2 text-gray-800 text-2xl xl:text-3xl lg:px-0 font-black mb-8 md:w-full lg:text-left lg:-mt-4 h-auto xl:h-24">
            A Course Platform <span id="title" class="text-pink-500"></span></h1>
        <p
            class="leading-normal mb-12 pr-36 text-normal xl:text-lg text-center w-full px-16 text-gray-600 leading-loose xl:pr-32 md:text-center md:px-32 sm:text-center lg:text-left lg:px-0">
            Create a kickass course and integrate your favorite services including stripe, braintree, mailchimp, and
            many others!</p>

        <form class="block sm:flex w-full px-0 sm:px-16 xl:pr-32 lg:pr-16 md:px-32 lg:px-0"
            action="https://devdojo.us10.list-manage.com/subscribe/post?u=40a7d08f5c82f392a291d8a7e&amp;id=b5ca288537"
            method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank"
            novalidate="">
            <input
                class="bg-white border-2 border-gray-300 rounded py-2 px-4 block w-full focus:outline-none focus:border-indigo-600 text-black input"
                id="email" type="email" name="EMAIL" autofocus="" placeholder="jane@example.com">
            <input type="hidden" name="b_40a7d08f5c82f392a291d8a7e_b5ca288537" tabindex="-1" value="">
            <button
                class="hover:bg-grey-darker text-white ml-0 sm:ml-4 py-2 px-6 rounded bg-indigo-600 font-bold w-full sm:w-2/3 mt-4 sm:mt-0">Submit</button>
        </form>
        <div
            class="mt-8 flex text-sm border border-gray-200 rounded-full p-2 text-pink-500 text-sm mx-auto lg:mx-0 mb-12 lg:mb-0">
            <span class="bg-pink-500 text-white rounded-full px-3 h-6 flex items-center hidden xl:inline">Signup</span>
            <span class="px-2 flex items-center"><span class="hidden sm:inline">for progress updates and</span> gain
                early access when we release!</span></div>
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
                <h3 class="text-xl lg:text-3xl font-bold leading-none mb-3 mt-16 text-gray-700 -mt-1">Integrate your
                    own payments</h3>
                <p class="text-gray-600 text-xs">You can integrate your Stripe or Braintree payment system right
                    into your course. This means when someone pays for your course, the money will be deposited
                    directly into your account!</p>
            </div>

        </div>

        <div class="block md:flex flex-wrap mb-16 bg-white rounded shadow overflow-hidden">

            <div class="w-full md:w-1/2 py-12 md:py-0 flex flex-col justify-center px-8 sm:px-16">
                <h3 class="text-xl lg:text-3xl font-bold leading-none mb-3 mt-16 text-gray-700 -mt-1">Developer
                    focused courses</h3>
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
            Sign up to be notified when we release!</h1>
        <h3 class="my-4 mb-6 lg:mb-4 text-xl lg:text-3xl leading-tight text-gray-200 text-left sm:text-center">Enter
            your email below to request early access.</h3>
        <form class="block sm:flex w-full px-0 sm:px-16 xl:pr-6 lg:pr-16 md:px-32 lg:px-0 lg:w-1/2 lg:m-auto lg:mt-8"
            action="https://devdojo.us10.list-manage.com/subscribe/post?u=40a7d08f5c82f392a291d8a7e&amp;id=b5ca288537"
            method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank"
            novalidate="">
            <input
                class="bg-white border-2 border-white rounded py-2 px-4 block w-full focus:outline-none focus:border-indigo-400 text-black input"
                type="email" autofocus="" name="EMAIL" placeholder="jane@example.com">
            <input type="hidden" name="b_40a7d08f5c82f392a291d8a7e_b5ca288537" tabindex="-1" value="">
            <button
                class="hover:bg-grey-darker text-white ml-0 sm:ml-4 py-2 px-6 rounded bg-gray-800 font-bold w-full sm:w-2/3 mt-4 sm:mt-0">Submit</button>
        </form>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
<script>
    var typed = new Typed('#title', {
            strings: ["for Hipster Developers.", "for Awesome Developers.", "that integrates with your favorite services."],
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

@endsection