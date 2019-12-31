<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
  public function billing(Request $request)
  {
    return view('settings.billing');
  }

  public function billing_save(Request $request)
  {
    $user = auth()->user();

    try {
      if ($user->subscribed('main')) {
        // update their credit card
        $user->updateDefaultPaymentMethod($request->payment_method);
      } else {
        $user->newSubscription('main', 'basic')->create($request->payment_method);
      }
    } catch (Exception $e) {
      return back()->with(['alert' => 'Something went wrong submitting your billing info', 'alert_type' => 'error']);
    }

    return back()->with(['alert' => 'Successfully updated your billing info', 'alert_type' => 'success']);
  }
}