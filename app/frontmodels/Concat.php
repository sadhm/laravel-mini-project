<?php

namespace App\frontmodels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concat extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'email' , 'subject', 'message'];
}
