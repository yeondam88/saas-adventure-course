<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class BillingController extends Controller
{
  public function billing(Request $request)
  {
    $plans = Plan::get();
    return view('settings.billing', compact('plans'));
  }

  public function billing_save(Request $request)
  {
    $user = auth()->user();

    try {
      if ($user->subscribed('main')) {
        // update their credit card
        $user->updateDefaultPaymentMethod($request->payment_method);
        $plan = Plan::where('name', '=', $request->plan)->first();
        $user->plan_id = $plan->id;
        $user->save();
        
      } else {
        $plan = Plan::where('name', '=', $request->plan)->first();
        $user->plan_id = $plan->id;
        $user->save();

        $user->newSubscription('main', $request->plan)->create($request->payment_method);
      }
    } catch (Exception $e) {
      return back()->with(['alert' => 'Something went wrong submitting your billing info', 'alert_type' => 'error']);
    }

    return back()->with(['alert' => 'Successfully updated your billing info', 'alert_type' => 'success']);
  }
}