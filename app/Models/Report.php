<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'lodgers',
        'rental_cost',
        'cleaning_cost',
        'service_cost',

    ];

    public function bill(){
        return $this->hasOne(Bill::class);
    }
}