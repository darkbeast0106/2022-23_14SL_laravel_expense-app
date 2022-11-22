<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    // A megadott oszlopok nem látszódnak a lekérdezésekben.
    /*
    protected $hidden = [
        'updated_at'
    ];
    */

    // Csak a megadott oszlopok látszódnak a lekérdezésekben.
    protected $visible = [
        'id',
        'location',
        'cost',
        'created_at'
    ];

    // Az itt megadott oszlopokat lehet a fill függvénnyel kitölteni.
    protected $fillable = [
        'location',
        'cost'
    ];
}
