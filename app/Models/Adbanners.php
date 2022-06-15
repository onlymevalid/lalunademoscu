<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adbanners extends Model
{
      protected $fillable = [
        'image','type','link','position','city'
    ];
}