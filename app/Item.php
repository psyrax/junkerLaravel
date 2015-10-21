<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable = ['name', 'region', 'platform', 'category', 'type', 'catalog_number', 'isbn', 'sku', 'role', 'directed', 'kojima_team', 'release_date', 'year', 'collection_id'];
    public function collection()
    {
        return $this->belongsTo('App\Collection');
    }
    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
