<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage()
    { 
        $imagePath= ($this->image)? $this->image
        :'uploads/EATa87pe0H8vRg8IdpwW70e7BHU3OIQ9ri9TVwOv.png';
        return '/storage/'.$imagePath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
