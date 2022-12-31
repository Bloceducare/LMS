<?php

namespace App\Actions\Curriculum;

use App\Models\Curriculum;
use Illuminate\Support\Str;

class CurriculumHandler
{
    public static function createCurriculum($request)
    {
        return Curriculum::create([
            'reference' => Str::ulid(),
            'module_id' => $request->module_id,
            'cohort_id' => $request->cohort_id,
            'track_id' => $request->track_id
        ]);
    }

    public static function curricula()
    {
        return Curriculum::all();
    }
}