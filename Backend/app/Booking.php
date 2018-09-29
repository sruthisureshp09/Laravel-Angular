<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   
    protected $fillable=['product_id','firstname','sdate','edate','lastname','add1','add2','city','country','state','phone1','phone2','email','zip','notes'];
    protected $table="bookings";
}
