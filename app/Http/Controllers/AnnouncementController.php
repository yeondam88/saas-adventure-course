<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index(Request $request)
    {
        $announcements = \App\Announcement::orderBy('created_at', 'DESC')->get();
        return view('announcements.index', compact('announcements'));
    }

    public function unread(Request $request)
    {
        $user = auth()->user();
        $announcements = $user->unreadAnnouncements();
        foreach ($announcements as $announcement) {
            $user->announcements()->attach($announcement->id);
        }
        return view('announcements.index', compact('announcements'));
    }

    public function announcement(Request $request, $id)
    {
        $announcement = \App\Announcement::find($id);
        return view('announcements.announcement', compact('announcement'));
    }
}