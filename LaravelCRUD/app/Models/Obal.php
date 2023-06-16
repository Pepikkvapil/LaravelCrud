<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obal extends Model
{
    protected $table = 'obaly';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'material', 'size'];


    use HasFactory;
}
