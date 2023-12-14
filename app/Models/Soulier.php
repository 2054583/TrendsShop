<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soulier extends Model
{
    use HasFactory;
    protected $fillable = ['marque','taille','photo'];
}
