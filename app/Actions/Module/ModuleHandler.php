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
            'title' => $request->title,
            'cohort_id' => $request->cohort_id,
            'track_id' => $request->track_id
        ]);
    }

    public static function modules()
    {
        return Module::all();
    }
}