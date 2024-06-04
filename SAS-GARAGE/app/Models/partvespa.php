<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partvespa extends Model
{
    use HasFactory;

    protected $table = 'partvespa';


    protected $fillable = [
        'namaparts','foto','link'
    ];
}
