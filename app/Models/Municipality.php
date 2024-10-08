<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = [
        "name",
        "offices",
        "cvegeo",
        "cve_mun",
        "locations"
    ];

}