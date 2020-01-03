<p class="text-sm text-gray-600 mb-4">Select a Plan</p>
@foreach($plans as $plan)
  <input type="radio" id="{{ ucfirst($plan->name) }}-plan" value="{{ $plan->name }}" name="plan" @if($loop->first) checked @endif class="radio-plan hidden"/>
  <label for="{{ ucfirst($plan->name) }}-plan" class="border-2 border-gray-300 w-full px-4 py-3 block rounded-lg cursor-pointer mb-3 block">
    <div class="flex">
      <img src="/img/plans/{{ $plan->name }}.png" class="w-16 h-16 mr-3" />
      <div>
        <span class="block">{{ ucfirst($plan->name) }}</span>
        <span class="text-xs text-gray-700">{{ $plan->description }}</span>
      </div>
    </div>
  </label>
@endforeach