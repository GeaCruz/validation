<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    use HasFactory;

    protected $table = 'user_tasks';
    protected $guarded =[];


    // protected $fillable = [
    //     'user_id',
    //     'tas_id',
    //     'status_id',
    // ]

}