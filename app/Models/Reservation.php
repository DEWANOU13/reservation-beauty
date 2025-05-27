<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    // protected $fillable = ['client_name', 'client_email', 'service_id', 'nail_length', 'reserved_at', 'options'];
    protected $guarded = [];  
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
