<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [
        'nom',
        'phone',
        'email',
        'adresse',
        'expiration',
        'cvv',
        'province',
        'id_logement', 
        'cart_number',
        
    ] ;
    use HasFactory;

}
