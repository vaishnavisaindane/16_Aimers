<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
     protected $table="bookings";
    public $timestamps = false;
   protected $primaryKey="book_id";
     protected $fillable=['book_id','bus_id','cust_id','seat','passenger','mobile','age','gender','amount','discount','paid'];

}
