<div class="pt-8">
    <nav id="nav" class="w-56 relative">
        <ul class="relative">
            <li class="@if(Request::is('dashboard')){{ 'activeLink' }}@endif">
                <a href="{{ route('admin.notification') }}"
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
                        Add Notification
                    </span>
                </a>
            </li>
        </ul>
    </nav>
</div>