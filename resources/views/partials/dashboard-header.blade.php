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
            <li><a
                class="lg:p-4 py-3 px-0 block border-b-2 border-transparent @if(Request::is('dashboard')) {{ 'border-pink-500 text-pink-500 font-bold' }}@else{{'text-gray-600 hover:text-gray-900'}}@endif"
                href="{{ route("dashboard") }}">Dashboard</a></li>
            <li><a
                class="lg:p-4 py-3 px-0 block border-b-2 border-transparent @if(Request::is('courses')) {{ 'border-pink-500 text-pink-500 font-bold' }}@else{{'text-gray-600 hover:text-gray-900'}}@endif"
                href="#">Courses</a></li>
            <li><a
                class="lg:p-4 py-3 px-0 block border-b-2 border-transparent @if(Request::is('users')) {{ 'border-pink-500 text-pink-500 font-bold' }}@else{{'text-gray-600 hover:text-gray-900'}}@endif"
                href="#">Users</a></li>
            <li><a
                class="lg:p-4 py-3 px-0 block border-b-2 border-transparent text-gray-600 hover:text-gray-900 lg:mb-0 mb-2 @if(Request::is('support')) {{ 'border-pink-500 text-pink-500 font-bold' }}@else{{'text-gray-600 hover:text-gray-900'}}@endif"
                href="{{ route('support') }}">Support</a></li>
          </ul>
        </nav>
        <a href="#"
          class="group lg:ml-4 flex items-center justify-start lg:mb-0 mb-4 pointer-cursor border-l border-gray-300 pl-6"
          id="userdropdown">
          <p class="font-bold text-xs pr-2 text-gray-700 text-right ignore-body-click">{{ auth()->user()->name }}<br>
            @if (auth()->user()->onTrial())
            <span class="text-xs text-teal-500 ignore-body-click">Trial Period</span></p>
          @else
          <span class="text-xs text-indigo-600 ignore-body-click">{{ ucfirst(auth()->user()->plan->name) }} Plan</span>
          </p>
          @endif
          <img class="rounded-full w-10 h-10 border-2 border-transparent group-hover:border-pink-400 ignore-body-click"
            src="{{ auth()->user()->photo }}" alt="avatar">
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

@if ($errors->any())
<div class="container mx-auto max-w-3xl mt-8 alert">
  <div class="bg-red-400 border-l-4 border-red-500 text-white p-4" role="alert">
    <p class="font-bold">Please fix the following errors</p>
    <ul class="list-disc ml-8">
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  <p></p>
</div>
@endif


@if (session('alert'))
<div class="container mx-auto max-w-3xl mt-8 alert">
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