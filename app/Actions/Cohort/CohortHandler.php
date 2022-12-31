<?php

namespace App\Actions\Cohort;

use App\Models\Cohort;
use Illuminate\Support\Str;

class CohortHandler
{
    public static function createCohort($request)
    {
        return Cohort::create([
            'reference' => Str::ulid(),
            'name' => strtoupper($request->name)
        ]);
    }

    public static function cohorts()
    {
        return Cohort::all();
    }
}