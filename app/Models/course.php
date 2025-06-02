<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'syllabus', 'duration'];

    protected $attributes = [
        'syllabus' => 'null',
        "duration" => "null", // Example default
    ];
    use HasFactory;
}
