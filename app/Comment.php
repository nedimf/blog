<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $fillable = [
        'author','content','post_id',
    ];

   /* public function post() {

    	  return $this->belongsTo("App\Post");
    }

    */

}
