<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recording extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'recording_number',
        'title',
        'description',
        'link',
        'cohort_id',
        'track_id'
    ];
}
