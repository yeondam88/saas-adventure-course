<div class="pt-8">
    <nav id="nav" class="w-56 relative">
        <ul class="relative">
            <li class="@if(Request::is('dashboard')){{ 'activeLink' }}@endif">
                <a href="{{ route('dashboard') }}"
                    class="py-3 pl-1 w-full flex items-center focus:outline-none focus-visible:underline">
                    <svg class="h-6 w-6 transition-all ease-out transition-medium text-gray-500" viewBox="0 0 640 512"
                        fill="currentColor">
                        <g class="fa-group">
                            <path fill="currentColor"
                                d="M336 463.59V368a16 16 0 0 0-16-16h-64a16 16 0 0 0-16 16v95.71a16 16 0 0 1-15.92 16L112 480a16 16 0 0 1-16-16V300.06l184.39-151.85a12.19 12.19 0 0 1 15.3 0L480 300v164a16 16 0 0 1-16 16l-112-.31a16 16 0 0 1-16-16.1z"
                                class="fa-secondary"></path>
                            <path fill="currentColor"
                                d="M573.32 268.35l-25.5 31a12 12 0 0 1-16.9 1.65L295.69 107.21a12.19 12.19 0 0 0-15.3 0L45.17 301a12 12 0 0 1-16.89-1.65l-25.5-31a12 12 0 0 1 1.61-16.89L257.49 43a48 48 0 0 1 61 0L408 116.61V44a12 12 0 0 1 12-12h56a12 12 0 0 1 12 12v138.51l83.6 68.91a12 12 0 0 1 1.72 16.93z"
                                class="fa-primary"></path>
                        </g>
                    </svg>
                    <span class="ml-3 text-sm font-medium transition-all ease-out transition-medium text-gray-700">
                        Home
                    </span>
                </a>
            </li>
            <li class="@if(Request::is('courses')){{ 'activeLink' }}@endif">
                <a href="{{ route('courses') }}"
                    class="py-3 pl-1 w-full flex items-center focus:outline-none focus-visible:underline">
                    <svg class="h-6 w-6 transition-all ease-out transition-medium text-gray-500" viewBox="0 0 640 512"
                        fill="currentColor">
                        <g class="fa-group">
                            <path fill="currentColor"
                                d="M323.07 175.7L118.8 215.6a48.1 48.1 0 0 0-38.74 44.73 32 32 0 0 1 2.21 53.94l25.4 114.26A16 16 0 0 1 92 448H35.94a16 16 0 0 1-15.61-19.47l25.39-114.27a32 32 0 0 1 2.33-54 80.16 80.16 0 0 1 64.62-76.07l204.26-39.89a16 16 0 1 1 6.14 31.4z"
                                class="fa-secondary"></path>
                            <path fill="currentColor"
                                d="M622.33 198.8l-279 85.7a80 80 0 0 1-46.79 0L99.67 224a47.84 47.84 0 0 1 19.13-8.39l204.27-39.9a16 16 0 1 0-6.14-31.4l-204.26 39.88a79.87 79.87 0 0 0-47.57 29.18l-47.44-14.58c-23.54-7.23-23.54-38.36 0-45.59L296.6 67.5a79.92 79.92 0 0 1 46.8 0l278.93 85.7c23.55 7.24 23.55 38.36 0 45.6zM352.79 315.09a111.94 111.94 0 0 1-65.59 0l-145-44.55L128 384c0 35.35 86 64 192 64s192-28.65 192-64l-14.19-113.47z"
                                class="fa-primary"></path>
                        </g>
                    </svg>
                    <span class="ml-3 text-sm font-medium transition-all ease-out transition-medium text-gray-700">
                        Courses
                    </span>
                </a>
            </li>
            <li>
                <a href="" class="py-3 pl-1 w-full flex items-center focus:outline-none focus-visible:underline">
                    <svg class="h-5 w-5 ml-1 transition-all ease-out transition-medium text-gray-500 left1"
                        viewBox="0 0 512 412" fill="currentColor">
                        <g class="fa-group">
                            <path fill="currentColor" d="M351.75 168a128 128 0 0 1-255.5 0z" class="fa-secondary">
                            </path>
                            <path fill="currentColor"
                                d="M13.6 79.83l6.4 1.5v58.4c-7 4.19-12 11.5-12 20.27 0 8.4 4.6 15.4 11.1 19.71L3.5 242c-1.7 6.9 2.1 14 7.6 14h41.8c5.5 0 9.3-7.1 7.6-14l-15.6-62.27C51.4 175.42 56 168.42 56 160c0-8.79-5-16.1-12-20.29V87.12l52 12.53V136h256V99.65l82.3-19.82c18.2-4.41 18.2-27.1 0-31.5l-190.4-46a85.9 85.9 0 0 0-39.7 0L13.6 48.23c-18.1 4.39-18.1 27.19 0 31.6zm305.8 240.79L224 416l-95.4-95.4C57.1 323.73 0 382.23 0 454.42V464a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48v-9.6c0-72.17-57.1-130.67-128.6-133.78z"
                                class="fa-primary"></path>
                        </g>
                    </svg>
                    <span class="ml-3 text-sm font-medium transition-all ease-out transition-medium text-gray-700">
                        Students
                    </span>
                </a>
            </li>
            <li>
                <a href="" class="py-3 pl-1 w-full flex items-center focus:outline-none focus-visible:underline">
                    <svg class="h-6 w-6 transition-all ease-out transition-medium text-gray-500 top1"
                        viewBox="0 0 384 512" fill="currentColor">
                        <g class="fa-group">
                            <path fill="currentColor"
                                d="M96 0a32 32 0 0 0-32 32v96h64V32A32 32 0 0 0 96 0zm192 0a32 32 0 0 0-32 32v96h64V32a32 32 0 0 0-32-32z"
                                class="fa-secondary"></path>
                            <path fill="currentColor"
                                d="M384 176v32a16 16 0 0 1-16 16h-16v32a160.07 160.07 0 0 1-128 156.8V512h-64v-99.2A160.07 160.07 0 0 1 32 256v-32H16a16 16 0 0 1-16-16v-32a16 16 0 0 1 16-16h352a16 16 0 0 1 16 16z"
                                class="fa-primary"></path>
                        </g>
                    </svg>
                    <span class="ml-3 text-sm font-medium transition-all ease-out transition-medium text-gray-700">
                        Integrations
                    </span>
                </a>
            </li>
            <li>
                <a href="" class="py-3 pl-1 w-full flex items-center focus:outline-none focus-visible:underline">
                    <svg class="h-6 w-6 ml-1 transition-all ease-out transition-medium text-gray-500"
                        viewBox="0 0 600 412" fill="currentColor">
                        <g class="fa-group">
                            <path fill="currentColor"
                                d="M512 400v32a16 16 0 0 1-16 16H32a32 32 0 0 1-32-32V80a16 16 0 0 1 16-16h32a16 16 0 0 1 16 16v304h432a16 16 0 0 1 16 16z"
                                class="fa-secondary"></path>
                            <path fill="currentColor"
                                d="M480 112v118.05c0 21.38-25.85 32.09-41 17l-32.4-32.4-96 96a32 32 0 0 1-45.25 0L192 237.25l-46.06 46.07a16 16 0 0 1-22.63 0l-22.62-22.62a16 16 0 0 1 0-22.63l68.69-68.69a32 32 0 0 1 45.25 0L288 242.75l73.37-73.38L329 137c-15.12-15.12-4.41-41 17-41h118a16 16 0 0 1 16 16z"
                                class="fa-primary"></path>
                        </g>
                    </svg>
                    <span class="ml-2 text-sm font-medium transition-all ease-out transition-medium text-gray-700">
                        Analytics
                    </span>
                </a>
            </li>
        </ul>
    </nav>
</div>