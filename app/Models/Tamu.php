<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;
    protected $table = 'tamu';
    protected $primaryKey = 'id';
    protected $fillable = ['username', 'name', 'address'];
}
