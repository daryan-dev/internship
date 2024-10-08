<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookuser extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];
    public $timestamps = false;
}
