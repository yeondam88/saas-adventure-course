<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.index');
    }

    public function notification(Request $request)
    {
        return view('admin.add_notifications');
    }

    public function create_notification(Request $request)
    {
        $newNotification = new Announcement;
        $newNotification->title = $request->title;
        $newNotification->description = $request->description;
        $newNotification->body = $request->body;
        $newNotification->save();
        return redirect('admin')->with(['alert' => 'Successfully created new announcement', 'alert_type' => 'success']);
    }
}