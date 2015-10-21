<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = ['name'];

    public function items()
    {
        return $this->hasMany('App\Item');
    }
    
}
