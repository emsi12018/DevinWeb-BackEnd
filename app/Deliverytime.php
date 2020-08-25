<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliverytime extends Model
{
    protected $table="deliverytimes";

    protected $fillable = ['delivery_at', 'city_id'];

    public function city()
    {
        return $this->belongsToMany(City::class, 'city_deliverytime');
    }
}
