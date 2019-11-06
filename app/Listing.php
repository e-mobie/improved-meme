<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user()
    {
      // code...
      return $this->belongsTo('App\User');
    }
}
