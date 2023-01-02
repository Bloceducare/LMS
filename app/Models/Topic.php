<?php

namespace App\Models;

use App\Models\Module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    use HasFactory;
    protected $fillable = ['reference', 'title', 'description', 'module_id'];

    public function module() {
        return $this->belongsTo(Module::class, 'module_id');
    }
}
