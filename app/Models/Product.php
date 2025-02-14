<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property float price
 * @property int stock
 * @property string $created_at
 * @property string $updated_at
 */

class Product extends Model
{
    use HasFactory;

    protected $fillable = ["name", "price", "stock"];
}
