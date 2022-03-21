<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comments extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    public function user()
    {
        $this->belongsTo(User::class);
       
    }
    public function post(){

        $this->belongsTo(Post::class);
    }
    
}
