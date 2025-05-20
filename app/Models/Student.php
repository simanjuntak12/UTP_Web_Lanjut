<?php

namespace App\Models;

use Illuminate\Database\Floquent\factories\HasFactory;
use Illuminate\Database\Floquent\Model;

class Student extends Model
{

    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];
    use HasFactory;
}