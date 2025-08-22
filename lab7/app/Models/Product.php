<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //table name
    protected $table = 'products';
    //primary key
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'price'];
}
