<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thank extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'content'];
    public $timestamps = false;
}
