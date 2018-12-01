<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smart extends Model
{

public function user()

{

    return $this->belongsTo(\App\User::class);
}



}
