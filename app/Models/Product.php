<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'supplier_id',
        'supplier_name'
    ];


    // public function descriptionF() {
    //     return $this->belongsTo(Description::class);
    // }
}
