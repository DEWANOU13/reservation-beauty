<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];  

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function getPriceByLength($length)
    {
        switch ($length) {
            case 'long':
                return $this->price_long;
            case 'medium':
                return $this->price_medium;
            case 'short':
                return $this->price_short;
            default:
                return null;
        }
    }
}
