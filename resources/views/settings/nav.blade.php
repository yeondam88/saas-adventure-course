<ul class="flex border-b border-gray-300 text-sm font-medium text-gray-600 mt-3 px-6 md:px-0">
  <li class="mr-8 hover:text-gray-900 @if(Request::is('settings/profile')){{ 'text-indigo-600 border-b-2 border-indigo-500' }}@endif"><a href="{{ route('profile') }}" class="py-4 inline-block">Profile</a>
  </li>
<li class="mr-8 hover:text-gray-900 @if(Request::is('settings/security')){{ 'text-indigo-600 border-b-2 border-indigo-500' }}@endif""><a href="{{ route('security') }}" class="py-4 inline-block">Security</a></li>
<li class="mr-8 hover:text-gray-900 @if(Request::is('settings/billing')){{ 'text-indigo-600 border-b-2 border-indigo-500' }}@endif""><a href="{{ route('billing') }}" class="py-4 inline-block">Billing</a></li>
</ul>