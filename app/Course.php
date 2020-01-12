<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'subdomain', 'headline', 'primary_color'
    ];

    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }
}