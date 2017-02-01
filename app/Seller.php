<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{

    protected $table = "seller_details";

    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
