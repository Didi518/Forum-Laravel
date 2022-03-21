<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
 
    public function user()
    {
        $this->belongsTo(User::class, 'id');
        $this->belongsTo(Post::class, 'id');
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
