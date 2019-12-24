<header class="px-6 bg-white flex flex-wrap items-center lg:py-0 py-2">
  <div class="flex-1 flex justify-between items-center font-black text-gray-700">
    <a href="{{ route("dashboard") }}"><img class="h-8" src="/img/logo-icon.png" alt="weTeach"></a>
  </div>

  <label for="menu-toggle" class="cursor-pointer lg:hidden block">
    <svg class="fill-current text-gray-600 hover:text-gray-800" xmlns="http://www.w3.org/2000/svg" width="20"
      height="20" viewBox="0 0 20 20">
      <title>menu</title>
      <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" </path> </svg> </label> <input class="hidden"
        type="checkbox" id="menu-toggle" />

      <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
        <nav>
          <ul class="lg:flex items-center justify-between text-sm font-medium text-gray-700 pt-4 lg:pt-0">
          <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent @if(Request::is('dashboard')) {{ 'border-pink-500 text-pink-500 font-bold' }}@else{{'text-gray-600 hover:text-gray-900'}}@endif"
                href="{{ route("dashboard") }}">Dashboard</a></li>
            <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent @if(Request::is('courses')) {{ 'border-pink-500 text-pink-500 font-bold' }}@else{{'text-gray-600 hover:text-gray-900'}}@endif"
                href="#">Courses</a></li>
            <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent @if(Request::is('users')) {{ 'border-pink-500 text-pink-500 font-bold' }}@else{{'text-gray-600 hover:text-gray-900'}}@endif"
                href="#">Users</a></li>
            <li><a
                class="lg:p-4 py-3 px-0 block border-b-2 border-transparent text-gray-600 hover:text-gray-900 lg:mb-0 mb-2 @if(Request::is('support')) {{ 'border-pink-500 text-pink-500 font-bold' }}@else{{'text-gray-600 hover:text-gray-900'}}@endif"
                href="#">Support</a></li>
          </ul>
        </nav>
        <a href="#" class="lg:ml-4 flex items-center justify-start lg:mb-0 mb-4 pointer-cursor" id="userdropdown">
          <img class="rounded-full w-10 h-10 border-2 border-transparent hover:border-pink-400 ignore-body-click"
            src="https://api.adorable.io/avatars/285/abott@adorable.png" alt="avatar">
        </a>
        <div id="usermenu"
          class="absolute lg:mt-12 pt-1 z-40 left-0 lg:left-auto lg:right-0 lg:top-0 invisible lg:w-auto w-full">
          <div class="bg-white shadow-xl lg:px-8 px-6 lg:py-4 pb-4 pt-0 rounded lg:mr-3 rounded-t-none">
            <a href="/settings"
              class="pb-2 block text-gray-600 hover:text-gray-900 font-medium ignore-body-click">Settings</a>
            <a href="/logout" class="block text-gray-600 hover:text-gray-900 font-medium ignore-body-click">Logout</a>
          </div>
        </div>

      </div>

</header>