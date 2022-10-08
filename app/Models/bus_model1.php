<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus_model1 extends Model
{
    use HasFactory;
    // protected $connection = "mongodb";
    // public $timestamps =false;

    // protected $fillable=['sub_id', 'exam_sub_name','date','time','duration', 'total_marks','no_of_que','category','show_result','status'];


     protected $table= "buss";
     // protected $primaryKey = 'bus_id';
     public $timestamps =false;
     protected $fillable=['bus_id','bus_model','seats','departure_time','Arrival_Time','entry_point','destination','price'];

     
}

