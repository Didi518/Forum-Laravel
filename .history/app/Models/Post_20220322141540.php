<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Comments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot(){

        parent::b oot();

        self::creating(function($post){
            $post->user()->associate(auth()->user()->id);
            $post->category()->associate(request()->category);
        });
    }
    public function comments(){
        return $this->hasMany(Comments::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }
}
