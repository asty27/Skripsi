<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetectedImage extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'detected_images';

    protected $guarded = ['id'];
}

