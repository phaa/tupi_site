<?php

namespace tupi_site;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'description', 'price', 'product_type_id'
    ];
}
