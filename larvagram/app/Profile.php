<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        return ($this->image) ? '/storage/' . $this->image : '/jpg/no-profile-pic.jpg';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
