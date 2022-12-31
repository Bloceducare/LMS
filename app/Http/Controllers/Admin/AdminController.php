<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Actions\User\UserHandler;
use App\Actions\Track\TrackHandler;
use App\Http\Controllers\Controller;
use App\Actions\Cohort\CohortHandler;

class AdminController extends Controller
{
    public function createUser(Request $request){
        $request->validate([
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'role' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
            'cohort_id' => ['required', 'numeric'],
            'track_id' => ['required', 'numeric'],
            'country_id' => ['required', 'numeric']
        ]);

        return UserHandler::createUser($request);
    }

    public function createCohort(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'unique:cohorts']
        ]);

        return CohortHandler::createCohort($request);
    }

    public function createTrack(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'unique:tracks']
        ]);

        return TrackHandler::createTrack($request);
    }
}
