<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public static function boot(){

        parent::boot();
    }


    public function user(){

        return $this->belongsTo(User::class);
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }
}
