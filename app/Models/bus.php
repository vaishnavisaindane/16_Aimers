<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    use HasFactory;
     protected $table="buss";
    public $timestamps = false;
   protected $primaryKey="bus_id";
     protected $fillable=['bus_id','bus_model','seats','departure_time','Arrival_time','entry_point','destination','price'];

}
