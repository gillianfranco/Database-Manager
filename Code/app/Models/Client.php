<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**Campos de cadastro */
    protected $fillable = ['id', 'name', 'age', 'email', 'phone', 'address', 'observation'];
}
