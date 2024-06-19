<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Indiquez les colonnes qui peuvent être assignées en masse
    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    // Si le nom de la table est différent du nom par défaut
    protected $table = 'products';
}
