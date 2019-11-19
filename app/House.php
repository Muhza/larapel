<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = ['location_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
