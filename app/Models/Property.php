<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'descripcion',
        'area',
        'precio',
        'caracteristicas',
        'city',
        'comentarios',
        'likes',
    ];

    protected $casts = [
        'user_id',
        'name',
        'descripcion',
        'area',
        'precio',
        'caracteristicas',
        'city',
        'comentarios',
        'likes',
    ];


    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function report(){
        return $this->hasOne(Report::class);
    }
}