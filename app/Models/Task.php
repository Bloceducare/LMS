<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'title',
        'description',
        'link',
        'deadline',
        'cohort_id',
        'track_id',
        'group_id',
        'user_id'
    ];
}
