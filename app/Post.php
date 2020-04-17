<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['description', 'featured_image', 'user_id'];

    public function user(){
        $this->belongsTo('App\User');
    }
}
