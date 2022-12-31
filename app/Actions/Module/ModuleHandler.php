<?php

namespace App\Actions\Module;

use App\Models\Module;
use Illuminate\Support\Str;

class ModuleHandler
{
    public static function createModule($request)
    {
        return Module::create([
            'reference' => Str::ulid(),
            'title' => strtolower($request->title),
            'track_id' => $request->track_id
        ]);
    }

    public static function modules()
    {
        return Module::all();
    }
}