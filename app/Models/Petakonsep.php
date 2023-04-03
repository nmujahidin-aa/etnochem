<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Petakonsep extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "petakonseps";
    protected $fillable = [
        'title',
        'file',
        'description'
    ];
}
