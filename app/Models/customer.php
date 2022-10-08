<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
   
      protected $table="customers";
    public $timestamps = false;
   protected $primaryKey="id";
     protected $fillable=['id','email','password','name','phone','gender','created_at'];
}
