<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.2/tailwind.min.css">
    <title>{{ $course->name }}</title>
    <style>
        .arrow-right {
            width: 0;
            height: 0;
            border-top: 14px solid transparent;
            border-bottom: 14px solid transparent;

            border-left: 20px solid black;
        }
    </style>
</head>

<body>
    <!-- Top Nav -->
    <div class="bg-white">
        <div class="container mx-auto h-auto md:h-20 md:flex justify-between items-center">
            <a href="/"
                class="block md:inline-block text-center font-black text-gray-800 text-2xl my-4 md:my-0">{{ $course->name }}<span
                    class="text-pink-500">.</span></a>
            <a href="/#" class="bg-{{ $course->primary_color }}-500 px-5 py-2 text-white hidden md:block">Enroll Now</a>
        </div>
    </div>

    <!-- Hero Cover -->
    <div class="bg-gray-100">
        <div class="lg:flex container mx-auto">
            <div
                class="w-full lg:w-1/2 pl-0 lg:pl-12 text-center lg:text-left flex justify-center items-start flex-col pt-8 lg:pt-0">
                <p class="text-{{ $course->primary_color }}-500 font-medium text-lg tracking-wider w-full lg:w-auto">
                    Tagline</p>
                <h1 class="text-5xl font-bold pr-0 lg:pr-12 mt-8 leading-tight">{{ $course->headline }}</h1>
                <a href="/#"
                    class="inline-block w-auto bg-{{ $course->primary_color }}-500 px-8 py-4 text-white text-xl mt-10 mx-auto lg:mx-0">Enroll
                    Now</a>
            </div>
            <div class="w-full lg:w-1/2 pr-0 lg:pr-12 pb-8 lg:pb-0">
                <!-- Video Cover -->
                <div
                    class="w-full h-64 bg-gray-300 py-48 my-20 relative cursor-pointer flex justify-center items-center">
                    <div class="bg-gray-200 w-20 h-20 rounded-full flex justify-center items-center">
                        <div class="arrow-right opacity-25 ml-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <div class="white">
        <div class="container mx-auto flex justify-center items-center flex-col py-24">
            <h2 class="text-5xl font-bold pr-12 max-w-3xl text-center">What Is This Course About?</h2>
            <p class="text-gray-600 max-w-3xl text-center mt-8 text-lg">In this course you will learn the art of
                mastering your skills in technology A. You will learn how to leaverage the power of technology A to
                create your own product. Learning these skills is super powerful and will help you grow as a developer.
            </p>
            <a href="/#"
                class="inline-block w-auto bg-{{ $course->primary_color }}-500 px-8 py-4 text-white text-xl mt-10">Enroll
                Now</a>
        </div>
    </div>

    <!-- Course Overview -->
    <div class="bg-gray-100">
        <div class="container mx-auto flex justify-center items-center flex-col py-24">
            <p class="text-{{ $course->primary_color }}-500 font-medium text-lg tracking-wider">The Videos</p>
            <h2 class="text-5xl font-bold pr-12 max-w-3xl text-center">Course Overview</h2>
            <div class="flex justify-center items-center w-full mt-8">
                <div class="bg-gray-300 h-64 w-1/3 mx-3 flex justify-center items-center cursor-pointer">
                    <div class="bg-gray-200 w-20 h-20 rounded-full flex justify-center items-center">
                        <div class="arrow-right opacity-25 ml-2"></div>
                    </div>
                </div>
                <div class="bg-gray-300 h-64 w-1/3 mx-3 flex justify-center items-center cursor-pointer">
                    <div class="bg-gray-200 w-20 h-20 rounded-full flex justify-center items-center">
                        <div class="arrow-right opacity-25 ml-2"></div>
                    </div>
                </div>
                <div class="bg-gray-300 h-64 w-1/3 mx-3 flex justify-center items-center cursor-pointer">
                    <div class="bg-gray-200 w-20 h-20 rounded-full flex justify-center items-center">
                        <div class="arrow-right opacity-25 ml-2"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center w-full mt-6">
                <div class="bg-gray-300 h-64 w-1/3 mx-3 flex justify-center items-center cursor-pointer">
                    <div class="bg-gray-200 w-20 h-20 rounded-full flex justify-center items-center">
                        <div class="arrow-right opacity-25 ml-2"></div>
                    </div>
                </div>
                <div class="bg-gray-300 h-64 w-1/3 mx-3 flex justify-center items-center cursor-pointer">
                    <div class="bg-gray-200 w-20 h-20 rounded-full flex justify-center items-center">
                        <div class="arrow-right opacity-25 ml-2"></div>
                    </div>
                </div>
                <div class="bg-gray-300 h-64 w-1/3 mx-3 flex justify-center items-center cursor-pointer">
                    <div class="bg-gray-200 w-20 h-20 rounded-full flex justify-center items-center">
                        <div class="arrow-right opacity-25 ml-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="bg-white">
        <div class="container mx-auto flex justify-center items-center flex-col py-24">
            <p class="text-{{ $course->primary_color }}-500 font-medium text-lg tracking-wider">Testimonials</p>
            <h2 class="text-5xl font-bold pr-12 max-w-3xl text-center">What Others Are Saying:</h2>
            <div class="lg:flex justify-center items-center w-full mt-16 mb-4">
                <div class="h-auto w-full lg:w-1/3 mb-12 lg:mb-0 flex justify-start items-start flex-col">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 bg-gray-200 rounded-full mr-4"></div>
                        <div class="flex justify-center items-start flex-col">
                            <h4 class="text-gray-800 font-bold">John Doe</h4>
                            <p class="text-gray-500">Creator of Product</p>
                        </div>
                    </div>
                    <blockquote class="text-gray-600 mt-8 text-lg">"I've taken many online courses and this is by far
                        the most thorough and knowledge-packed course I've ever taken."</blockquote>
                </div>
                <div
                    class="h-auto w-full lg:w-1/3 mb-12 lg:mb-0 px-0 lg:px-8 mx-0 lg:mx-8 flex justify-start items-start flex-col border-transparent border-r border-l lg:border-gray-200">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 bg-gray-200 rounded-full mr-4"></div>
                        <div class="flex justify-center items-start flex-col">
                            <h4 class="text-gray-800 font-bold">Jane Doe</h4>
                            <p class="text-gray-500">CEO of Product</p>
                        </div>
                    </div>
                    <blockquote class="text-gray-600 mt-8 text-lg">"I really enjoyed this course. I learned so many
                        things that are going to help me further my development career."</blockquote>
                </div>
                <div class="h-auto w-full lg:w-1/3 flex justify-start items-start flex-col">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 bg-gray-200 rounded-full mr-4"></div>
                        <div class="flex justify-center items-start flex-col">
                            <h4 class="text-gray-800 font-bold">John Smith</h4>
                            <p class="text-gray-500">Creator of Stuff</p>
                        </div>
                    </div>
                    <blockquote class="text-gray-600 mt-8 text-lg">"Packed with awesome content, this course has helped
                        me master technology A. I would highly recommend this to anyone."</blockquote>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing -->
    <div class="bg-gray-100 py-24">
        <div class="max-w-4xl mx-auto md:flex">
            <div class="w-full md:w-1/2 bg-white shadow pb-12 mr-4 mb-8 md:mb-0">
                <h3 class="w-full border-b border-gray-200 py-6 text-2xl font-bold text-center">Starter Package</h3>
                <div class="px-10">
                    <div class="flex mt-10 items-end">
                        <h4 class="text-{{ $course->primary_color }}-500 text-5xl font-black leading-snug">$68</h4>
                        <p class="text-sm text-{{ $course->primary_color }}-500 ml-2 mb-3">one-time payment</p>
                    </div>
                    <p class="text-gray-500 mt-4 text-sm">The starter package will get you started with learning the
                        basics of Technology A. Learn the fundamentals of this skill.</p>
                    <div class="h-32">
                        <p
                            class="border-t border-gray-100 mt-4 pt-4 font-bold text-{{ $course->primary_color }}-500 text-sm">
                            What You Get</p>
                        <div
                            class="text-base font-medium mt-4 text-{{ $course->primary_color }}-500 flex justify-start items-center">
                            <svg class="w-4 h-4 fill-current mr-2 mt-1" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="none" stroke-width="1">
                                    <g transform="translate(-1 -3)">
                                        <path
                                            d="M14.305 3.344l1.06 1.061-8.75 8.751-5.038-5.038 1.06-1.06 3.977 3.977z" />
                                    </g>
                                </g>
                            </svg>
                            Feature 1
                        </div>
                        <div
                            class="text-base font-medium mt-4 text-{{ $course->primary_color }}-500 flex justify-start items-center">
                            <svg class="w-4 h-4 fill-current mr-2 mt-1" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="none" stroke-width="1">
                                    <g transform="translate(-1 -3)">
                                        <path
                                            d="M14.305 3.344l1.06 1.061-8.75 8.751-5.038-5.038 1.06-1.06 3.977 3.977z" />
                                    </g>
                                </g>
                            </svg>
                            Feature 2
                        </div>
                    </div>
                    <a href="/#"
                        class="block w-auto bg-{{ $course->primary_color }}-500 px-8 py-4 text-white text-xl mt-16 text-center">Buy
                        Now</a>
                </div>
            </div>

            <div class="w-full md:w-1/2 bg-white shadow pb-12 ml-0 md:ml-4">
                <h3 class="w-full border-b border-gray-200 py-6 text-2xl font-bold text-center">Master Package</h3>
                <div class="px-10">
                    <div class="flex mt-10 items-end">
                        <h4 class="text-{{ $course->primary_color }}-500 text-5xl font-black leading-snug">$99</h4>
                        <p class="text-sm text-{{ $course->primary_color }}-500 ml-2 mb-3">one-time payment</p>
                    </div>
                    <p class="text-gray-500 mt-4 text-sm">Get this package to become a master of Technology A. Easily
                        and quickly learn the ins-and-outs of this amazing skill.</p>
                    <div class="h-32">
                        <p
                            class="border-t border-gray-100 mt-4 pt-4 font-bold text-{{ $course->primary_color }}-500 text-sm">
                            What You Get</p>
                        <div
                            class="text-base font-medium mt-4 text-{{ $course->primary_color }}-500 flex justify-start items-center">
                            <svg class="w-4 h-4 fill-current mr-2 mt-1" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="none" stroke-width="1">
                                    <g transform="translate(-1 -3)">
                                        <path
                                            d="M14.305 3.344l1.06 1.061-8.75 8.751-5.038-5.038 1.06-1.06 3.977 3.977z" />
                                    </g>
                                </g>
                            </svg>
                            Feature 1
                        </div>
                        <div
                            class="text-base font-medium mt-4 text-{{ $course->primary_color }}-500 flex justify-start items-center">
                            <svg class="w-4 h-4 fill-current mr-2 mt-1" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="none" stroke-width="1">
                                    <g transform="translate(-1 -3)">
                                        <path
                                            d="M14.305 3.344l1.06 1.061-8.75 8.751-5.038-5.038 1.06-1.06 3.977 3.977z" />
                                    </g>
                                </g>
                            </svg>
                            Feature 2
                        </div>
                        <div
                            class="text-base font-medium mt-4 text-{{ $course->primary_color }}-500 flex justify-start items-center">
                            <svg class="w-4 h-4 fill-current mr-2 mt-1" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="none" stroke-width="1">
                                    <g transform="translate(-1 -3)">
                                        <path
                                            d="M14.305 3.344l1.06 1.061-8.75 8.751-5.038-5.038 1.06-1.06 3.977 3.977z" />
                                    </g>
                                </g>
                            </svg>
                            Feature 3
                        </div>
                    </div>
                    <a href="/#"
                        class="block w-auto bg-{{ $course->primary_color }}-500 px-8 py-4 text-white text-xl mt-16 text-center">Buy
                        Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="bg-white py-12">
        <div class="container mx-auto px-6 md:px-0 md:flex justify-between items-center">
            <a href="/" class="inline-block font-black text-gray-800 text-2xl">{{ $course->name }}<span
                    class="text-pink-500">.</span></a>
            <div class="text-{{ $course->primary_color }}-500 font-bold -mt-2 text-xl">Never Stop Learning<span
                    class="text-pink-500 text-3xl">.</span></div>
        </div>
        <div class="container mx-auto px-6 md:px-0 md:flex justify-between items-end mt-12">
            <div class="flex justify-center items-start flex-col text-gray-500">
                <div class="flex">
                    <a href="/#" class="inline-block"><svg class="w-8 h-8 fill-current text-gray-400 mr-2"
                            xmlns="http://www.w3.org/2000/svg">
                            <g stroke="none" stroke-width="1">
                                <g>
                                    <path
                                        d="M26.875 30.5H5.125A3.626 3.626 0 011.5 26.875V5.125A3.626 3.626 0 015.125 1.5h21.75A3.626 3.626 0 0130.5 5.125v21.75a3.626 3.626 0 01-3.625 3.625zm-14.239-7.134c6.837 0 10.578-5.67 10.578-10.578 0-.16 0-.319-.008-.478a7.574 7.574 0 001.857-1.929 7.535 7.535 0 01-2.14.588 3.74 3.74 0 001.64-2.06 7.395 7.395 0 01-2.364.9 3.71 3.71 0 00-2.712-1.175 3.722 3.722 0 00-3.719 3.72c0 .29.036.572.094.848A10.557 10.557 0 018.2 9.316a3.728 3.728 0 001.153 4.966 3.76 3.76 0 01-1.682-.464v.05a3.726 3.726 0 002.98 3.647c-.312.087-.639.13-.98.13-.239 0-.47-.021-.695-.064a3.718 3.718 0 003.473 2.58 7.456 7.456 0 01-4.619 1.595c-.297 0-.594-.014-.884-.05a10.575 10.575 0 005.691 1.66z" />
                                </g>
                            </g>
                        </svg></a>
                    <a href="/#" class="inline-block"><svg class="w-8 h-8 fill-current text-gray-400 mr-2"
                            xmlns="http://www.w3.org/2000/svg">
                            <g stroke="none" stroke-width="1">
                                <g>
                                    <path
                                        d="M28.9 1.5H3.1a1.6 1.6 0 00-1.6 1.6v25.8a1.6 1.6 0 001.6 1.6H17V19.285h-3.775v-4.39H17v-3.23c0-3.745 2.29-5.785 5.63-5.785a32.1 32.1 0 013.37.17v3.915h-2.3c-1.82 0-2.175.86-2.175 2.13v2.795h4.35l-.565 4.39H21.5V30.5h7.4a1.6 1.6 0 001.6-1.6V3.1a1.6 1.6 0 00-1.6-1.6z" />
                                </g>
                            </g>
                        </svg></a>
                    <a href="/#" class="inline-block"><svg class="w-8 h-8 fill-current text-gray-400"
                            xmlns="http://www.w3.org/2000/svg">
                            <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                <g>
                                    <path
                                        d="M15.995 1.5c3.937 0 4.43.016 5.976.087 1.543.07 2.597.315 3.519.674.953.37 1.762.866 2.567 1.671A7.106 7.106 0 0129.73 6.5c.359.922.604 1.976.674 3.519.07 1.546.087 2.04.087 5.976 0 3.937-.016 4.43-.087 5.976-.07 1.543-.315 2.597-.674 3.519a7.106 7.106 0 01-1.672 2.567 7.106 7.106 0 01-2.567 1.672c-.922.359-1.976.604-3.519.674-1.546.07-2.04.087-5.976.087-3.937 0-4.43-.016-5.976-.087-1.543-.07-2.597-.315-3.52-.674a7.106 7.106 0 01-2.567-1.672 7.105 7.105 0 01-1.671-2.567c-.359-.922-.604-1.976-.674-3.519-.07-1.546-.087-2.04-.087-5.976 0-3.937.016-4.43.087-5.976.07-1.543.315-2.597.674-3.52a7.105 7.105 0 011.671-2.567A7.105 7.105 0 016.5 2.261c.922-.359 1.976-.604 3.519-.674 1.546-.07 2.04-.087 5.976-.087zm5.857 2.696c-1.528-.07-1.987-.085-5.857-.085s-4.329.015-5.857.085c-1.414.064-2.181.3-2.692.499a4.49 4.49 0 00-1.667 1.084 4.49 4.49 0 00-1.084 1.667c-.199.51-.435 1.278-.5 2.692-.069 1.528-.084 1.987-.084 5.857s.015 4.329.085 5.857c.064 1.414.3 2.181.499 2.692.263.677.577 1.16 1.084 1.667.507.507.99.821 1.667 1.084.51.198 1.278.435 2.692.5 1.528.069 1.986.084 5.857.084 3.87 0 4.33-.015 5.857-.085 1.414-.064 2.181-.3 2.692-.499a4.49 4.49 0 001.667-1.084 4.49 4.49 0 001.084-1.667c.198-.51.435-1.278.5-2.692.069-1.528.084-1.987.084-5.857s-.015-4.329-.085-5.857c-.064-1.414-.3-2.181-.499-2.692a4.49 4.49 0 00-1.084-1.667 4.49 4.49 0 00-1.667-1.084c-.51-.199-1.278-.435-2.692-.5zM15.995 8.55a7.444 7.444 0 110 14.887 7.444 7.444 0 010-14.887zm0 12.276a4.832 4.832 0 110-9.664 4.832 4.832 0 010 9.664zm9.477-12.57a1.74 1.74 0 11-3.479 0 1.74 1.74 0 013.48 0z" />
                                </g>
                            </g>
                        </svg></a>
                </div>
                <p class="text-sm my-2">&copy; 2019 Course Name</p>
                <div class="flex">
                    <a href="/#" class="text-sm underline mr-3">Privacy Policy</a>
                    <a href="/#" class="text-sm underline">Terms of Service</a>
                </div>
            </div>
            <p class="text-gray-400 text-sm mt-8 md:mt-0">Made By <a href="/#"
                    class="text-pink-500 font-medium">{{ $user->name }}</a></p>
        </div>
    </div>
</body>

</html>