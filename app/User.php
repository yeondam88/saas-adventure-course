<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Cashier\Billable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'trial_ends_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = [
        'trial_ends_at',
    ];


    public function getPhotoAttribute($value)
    {
        if (is_null($value)) {
            return url('/img/default.png');
        } else {
            // return the uploaded photo
            return Storage::url('public/images/user/' . $value);
        }
    }

    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }

    public function announcements()
    {
        return $this->belongsToMany('App\Announcement');
    }

    public function hasUnreadAnnouncements()
    {
        $totalAnnouncements = \App\Announcement::count();
        $userAnnouncements = $this->announcements()->count();
        if ($totalAnnouncements > $userAnnouncements) {
            return true;
        }
        return false;
    }

    public function unreadAnnouncements()
    {
        $announcements = \App\Announcement::orderBy('created_at', 'DESC')->get();
        $unreadAnnouncements = [];
        foreach ($announcements as $announcement) {
            if (!$this->announcements()->where('id', $announcement->id)->exists()) {
                array_push($unreadAnnouncements, $announcement);
            }
        }
        return $unreadAnnouncements;
    }
}