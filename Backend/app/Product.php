<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['category_id','title','add1','add2','city','country','state','phone1','phone2','zip','imagepath','offers','type','events'];
    protected $table="products";
}
