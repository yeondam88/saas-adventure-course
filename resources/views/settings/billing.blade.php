@extends('app')

@section('title', 'Billing Setting')

@section('content')

<div class="bg-gray-200 min-h-screen pb-24">
  @include('partials.dashboard-header')
  <div class="container mx-auto max-w-3xl mt-8">

    @if (session('alert'))
    <p>{{ session('alert') }}</p>
    @endif

    <h1 class="text-2xl font-bold text-gray-700 px-6 md:px-0">Billing Settings</h1>
    @include('settings.nav')

    <div id="switch-plans-modal" class="fixed w-full h-full inset-0 z-50">
      <div class="fixed opacity-50 bg-black inset-0 w-full h-full"></div>
      <form method="POST" action="{{ route('billing.switch_plan') }}" class="absolute bg-white rounded-lg p-5" id="switch-plans">
        @csrf
        <div id="switch-plans-close" class="absolute right-0 top-0 -mt-4 -mr-4 w-8 h-8 rounded-full shadow bg-white text-center flex justify-center items-center text-xl font-bold cursor-pointer">&times;</div>
        <p class="text-sm text-gray-600 mb-4">Switch Plan</p>
        @include('partials.plans')
        <button class="bg-indigo-500 text-white text-sm font-medium px-6 py-2 rounded float-right uppercase cursor-pointer"
          type="submit">
          Switch Plans
        </button>
      </form>
    </div>

    <form action="{{ route('billing.save') }}" id="billing-form" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
        <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
          <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Billing Settings</h2>
          <p class="text-xs text-gray-500">Update your billing information.
          </p>
        </div>
        <div class="md:w-2/3 w-full">
          @if(auth()->user()->subscribed('main'))
          <div class="py-8 px-16">
            <div class="flex">
              <img src="/img/plans/{{ auth()->user()->plan->name }}.png" class="w-16 h-16 mr-3" />
              <div>
                <span class="block">Subscribed to {{ ucfirst(auth()->user()->plan->name) }}</span>
                <span class="text-xs text-gray-700">{{ auth()->user()->plan->description }}</span>
              </div>
            </div>
            <div id="switch-plan-btn" class="bg-gray-300 text-gray-600 text-sm font-medium px-6 py-2 rounded uppercase cursor-pointer inline-block mt-4">
              Switch My Plan
            </div>
          </div>
          <hr class="border-gray-300" />
          <div class="py-8 px-16">
            <div class="text-xs text-blue-600">your default payment method ends in {{ auth()->user()->card_last_four }}</div>
            <div class="text-xs text-gray-500">To update your default payment method, add a new card below:</div>
          </div>
          <hr class="border-gray-300" />
          @endif
          <div class="py-8 px-16">
            <label for="card-holder-name" class="text-sm text-gray-600">Name on Card</label>
            <input
              class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500"
              id="card-holder-name" type="text" name="card-holder-name">
          </div>
          <hr class="border-gray-300" />
          <div class="py-8 px-16">
            <label for="cc" class="text-sm text-gray-600">Credit Card</label>
            <div id="card-element"
              class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500">
            </div>
            <div id="card-errors" class="text-red-400 text-bold mt-2 text-sm font-medium"></div>
          </div>

          @if(!auth()->user()->subscribed('main'))
            <hr class="border-gray-300" />
            <div class="py-8 px-16">
              <p class="text-sm text-gray-600 mb-4">Select a Plan</p>
              @include('partials.plans')
            </div>
          @endif
        </div>

      </div>
      <div class="p-16 py-8 bg-gray-300 clearfix rounded-b-lg border-t border-gray-200">
        <p class="float-left text-xs text-gray-500 tracking-tight mt-2">Click on Save to update your Billing Info</p>
        <button id="card-button" data-secret="{{ auth()->user()->createSetupIntent()->client_secret }}"
          class="bg-indigo-500 text-white text-sm font-medium px-6 py-2 rounded float-right uppercase cursor-pointer"
          type="submit">
          Update Payment Method
        </button>
      </div>
    </form>
  </div>
</div>



@endsection

@section('javascript')
<script src="https://js.stripe.com/v3/"></script>

<script>
  const stripe = Stripe('{{ env("STRIPE_KEY") }}');
  const elements = stripe.elements();
  const cardElement = elements.create('card');
  const cardError = document.getElementById('card-errors');
  cardElement.mount('#card-element');

  const cardHolderName = document.getElementById('card-holder-name');
  const cardButton = document.getElementById('card-button');
  const clientSecret = cardButton.dataset.secret;
  const form = document.getElementById('billing-form');

  cardElement.addEventListener('change', function(e) {
    if (e.error) {
      cardError.textContent = e.error.message;
    } else {
      cardError.textContent = '';
    }
  });


  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const { setupIntent, error } = await stripe.handleCardSetup(
        clientSecret, cardElement, {
            payment_method_data: {
                billing_details: { name: cardHolderName.value }
            }
        }
    );

    if (error) {
        console.log(error);
        cardError.textContent = error.message;
        console.log(cardError);
    } else {
        const hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'payment_method');
        hiddenInput.setAttribute('value', setupIntent.payment_method);
        form.appendChild(hiddenInput);
        form.submit();
    }
  });
</script>
@endsection