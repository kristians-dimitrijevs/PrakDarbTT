<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/mY5jdis9GiaZbh9ZUReLHtFDGmZymyb4uK3A6iBS.png';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}
