<?php

namespace App\Models;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;
    protected $fillable = ['reference', 'title', 'track_id'];

    public function topics() {
        return $this->hasMany(Topic::class, 'module_id');
    }
}
