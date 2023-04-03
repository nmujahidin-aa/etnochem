<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bahan extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "bahans";
    protected $fillable = [
        'title',
        'file',
        'description'
    ];
}
