<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing_address extends Model
{
    use HasFactory;
    public function citi()
    {
        return $this->belongsTo(City::class,'city');
    }
    public function stat()
    {
        return $this->belongsTo(State::class,'state');
    }
    public function countri()
    {
        return $this->belongsTo(Country::class,'country');
    }
}
