<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table="cities";

    protected $fillable = ['name', 'delivery_time'];

    public function deliverytimes()
    {
        return $this->belongsToMany(Deliverytime::class, 'city_deliverytime');
    }

    public function partners()
    {
        return $this->hasOne(Partner::class);
    }
}
